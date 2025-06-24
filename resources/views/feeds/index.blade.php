<x-app-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="lg:flex 2xl:gap-16 gap-12 max-w-[1065px] mx-auto"  id="js-oversized">
        <div class="max-w-[680px] mx-auto" id ="app1">
            @include("includes.pages.feeds.stories")
            <!-- feed story -->
            <div class="md:max-w-[580px] mx-auto flex-1 xl:space-y-6 space-y-3">
                <div class="bg-white rounded-xl shadow-sm md:p-4 p-2 space-y-4 text-sm font-medium border1 dark:bg-dark2">
                    <div class="flex items-center md:gap-3 gap-1">
                        <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3" uk-toggle="target: #create-status"> 
                            <div class="py-2.5 text-center dark:text-white"> What do you have in mind? </div>
                        </div>
                        <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-xl transition-all bg-pink-100/60 hover:bg-pink-100 dark:bg-white/10 dark:hover:bg-white/20" uk-toggle="target: #create-status">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-pink-600 fill-pink-200/70" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M15 8h.01" />
                                <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                <path d="M3.5 15.5l4.5 -4.5c.928 -.893 2.072 -.893 3 0l5 5" />
                                <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l2.5 2.5" />
                            </svg>
                        </div>
                        <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-xl transition-all bg-sky-100/60 hover:bg-sky-100 dark:bg-white/10 dark:hover:bg-white/20" uk-toggle="target: #create-status">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-sky-600 fill-sky-200/70 " viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                            </svg>
                        </div> 
                    </div>
                </div>
                @foreach($postList as $post)
                    <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">
                        <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                            <a href="timeline.html"> 
                                <img src="storage/images/defaults/users_profile_default_2.jpg" alt="Profile Users" class="w-9 h-9 rounded-full"> 
                            </a>  
                            <div class="flex-1">
                                <a href="timeline.html"> 
                                    <h4 class="text-black dark:text-white"> {{ $post->users->name }} </h4> 
                                </a>  
                                <div class="text-xs text-gray-500 dark:text-white/80">{{ $post->display_date }}</div>
                            </div>
                            <div class="-mr-1">
                                <button type="button" class="button__ico w-8 h-8" aria-haspopup="true" aria-expanded="false"> <ion-icon class="text-xl md hydrated" name="ellipsis-horizontal" role="img" aria-label="ellipsis horizontal"></ion-icon> </button>
                                <div class="w-[245px] uk-dropdown" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                    <nav> 
                                        <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated" name="bookmark-outline" role="img" aria-label="bookmark outline"></ion-icon>  Add to favorites </a>  
                                        <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated" name="notifications-off-outline" role="img" aria-label="notifications off outline"></ion-icon> Mute Notification </a>  
                                        <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated" name="flag-outline" role="img" aria-label="flag outline"></ion-icon>  Report this post </a>  
                                        <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated" name="share-outline" role="img" aria-label="share outline"></ion-icon>  Share your profile </a>  
                                        <hr>
                                        <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl shrink-0 md hydrated" name="stop-circle-outline" role="img" aria-label="stop circle outline"></ion-icon>  Unfollow </a>  
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="sm:px-4 p-2.5 pt-0">
                            <p class="font-normal">{{ $post->description }}</p>
                        </div>
                        <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                            <form name="frmPostReact" id="frmPostReact" method="POST" action="{{ route('posts.react') }}">
                                @csrf
                                <input type="hidden" name="hdn_post_id" id="hdn_post_id" value="{{ $post->id }}">
                                <div>
                                    <div class="flex items-center gap-2.5">
                                        @foreach($reactionsList as $reactions)
                                            @php 
                                                $reactionCount = $reactions->code."_count";
                                                $userReactionIcon = "-outline";
                                                /*echo "<pre>";
                                                print_r($post->posts_reactions);
                                                echo "</pre>";*/
                                                $userReact = $post->posts_reactions()->where("users_id", Auth::id())->exists();
                                                if($userReact){
                                                    $userReactDetails = $post->posts_reactions()->where("users_id", Auth::id())->first();
                                                    $userReactionIcon = $userReactDetails->reactions_id == $reactions->id ? "" : "-outline";
                                                    
                                                }
                                            @endphp
                                            <button type="button" class="text-{{ $reactions->icon_color }}-600 hover:scale-125 duration-300 post_react" title="{{ $reactions->name }}" data-id="{{ $reactions->id }}">
                                                <ion-icon class="text-lg" name="{{ $reactions->icon }}{{ $userReactionIcon }}" ></ion-icon>
                                            </button>
                                            <a href="#">{{ $post->$reactionCount }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </form>
                            
                            <div class="flex items-center gap-3">
                                <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                                <span>{{ $post->comments_count }}</span>
                            </div>
                            <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl" name="paper-plane-outline"></ion-icon> </button>
                            <button type="button" class="button-icon"> <ion-icon class="text-xl" name="share-outline"></ion-icon> </button>
                        </div>
                        <!--start of display comments-->
                        <div class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40"> 
                            @php
                                $commentsList = $post->posts_comments()->limit(3)->get();
                            @endphp
                            @foreach($commentsList as $comments)
                                <div class="flex items-start gap-3 relative">
                                    <a href="timeline.html"> 
                                        <img src="storage/images/defaults/users_profile_default_2.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> 
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> 
                                            {{ $comments->users->name }} 
                                        </a>
                                        <p class="mt-0.5">{{ $comments->comments }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--end of display comments-->
                        <!-- start of adding comments -->
                        <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
                        
                            <img src="storage/images/defaults/users_profile_default_2.jpg" alt="" class="w-6 h-6 rounded-full">
                            
                            <div class="flex-1 relative overflow-hidden h-10">
                                <textarea placeholder="Add Comment...." rows="1" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent" aria-haspopup="true" aria-expanded="false"></textarea>

                                <div class="!top-2 pr-2 uk-drop" uk-drop="pos: bottom-right; mode: click">
                                    <div class="flex items-center gap-2" uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-sky-600" style="opacity: 0;">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-pink-600" style="opacity: 0;">
                                            <path d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery"> Replay</button>
                        </div>
                        <!--end of adding comments-->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    @include("includes.pages.feeds.right-side")
    <x-slot name="modal">
        @include("includes.modals.feeds.post-preview")
        @include("includes.modals.feeds.create-status")
        @include("includes.modals.feeds.create-story")
    </x-slot>
    <x-slot name="js">
        <script type="text/javascript" src="storage/build/js/pages/feeds.js"></script>
    </x-slot>
</x-app-layout>