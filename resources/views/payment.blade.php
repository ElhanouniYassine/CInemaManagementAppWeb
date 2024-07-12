<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center w-screen min-h-screen bg-gray-100 text-gray-800 p-8">

	<!-- Component Start -->
	<div >
		<div class="lg:col-span-2">
			<h2 class="text-sm font-medium">Payment Method</h2>
			<div class="bg-white rounded mt-4 shadow-lg">
				<div class="flex items-center px-8 py-5">
						<input class="appearance-none w-4 h-4 rounded-full border-2 border-white ring-2 ring-blue-600 ring-opacity-100" type="radio" name="option">
						<label class="text-sm font-medium ml-4">PayPal</label>
					</div>
				<div class="border-t">
					<div class="flex items-center px-8 py-5">
						<input class="appearance-none w-4 h-4 rounded-full border-2 border-white ring-2 ring-blue-600 ring-opacity-100 bg-blue-600" type="radio" name="option">
						<label class="text-sm font-medium ml-4">Credit Card</label>
					</div>
					<div class="grid grid-cols-2 gap-4 px-8 pb-8 w-full">
						<form action="{{route('movies.reserve_ticket')}}" method="POST">
                            @csrf
                            
                            <div class="col-span-2 ">
                                <label class="text-xs font-semibold" for="card_number">Card Number</label>
                                <input class="flex items-center h-10 border mt-1 rounded px-4 w-full text-sm" type="text" placeholder="0000 0000 0000 0000" name="cardNumber">	
                            </div>
                            <div class="col-span-2">
                                <label class="text-xs font-semibold" for="Email">CCV/CCC</label>
                                <input class="flex items-center h-10 border mt-1 rounded px-4 w-full text-sm" type="text" placeholder="123" name="CCC">	
                            </div>
                            <div class="col-span-2">
                                <label class="text-xs font-semibold" for="Email">Email</label>
                                <input class="flex items-center h-10 border mt-1 rounded px-4 w-full text-sm" type="text" placeholder="example@gmail.com" name="email">	
                            </div>
                            <div class="col-span-2">
                                <label class="text-xs font-semibold" for="name">Name</label>
                                <input class="flex items-center h-10 border mt-1 rounded px-4 w-full text-sm" type="text" placeholder="Yassine" name="name">	
                            </div>
                            <button type="submit" class="flex items-center justify-center bg-blue-600 text-sm font-medium w-full h-10 rounded text-blue-50 hover:bg-blue-700">Reserver</button>

                        </form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
    
    
</body>
</html>