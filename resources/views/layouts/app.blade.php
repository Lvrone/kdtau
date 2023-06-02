<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <!-- Style -->
    @vite('resources/css/app.css')
</head>

<body>

    <body class="bg-custom-bg">

        <div class="navbar bg-base-100">
            @yield('menu')
            @yield('logo')
            <div class="navbar-end">
                @yield('cari')
                <div class="m-5">
                    <a href="{{url('/')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </a>
                </div>

                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img src="https://via.placeholder.com/380x380" />
                        </div>




                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href=" {{url('login')}} ">Login</a></li>
                        <li><a>Register</a></li>

                        <body class="bg-custom-bg">

                    </ul>
                </div>
            </div>
        </div>

        {{-- <!-- @include('layouts.app.navbar') --> --}}

        @yield('content')

        @include('layouts.app.footer')

    </body>

</html>