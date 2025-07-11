<!-- add story -->
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
            <!--end add story-->
            <!--  post image-->
            <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">
                <!-- post heading -->
                <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                    <a href="timeline.html"> 
                        <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-9 h-9 rounded-full"> 
                    </a>  
                    <div class="flex-1">
                        <a href="timeline.html"> 
                            <h4 class="text-black dark:text-white"> Monroe Parker </h4> 
                        </a>  
                        <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago</div>
                    </div>

                    <div class="-mr-1">
                        <button type="button" class="button-icon w-8 h-8"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                            <nav> 
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon> Mute Notification </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="flag-outline"></ion-icon>  Report this post </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="share-outline"></ion-icon>  Share your profile </a>  
                                <hr>
                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>  Unfollow </a>  
                            </nav>
                        </div>
                    </div>
                </div><!-- end post heading -->
                <!-- post image -->
                <a href="#preview_modal" uk-toggle>
                    <div class="relative w-full lg:h-96 h-full sm:px-4">
                        <img src="storage/images/feeds/Adventure-hiking-among-clouds.jpg" alt="" class="sm:rounded-lg w-full h-full object-cover">
                    </div>
                </a><!-- end post image -->
                <!-- post icons -->
                <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                    <div>
                        <div class="flex items-center gap-2.5">
                            <button type="button" class="button-icon text-red-500 bg-red-100 dark:bg-slate-700"> <ion-icon class="text-lg" name="heart"></ion-icon> </button>
                            <a href="#">1,300</a>
                        </div>
                        <div    class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                                uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left"> 
                            
                            <div class="flex gap-2"  uk-scrollspy="target: > button; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 👍 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> ❤️ </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😂 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😯 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😢 </span></button>
                            </div>
                            
                            <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                        <span>260</span>
                    </div>
                    <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl" name="paper-plane-outline"></ion-icon> </button>
                    <button type="button" class="button-icon"> <ion-icon class="text-xl" name="share-outline"></ion-icon> </button>
                </div> <!--end post icons-->
                <!-- comments -->
                <div class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40"> 
            
                    <div class="flex items-start gap-3 relative">
                        <a href="timeline.html"> <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Steeve </a>
                            <p class="mt-0.5">What a beautiful photo! I love it. 😍 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <a href="timeline.html"> <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                            <p class="mt-0.5">   You captured the moment.😎 </p>
                        </div>
                    </div>

                    <button type="button" class="flex items-center gap-1.5 text-gray-500 hover:text-blue-500 mt-2">
                        <ion-icon name="chevron-down-outline" class="ml-auto duration-200 group-aria-expanded:rotate-180"></ion-icon>
                        More Comment
                    </button>
                </div> <!--end of comments-->
                <!-- add comment -->
                <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
                    
                    <img src="assets/images/avatars/avatar-7.jpg" alt="" class="w-6 h-6 rounded-full">
                    
                    <div class="flex-1 relative overflow-hidden h-10">
                        <textarea placeholder="Add Comment...." rows="1" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"></textarea>

                        <div class="!top-2 pr-2" uk-drop="pos: bottom-right; mode: click">
                            <div class="flex items-center gap-2" uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-sky-600">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-pink-600">
                                    <path d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z" />
                                </svg>
                            </div>
                        </div>
                        

                    </div>
                    

                    <button type="submit" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery"> Replay</button>
                </div><!--end of add comment-->
            </div><!-- end post image -->
            
            <!--  post image with slider-->
            <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">
                <!-- post heading -->
                <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                    <a href="timeline.html"> <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-9 h-9 rounded-full"> </a>  
                    <div class="flex-1">
                        <a href="timeline.html"> <h4 class="text-black dark:text-white"> Monroe Parker </h4> </a>  
                        <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago</div>
                    </div>

                    <div class="-mr-1">
                        <button type="button" class="button-icon w-8 h-8"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                            <nav> 
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon> Mute Notification </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="flag-outline"></ion-icon>  Report this post </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="share-outline"></ion-icon>  Share your profile </a>  
                                <hr>
                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>  Unfollow </a>  
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- post image -->
                <div class="relative uk-visible-toggle sm:px-4" tabindex="-1" uk-slideshow="animation: push;ratio: 4:3">

                    <ul class="uk-slideshow-items overflow-hidden rounded-xl" uk-lightbox="animation: fade"> 
                        <li class="w-full">
                            <a class="inline" href="https://getuikit.com/docs/images/photo3.jpg" data-caption="Caption 1"> 
                                <img src="assets/images/post/img-2.jpg" alt="" class="w-full h-full absolute object-cover insta-0">
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="inline" href="https://getuikit.com/docs/images/photo2.jpg" data-caption="Caption 2"> 
                                <img src="assets/images/post/img-3.jpg" alt="" class="w-full h-full absolute object-cover insta-0">
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="inline" href="https://getuikit.com/docs/images/photo.jpg" data-caption="Caption 3"> 
                                <img src="assets/images/post/img-4.jpg" alt="" class="w-full h-full absolute object-cover insta-0">
                            </a>
                        </li> 
                    </ul>
                    
                    <a class="nav-prev left-6" href="#" uk-slideshow-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                    <a class="nav-next right-6" href="#" uk-slideshow-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                
                </div><!-- end post image-->
                <!-- post icons -->
                <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                    <div>
                        <div class="flex items-center gap-2.5">
                            <button type="button" class="button-icon text-red-500 bg-red-100 dark:bg-slate-700"> <ion-icon class="text-lg" name="heart"></ion-icon> </button>
                            <a href="#">1,300</a>
                        </div>
                        <div    class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                                uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left"> 
                            
                            <div class="flex gap-2"  uk-scrollspy="target: > button; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 👍 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> ❤️ </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😂 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😯 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😢 </span></button>
                            </div>
                            
                            <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                        <span>260</span>
                    </div>
                    <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl" name="paper-plane-outline"></ion-icon> </button>
                    <button type="button" class="button-icon"> <ion-icon class="text-xl" name="share-outline"></ion-icon> </button>
                </div><!--end post icons-->
                <!-- comments -->
                <div class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40">
                    <div class="flex items-start gap-3 relative">
                        <a href="timeline.html"> <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Steeve </a>
                            <p class="mt-0.5">What a beautiful photo! I love it. 😍 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <a href="timeline.html"> <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                            <p class="mt-0.5">   You captured the moment.😎 </p>
                        </div>
                    </div>

                    <button type="button" class="flex items-center gap-1.5 text-gray-500 hover:text-blue-500 mt-2">
                        <ion-icon name="chevron-down-outline" class="ml-auto duration-200 group-aria-expanded:rotate-180"></ion-icon>
                        More Comment
                    </button>
                </div><!-- end of comments-->
                <!-- add comment -->
                <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
                    <img src="assets/images/avatars/avatar-7.jpg" alt="" class="w-6 h-6 rounded-full">
                    
                    <div class="flex-1 relative overflow-hidden h-10">
                        <textarea placeholder="Add Comment...." rows="1" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"></textarea>

                        <div class="!top-2 pr-2" uk-drop="pos: bottom-right; mode: click">
                            <div class="flex items-center gap-2" uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-sky-600">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-pink-600">
                                    <path d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z" />
                                </svg>
                            </div>
                        </div>
                        

                    </div>
                    

                    <button type="submit" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery"> Replay</button>
                </div><!--end of add comments-->
            </div><!-- end post image with slider-->

            <!-- post text-->
            <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">
                <!-- post heading -->
                <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                    <a href="timeline.html"> <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-9 h-9 rounded-full"> </a> 
                    <div class="flex-1">
                        <a href="timeline.html"> <h4 class="text-black dark:text-white"> John Michael </h4> </a> 
                        <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago</div>
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
                </div><!-- end of post heading-->

                <div class="sm:px-4 p-2.5 pt-0">
                    <p class="font-normal"> Photography is the art of capturing light with a camera. It can be used to create images that tell stories, express emotions, or document reality. it can be fun, challenging, or rewarding. It can also be a hobby, a profession, or a passion. 📷 </p>
                </div>

                <!-- post icons -->
                <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                    <div>
                        <div class="flex items-center gap-2.5">
                            <button type="button" class="button-icon text-red-500 bg-red-100 dark:bg-slate-700"> <ion-icon class="text-lg" name="heart"></ion-icon> </button>
                            <a href="#">1,300</a>
                        </div>
                        <div    class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                                uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left"> 
                            
                            <div class="flex gap-2"  uk-scrollspy="target: > button; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 👍 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> ❤️ </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😂 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😯 </span></button>
                                <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😢 </span></button>
                            </div>
                            
                            <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                        <span>260</span>
                    </div>
                    <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl" name="paper-plane-outline"></ion-icon> </button>
                    <button type="button" class="button-icon"> <ion-icon class="text-xl" name="share-outline"></ion-icon> </button>
                </div> <!--end of post icons-->

                <!-- comments -->
                <div class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40"> 
            
                    <div class="flex items-start gap-3 relative">
                        <a href="timeline.html"> <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Steeve </a>
                            <p class="mt-0.5"> I love taking photos of nature and animals. 🌳🐶</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <a href="timeline.html"> <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                            <p class="mt-0.5">  I enjoy people and emotions. 😊😢 </p>
                        </div>
                    </div> 
                    <div class="flex items-start gap-3 relative">
                        <a href="timeline.html"> <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                        <div class="flex-1">
                            <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Jesse </a>
                            <p class="mt-0.5">  Photography is my passion. 🎨📸   </p>
                        </div>
                    </div>
                </div> <!--end of comments-->

                <!-- add comment -->
                <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
                    
                    <img src="assets/images/avatars/avatar-7.jpg" alt="" class="w-6 h-6 rounded-full">
                    
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
                </div> <!--end of add comment-->
            </div> <!--end of post text-->
            <!-- placeholder -->
            <div class="rounded-xl shadow-sm p-4 space-y-4 bg-slate-200/40 animate-pulse border1 dark:bg-dark2">

                <div class="flex gap-3">
                    <div class="w-9 h-9 rounded-full bg-slate-300/20"></div>
                    <div class="flex-1 space-y-3">
                        <div class="w-40 h-5 rounded-md bg-slate-300/20"></div>
                        <div class="w-24 h-4 rounded-md bg-slate-300/20"></div>
                    </div>
                    <div class="w-6 h-6 rounded-full bg-slate-300/20"></div>
                </div>

                <div class="w-full h-52 rounded-lg bg-slate-300/10 my-3"> </div>

                <div class="flex gap-3">

                    <div class="w-16 h-5 rounded-md bg-slate-300/20"></div>

                    <div class="w-14 h-5 rounded-md bg-slate-300/20"></div>

                    <div class="w-6 h-6 rounded-full bg-slate-300/20 ml-auto"></div>
                    <div class="w-6 h-6 rounded-full bg-slate-300/20  "></div>
                </div>
            </div><!-- end of placeholder-->