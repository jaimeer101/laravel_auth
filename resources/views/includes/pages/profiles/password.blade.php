@php
    $activePage = "";
@endphp
@if(session('active_page'))
    @if(session('active_page') == "password")
        @php
            $activePage = "uk-active";
        @endphp
    @endif
@endif
<div>
    <div {{ $activePage }}>
        <form name="frmPassword" id="frmPassword" action="{{ route('profile.save_password') }}" method="POST" autocomplete="off">
            @csrf
            <div class="space-y-6 max-w-lg mx-auto">
                @if ($errors->any)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->password as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('type'))
                    @switch(session('type'))
                        @case('danger')
                            @php
                                $alertColor = "red";
                            @endphp
                            @break
                        @default
                            @php
                                $alertColor = "green";
                            @endphp
                    @endswitch
                    <div uk-alert>
                        <div class="p-2 border bg-{{ $alertColor }}-50 border-{{ $alertColor }}-500/30 rounded-xl dark:bg-slate-700">
                            <div class="inline- flex items-center justify-between gap-6">
                                <!-- icon -->
                                <div class="p-1 text-white bg-{{ $alertColor }}-500 shadow rounded-xl shadow-{{ $alertColor }}-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                    </svg>
                                </div>
            
                                <!-- text -->
                                <div class="text-base font-semibold text-{{ $alertColor }}-700"> {{ session('message') }} </div>
            
                                <!-- icon close -->
                                <button type="button" class="flex p-1 text-gray-600 rounded-lg hover:bg-black/5 ml-auto uk-alert-close">
                                    <ion-icon name="close" class="text-xl"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
                @php
                    //dd($category);
                    $usersPasswordCondition = [];
                    $usersPassword = $category->users_attributes()->where('category_id', '=', '2')->get();
                @endphp
                @foreach ($usersPassword as $passWord)
                    @php
                        $inputName = $passWord->input_code."_".$passWord->code;
                    @endphp
                    @switch($passWord->input_type)
                        @case("password")
                            <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                                <label class="md:w-40 text-right"> {{ $passWord->name }} </label>
                                <div class="flex-1 max-md:mt-4">
                                    <input type="password" name = "{{ $inputName }}" id="{{ $inputName }}" placeholder="******" class="w-full">
                                </div>
                            </div>
                            @break
                        @default
                    @endswitch
                @endforeach
            </div>
            <div class="flex items-center justify-center gap-4 mt-16">
                <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save</button>
            </div>
        </form>
    </div>
</div>