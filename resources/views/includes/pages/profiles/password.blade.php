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
                @php
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