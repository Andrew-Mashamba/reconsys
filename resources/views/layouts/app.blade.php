<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="http://localhost:8080/reconsys/public/css/app.css">
        <script src="//unpkg.com/alpinejs" defer></script>

        @trixassets
        @livewireStyles

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <!-- Scripts -->
        <script src="http://localhost:8080/reconsys/public/js/app.js" defer></script>

        <style>
            [x-cloak] { display: none !important; }
            body{

            }
        </style>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />





        <style>
            @layer utilities {
                /* Chrome, Safari and Opera */
                .no-scrollbar::-webkit-scrollbar {
                    display: none;
                }

                .no-scrollbar {
                    -ms-overflow-style: none; /* IE and Edge */
                    scrollbar-width: none; /* Firefox */
                }
            }

            ul#menu li a.active{
                color: rgba(255, 255, 255, 0);
                transform: translateX(20px);
            }

            .wrapper{
                display:grid;
                height:100vh;
                place-items:center
            }

        </style>



        <style>

            @import url(//fonts.googleapis.com/css?family=Lato:300:400);

            body {
                margin:0;
            }


            p {
                font-family: 'Lato', sans-serif;
                letter-spacing: 1px;
                font-size:14px;
                color: #333333;
            }

            .header {
                position:relative;
                text-align:center;
                background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
                color:white;
            }
            .logo {
                width:50px;
                fill:white;
                padding-right:15px;
                display:inline-block;
                vertical-align: middle;
            }

            .inner-header {
                height:65vh;
                width:100%;
                margin: 0;
                padding: 0;
            }



            .waves {
                position:relative;
                width: 100%;
                height:15vh;
                margin-bottom:-7px; /*Fix for safari gap*/
                min-height:100px;
                max-height:150px;
            }

            .content {
                position:relative;
                height:20vh;
                text-align:center;
                background-color: white;
            }

            /* Animation */

            .parallax > use {
                animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
            }
            .parallax > use:nth-child(1) {
                animation-delay: -2s;
                animation-duration: 7s;
            }
            .parallax > use:nth-child(2) {
                animation-delay: -3s;
                animation-duration: 10s;
            }
            .parallax > use:nth-child(3) {
                animation-delay: -4s;
                animation-duration: 13s;
            }
            .parallax > use:nth-child(4) {
                animation-delay: -5s;
                animation-duration: 20s;
            }
            @keyframes move-forever {
                0% {
                    transform: translate3d(-90px,0,0);
                }
                100% {
                    transform: translate3d(85px,0,0);
                }
            }
            /*Shrinking for mobile*/
            @media (max-width: 768px) {
                .waves {
                    height:40px;
                    min-height:40px;
                }
                .content {
                    height:30vh;
                }
                h1 {
                    font-size:24px;
                }
            }
        </style>





    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>




    </body>
</html>
