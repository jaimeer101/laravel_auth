<div>
    <div>
        <form name="frmPersonalInfo" id="frmPersonalInfo" action="{{ route('profile.save_personal_info') }}" method="POST" autocomplete="off">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
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
            
            <div class="space-y-6">
                @csrf
                @php
                    list($firstName, $lastName) = explode(" ", $user->name);
                    $emailAddress = $user->email;
                    $usersProfileCondition = [['category_id', '=', '1'], ['id', '!=', '7']];
                    $usersPersonalInfo = $category->users_attributes()->where($usersProfileCondition)->get();
                @endphp
                @foreach ($usersPersonalInfo as $info)
                    <div class="md:flex items-center gap-10">
                        <label class="md:w-32 text-right"> {{ $info->name }} </label>
                        <div class="flex-1 max-md:mt-4">
                            @php
                                $inputName = $info->input_code."_".$info->code;
                                $valueCondition = [['users_id', '=', $user->id], ['users_attributes_id', '=', $info->id]];
                                $valueDetails = $info->users_details()->where($valueCondition);
                                //echo $valueDetails->toRawSQL();
                                $value = $valueDetails->count() > 0 ? $valueDetails->first()->value : "";
                                switch($info->code){
                                    case "first_name":
                                        $value = $value == "" ? $firstName : $value;
                                    break;

                                    case "last_name":
                                        $value = $value == "" ? $lastName : $value;
                                    break;

                                    case "email":
                                            $value = $value == "" ? $emailAddress : $value;
                                    break;

                                    case "age":
                                        $value = $age;
                                    break;
                                }
                                
                                if(old($inputName)){
                                    $value = old($inputName);
                                }
                            @endphp
                            @switch($info->input_code)
                                @case('file_image')
                                    @break
                                @case('disabled')
                                    <input 
                                        type="text" 
                                        name="{{ $inputName }}" 
                                        id="{{ $inputName }}" 
                                        value="{{ $value }}" 
                                        class="w-full border-green-200" 
                                        placeholder="{{ $info->name }}" disabled>
                                    @break
                                @default
                                    <input 
                                        type="{{ $info->input_type }}" 
                                        name="{{ $inputName }}" 
                                        id="{{ $inputName }}" 
                                        value="{{ $value }}" 
                                        class="w-full border-green-200" 
                                        placeholder="{{ $info->name }}">
                            @endswitch
                            @error($inputName, 'personal_info')
                                <span class="mt-2 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                @endforeach
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Save
                </button>
            </div>
        </form>
        
    </div>
</div>
