<div>
    <div>
        <form name="frmPersonalInfo" id="frmPersonalInfo" action="{{ route('profile.save_personal_info') }}" method="POST" autocomplete="off">
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
                                if($info->code == "first_name"){
                                    $value = $value == "" ? $firstName : $value;
                                }
                                if($info->code == "last_name"){
                                    $value = $value == "" ? $lastName : $value;
                                }
                                if($info->code == "email"){
                                    $value = $value == "" ? $emailAddress : $value;
                                }
                                
                            @endphp
                            @switch($info->input_code)
                                @case('disabled')
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