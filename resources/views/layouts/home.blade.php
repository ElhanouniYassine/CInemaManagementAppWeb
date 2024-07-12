<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body style="margin: 0%;padding:0%;">

<header class="header">
    <div class="section1">
        <a href="{{route('movies.index')}} " >Home</a>
    </div>
    <div class="section2">
        @auth
        <div>
            <div 
            onclick="toggleMenu()"

            class="relative inline-block text-left">
                <div>
                  <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md  px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm  " id="menu-button" aria-expanded="true" aria-haspopup="true"
                  style="color: white;
                  font-style: normal;
                  font-weight: 600;
                  font-family: Arial, Helvetica, sans-serif;
                  text-decoration: none; /* Remove underline */
                  z-index: 10;
                  "
                  >
                    {{
                        Auth::user()->name
                    }}
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
              
                <!--
                  Dropdown menu, show/hide based on menu state.
              
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div
                class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white/85 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                  <div 
                    id="menu"
                    style="display: none;"
                  class="py-1 " role="none">
                   
                      <a href="{{route('movies.logout')}}"
                      class="text-gray-700 block w-full px-4 py-2 text-left text-sm" >Sign out</a>
                      <a href="{{route('movies.recommandation')}}"
                      class="text-gray-700 block w-full px-4 py-2 text-left text-sm" >Recommander</a>

                  </div>
                </div>
              </div>
           
        </div>

        @else
        <a href="{{route('movies.registration')}} " >Creer un compte</a>
        <a href="{{route('movies.signin')}} " >Connecter</a>
            
        @endauth
    </div>
</header>



<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');
        if (menu.style.display === 'none') {
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    }
</script>
<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: 4rem;
        position: absolute;
        top: 0;
        z-index: 20;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
    }

    .section1,
    .section2 {
        display: flex;
        align-items: center;
        gap: 3rem;
        padding: 0 2rem;
        height: 100%;
        
    }

    .section2 {
        padding-right: 25px;
       
    }

    a {
        color: white;
        font-style: normal;
        font-weight: 600;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none; /* Remove underline */
        z-index: 10;
    }
    
</style>
    @yield('content')

</body>
</html>