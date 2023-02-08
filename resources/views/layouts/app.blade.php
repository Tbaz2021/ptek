<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <!-- Scripts -->

    </head>
    <body class="font-sans antialiased ">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <div >
            <div class="bg-secondary rounded-top p-4 ">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#"  class="text-white">P4TEK Computer Limited</a>, All Right Reserved.
                        <ul class="list-group text-white">
                         <li>p4tekcomputers@gmail.com <span class="text-warning">+234701793590</span></li>
                            <li>3rd Floor, 19 Toyin Street ( Polarity Bank Building ), Ikeja Lagos Nigeria.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="#" class="text-white">Baz Tech Solver</a>
                        <br><p class="text-white">baztechsolver@gmail.com <span class="text-warning">+2348077295755</span></p>

                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</html>
