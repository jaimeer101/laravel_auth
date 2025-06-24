@php
    $name = isset(Auth::user()->name) ? Auth::user()->name : "";
    $emailName = "";
    if(isset(Auth::user()->email)){
        list($emailName, $emailServer) = explode("@", Auth::user()->email);
    }
    
@endphp
<x-slot name="name">{{ $name }}</x-slot>
<header class="z-[100] h-[--m-top] fixed top-0 left-0 w-full flex items-center bg-white/80 sky-50 backdrop-blur-xl border-b border-slate-200 dark:bg-dark2 dark:border-slate-800">
    <div class="flex items-center w-full xl:px-6 px-2 max-lg:gap-10">
        <div class="2xl:w-[--w-side] lg:w-[--w-side-sm]">
            <!-- left -->
            <div class="flex items-center gap-1"> 

                <!-- icon menu -->
                <button uk-toggle="target: #site__sidebar ; cls :!-translate-x-0"
                        class="flex items-center justify-center w-8 h-8 text-xl rounded-full hover:bg-gray-100 xl:hidden dark:hover:bg-slate-600 group"> 
                        <ion-icon name="menu-outline" class="text-2xl group-aria-expanded:hidden"></ion-icon>
                        <ion-icon name="close-outline" class="hidden text-2xl group-aria-expanded:block"></ion-icon>
                </button>
                <div id="logo">
                    <a href="{{ route('dashboard') }}"> 
                        MyHobbiesandCollection
                        <img src="assets/images/logo-light.png" alt="" class="dark:md:block hidden">
                        <img src="assets/images/logo-mobile.png" class="hidden max-md:block w-20 dark:!hidden" alt="Icon">
                        <img src="assets/images/logo-mobile-light.png" class="hidden dark:max-md:block w-20" alt="Icon">
                    </a>
                </div>
            </div>
        </div>
        <div class="flex-1 relative">
            <div class="max-w-[1220px] mx-auto flex items-center">
                        
                <!-- search -->
                <div id="search--box" class="xl:w-[680px] sm:w-96 sm:relative rounded-xl overflow-hidden z-20 bg-secondery max-md:hidden w-screen left-0 max-sm:fixed max-sm:top-2 dark:!bg-white/5">
                    <ion-icon name="search" class="absolute left-4 top-1/2 -translate-y-1/2"></ion-icon>
                    <input type="text" placeholder="Search Friends, videos .." class="w-full !pl-10 !font-normal !bg-transparent h-12 !text-sm">
                </div>  
                <!-- search dropdown-->
                <div class="hidden uk- open z-10"
                        uk-drop="pos: bottom-center ; animation: uk-animation-slide-bottom-small;mode:click ">
                    
                        <div class="xl:w-[694px] sm:w-96 bg-white dark:bg-dark3 w-screen p-2 rounded-lg shadow-lg -mt-14 pt-14">
                            <div class="flex justify-between px-2 py-2.5 text-sm font-medium"> 
                                <div class=" text-black dark:text-white">Recent</div>
                                <button type="button" class="text-blue-500">Clear</button>
                            </div>
                            <nav class="text-sm font-medium text-black dark:text-white">
                                <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div> Jesse Steeve </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  Martin Gray </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/group/group-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  Delicious Foods  </div>  <div class="text-xs text-rose-500 font-medium mt-0.5">  Group </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/group/group-1.jpg" class="w-9 h-9 rounded-full"> <div>   <div> Delicious Foods  </div>  <div class="text-xs text-yellow-500 font-medium mt-0.5">  Page </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/avatars/avatar-6.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  John Welim </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                <a href="#" class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <ion-icon class="text-2xl" name="search-outline"></ion-icon>  Creative ideas about Business  </a>  
                                <a href="#" class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <ion-icon class="text-2xl" name="search-outline"></ion-icon>  8 Facts About Writting  </a>  
                            </nav>
                            <hr class="-mx-2 mt-2 hidden">
                            <div class="flex justify-end pr-2 text-sm font-medium text-red-500 hidden"> 
                                <a href="#" class="flex hover:bg-red-50 dark:hover:bg-slate-700 p-1.5 rounded"> <ion-icon name="trash" class="mr-2 text-lg"></ion-icon> Clear your history</a> 
                            </div>
                        </div>
                        
                </div>

                @if(Auth::check())
                    @include('includes.layouts.app.header-icons')
                @else 
                    <div class="flex items-center sm:gap-4 gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black">
                        <a href="{{ route("login") }}" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white">
                            Login
                        </a>
                        <a href="{{ route("register") }}" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white">
                            Register
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</header>