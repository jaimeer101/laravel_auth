<x-app-layout>
    <div class="max-w-3xl mx-auto">
        <div class="box relative rounded-lg shadow-md">
            <div class="flex md:gap-8 gap-4 items-center md:p-8 p-6 md:pb-4">
                <div class="relative md:w-20 md:h-20 w-12 h-12 shrink-0">
                    <form name="frmUploadProfile" id="frmUploadProfile" action="{{ route('profile.save_profile') }}" enctype="multipart/form-data">
                        <label for="fle_main_image" class="cursor-pointer">
                            <img id="img" src="{{ asset(config("defaults.users_profile")) }}" class="object-cover w-full h-full rounded-full" alt="Profile Picture"/>
                            <input type="file" id="fle_main_image" name="fle_main_image" class="hidden" />
                        </label>

                        <label for="fle_sub_image" class="md:p-1 p-0.5 rounded-full bg-slate-600 md:border-4 border-white absolute -bottom-2 -right-2 cursor-pointer dark:border-slate-700">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-4 md:h-4 w-3 h-3 fill-white">
                                <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" />
                                <path fill-rule="evenodd" d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                            </svg>
                            <input type="file" id="fle_sub_image" name="fle_sub_image"  class="hidden" />
                        </label>
                    </form>
                    
                </div>
                <div class="flex-1">
                    <h3 class="md:text-xl text-base font-semibold text-black dark:text-white">{{ $user->name }}</h3>
                    <p class="text-sm text-blue-600 mt-1 font-normal">{{ "@".$userEmail }}</p>
                </div>
            </div>
            <div class="relative border-b" tabindex="-1" uk-slider="finite: true">
                <nav class="uk-slider-container overflow-hidden nav__underline px-6 p-0 border-transparent -mb-px">
                    @php
                        $categoryDetails = "";
                        
                    @endphp
                    <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden" 
                        uk-switcher-off="connect: #setting_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                        @foreach ($profilesCategory as $category)
                            @php
                                $active = "";
                            @endphp
                            @if ($page == $category->attributes_category_code)
                                @php
                                    $active = "aria-expanded=true";
                                    $categoryDetails = $category;
                                @endphp
                            @endif
                            <li class="w-auto pr-2.5"> 
                                <a href="{{ route('profile.page', $category->attributes_category_code) }}" {{ $active }}>{{ $category->attributes_category_name }}</a> 
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <a class="absolute -translate-y-1/2 top-1/2 left-0 flex items-center w-20 h-full p-2 py-1 justify-start bg-gradient-to-r from-white via-white dark:from-slate-800 dark:via-slate-800" href="#" uk-slider-item="previous"> 
                    <ion-icon name="chevron-back" class="text-2xl ml-1"></ion-icon> 
                </a>
                <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-20 h-full p-2 py-1 justify-end bg-gradient-to-l from-white via-white dark:from-slate-800 dark:via-slate-800" href="#" uk-slider-item="next">  
                    <ion-icon name="chevron-forward" class="text-2xl mr-1"></ion-icon> 
                </a>
            </div>
            <div id="setting_tab" class="uk-switcher-off md:py-12 md:px-20 p-6 overflow-hidden text-black text-sm">
                
                @php
                    $includePage = "includes.pages.profiles.".$page;
                    /*echo "<pre>";
                    print_r($categoryDetails);
                    echo "</pre>";
                    exit;*/
                @endphp
                @include($includePage, ["category" => $categoryDetails])
            </div>
        </div>
    </div>
    <x-slot name="js">
        <script type="text/javascript" src="{{ asset("storage/build/js/pages/profile.js") }}"></script>
    </x-slot>
</x-app-layout>