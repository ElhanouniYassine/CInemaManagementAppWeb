<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Symfony\Component\Process\Process;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\TicketMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class MovieController extends Controller
{
    public function index()
    {
        
        $movies= Movie::all();
        return view('HomePage', ['movies' => $movies]);
    }

    public function fetshMovies($id) { 
        $movies= Movie::all();
        $moviePage=$movies->find($id);   
        $movie = Movie::with('projections')->findOrFail($id)->toArray();
        $MovieProjection=$movie["projections"];
        $dates=[];
        foreach($MovieProjection as $projection){
            $dates[]=$projection["projection_datetime"];
        }
    
        $result = [];

        foreach ($dates as $dateTime) {
            
            [$date, $time] = explode(' ', $dateTime);
            
            if (!isset($result[$date])) {
                $result[$date] = []; 
            }
            
        
            $result[$date][] = $time;
        }
        return view('moviepage',['movie' => $moviePage, 'datetimearray' => $result]);
    }
    public function showForm(){
        if (Auth::check()) {
            return redirect()->route('movies.index');
        }
        return view('registration');
    }

        
    public function store(Request $request)
    {
        
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        return to_route('movies.index');
    }


    
    
    public function signin(){
        // if is ahted redirect to home page
        if (Auth::check()) {
            return redirect()->route('movies.index');
        }
        return view('signin');
    
    }
    public function ticket_siege($id){
        $movies= Movie::all();
        $moviePage=$movies->find($id);   
        $movie = Movie::with('projections')->findOrFail($id)->toArray();
        $MovieProjection=$movie["projections"];
        $dates=[];
        foreach($MovieProjection as $projection){
            $dates[]=$projection["projection_datetime"];
        }
    
        $result = [];

        foreach ($dates as $dateTime) {
            
            [$date, $time] = explode(' ', $dateTime);
            
            if (!isset($result[$date])) {
                $result[$date] = []; 
            }
            
        
            $result[$date][] = $time;
        }
        return view('ticket_siege',['movie' => $moviePage, 'datetimearray' => $result]);
    }
    public function recommandation(Request $request){

        $movieName = $request->input('movie');
        // Execute the Python script and capture its output
        $process = new Process(["python3", "/home/yassine/Desktop/recommadation_py/recommendation_system.py", $movieName]);
        $process->run();
        $output = $process->getOutput();
        // parse the output that is an array as a string
        $output = trim($output, "[]'");
        // Split the string into an array using the comma as a delimiter
        $array = explode("', '", $output);        
        return view('recommandation',['recommendedMovies' => $array]);
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
       
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/');
        }
        else{
           return redirect()->route('movies.signin');
        }
        
        
    }
    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('movies.index');
    }

    
    public function dashboard(){
        return view('dashboard');
    }
    
    public function add_movie(){
        return view('dashboard_add');
    }
    public function delete_movie(){
        return view('dashboard_delete');
    }
    public function announcement(){
        return view('dashboard_announcement');
    }
    
    public function payment(){

        return view('payment');
    }

    public function reserveTicket(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
        ]);

        $email = $request->input('email');
        $name = $request->input('name');
        $ticketData = [
            'name' => $name,
            'email' => $email,
        ];

        try {
            Mail::to($email)->send(new TicketMail($ticketData));
            return back()->with('success', 'Ticket reserved successfully! Please check your email.');
        } catch (Exception $e) {
            Log::error('Mail sending failed: '.$e->getMessage());
            return back()->with('error', 'There was an error sending the email.');
        }
    }
    
}
