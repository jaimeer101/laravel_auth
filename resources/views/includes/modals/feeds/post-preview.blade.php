<!-- post preview modal --> 
<div class="hidden lg:p-20 max-lg:!items-start" id="preview_modal" uk-modal="">
    
    <div class="uk-modal-dialog tt relative mx-auto overflow-hidden shadow-xl rounded-lg lg:flex items-center ax-w-[86rem] w-full lg:h-[80vh]">
        
        <!-- image previewer -->
        <div class="lg:h-full lg:w-[calc(100vw-400px)] w-full h-96 flex justify-center items-center relative">
            
            <div class="relative z-10 w-full h-full">
                <img src="assets/images/post/post-1.jpg" alt="" class="w-full h-full object-cover absolute">
            </div>

            <!-- close button -->
            <button type="button"  class="bg-white rounded-full p-2 absolute right-0 top-0 m-3 uk-animation-slide-right-medium z-10 dark:bg-slate-600 uk-modal-close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>

        <!-- right sidebar -->
        <div class="lg:w-[400px] w-full bg-white h-full relative  overflow-y-auto shadow-xl dark:bg-dark2 flex flex-col justify-between">
            
            <div class="p-5 pb-0">

                <!-- story heading -->
                <div class="flex gap-3 text-sm font-medium">
                    <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-9 h-9 rounded-full">
                    <div class="flex-1">
                        <h4 class="text-black font-medium dark:text-white"> Steeve </h4>
                        <div class="text-gray-500 text-xs dark:text-white/80"> 2 hours ago</div>
                    </div>

                    <!-- dropdown -->
                    <div class="-m-1">
                        <button type="button" class="button__ico w-8 h-8"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                        <div  class="w-[253px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true"> 
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

                <p class="font-normal text-sm leading-6 mt-4"> Photography is the art of capturing light with a camera.  it can be fun, challenging. It can also be a hobby, a passion. 📷 </p>

                <div class="shadow relative -mx-5 px-5 py-3 mt-3">
                    <div class="flex items-center gap-4 text-xs font-semibold">
                        <div class="flex items-center gap-2.5">
                            <button type="button" class="button__ico text-red-500 bg-red-100 dark:bg-slate-700"> <ion-icon class="text-lg" name="heart"></ion-icon> </button>
                            <a href="#">1,300</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <button type="button" class="button__ico bg-slate-100 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                            <span>260</span>
                        </div>
                        <button type="button" class="button__ico ml-auto"> <ion-icon class="text-xl" name="share-outline"></ion-icon> </button>
                        <button type="button" class="button__ico"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon> </button>
                    </div>
                </div>

            </div>

            <div class="p-5 h-full overflow-y-auto flex-1">

                <!-- comment list -->
                <div class="relative text-sm font-medium space-y-5"> 
            
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Steeve </a>
                            <p class="mt-0.5">What a beautiful, I love it. 😍 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                            <p class="mt-0.5">   You captured the moment.😎 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-7.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Alexa </a>
                            <p class="mt-0.5"> This photo is amazing!   </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> John  </a>
                            <p class="mt-0.5"> Wow, You are so talented 😍 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Michael </a>
                            <p class="mt-0.5"> I love taking photos   🌳🐶</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                            <p class="mt-0.5">  Awesome. 😊😢 </p>
                        </div>
                    </div> 
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Jesse </a>
                            <p class="mt-0.5"> Well done 🎨📸   </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Steeve </a>
                            <p class="mt-0.5">What a beautiful, I love it. 😍 </p>
                        </div>
                    </div> 
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-7.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Alexa </a>
                            <p class="mt-0.5"> This photo is amazing!   </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> John  </a>
                            <p class="mt-0.5"> Wow, You are so talented 😍 </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Michael </a>
                            <p class="mt-0.5"> I love taking photos   🌳🐶</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 relative">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-6 h-6 mt-1 rounded-full">
                        <div class="flex-1">
                            <a href="#" class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                            <p class="mt-0.5">  Awesome. 😊😢 </p>
                        </div>
                    </div>  
                        
                </div>

            </div>

            <div class="bg-white p-3 text-sm font-medium flex items-center gap-2">
                            
                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full">
                
                <div class="flex-1 relative overflow-hidden ">
                    <textarea placeholder="Add Comment...." rows="1" class="w-full resize-  px-4 py-2 focus:!border-transparent focus:!ring-transparent resize-y"></textarea>

                    <div class="flex items-center gap-2 absolute bottom-0.5 right-0 m-3">
                        <ion-icon class="text-xl flex text-blue-700" name="image"></ion-icon> 
                        <ion-icon class="text-xl flex text-yellow-500" name="happy"></ion-icon> 
                    </div>

                </div>

                <button type="submit" class="hidden text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Replay</button>
            
            </div>

        </div>

    </div>
    
</div>