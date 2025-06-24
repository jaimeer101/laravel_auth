<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link href="assets/images/favicon.png" rel="icon" type="image/png">

        <!-- title and description-->
        <title>
            My Hobbies and Collections 
            @isset($title)
                {{ " - ".$title }} 
            @endisset
        </title>
        <meta name="description" content="My Hobbies and Collections - is a community for collectors, you can post anything about your collection or hobbies. As long as it is illegal and does not promote to do crimes you can post it">
    
        <!-- css files -->
         @viteReactRefresh
         @vite(['resources/css/tailwind.css', 'resources/css/social_lite_style.css', 'resources/js/app.jsx'])
        
        
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    
        <!-- custom style -->
    </head>
    <body>
        <div id="wrapper">
            @include('includes.layouts.app.header')
            @if(Auth::check())
                @include('includes.layouts.app.sidebar')
            @endif
            
            <!-- main contents -->
            <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
                {{ $slot }}
                
            </main>
        </div>
        @include('includes.layouts.app.chat')
        @isset($modal)
            {{ $modal }}
        @endisset
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

        @vite(['resources/js/uikit.min.js', 'resources/js/simplebar.js', 'resources/js/script.js'])
        <!-- Ion icon -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        @isset($js)
            {{ $js }}
        @endisset
    </body>
</html>