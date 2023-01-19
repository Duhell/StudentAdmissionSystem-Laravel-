@extends('../main')
@section('title','Student Login')
@section('content')

    {{-- The body  --}}

    <div class="home_background bg-red">
        <div class="min-width-60 SAS">
            <div>
                <span>Student</span><br>
                <span>Admission</span><br>
                <span>System</span>
                <br>
                <small>Technological University of the Philippines Visayas</small>
            </div>
        </div>
        <div class="min-width-40 bg-light ">
            <div class="credentials_login">
                <div class="logo">
                    <img src="{{ asset('images/Logo.png') }}" alt="TUPV Logo">
                </div>
                <p>Student Login</p>
                <div class="login_style">
                    <form class="min-width-60" action="{{ route('student') }}" method="POST">
                        @csrf
                        @if(Session::has('msg'))
                            <div class="errorMsg">{{ Session::get('msg') }}</div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="errorMsg">{{ Session::get('fail') }}</div>
                        @endif
                        <div class="application_ID">
                            <label>Applicant ID</label>
                            <input type="text" placeholder="Applicant ID" name="applicant_id" value="{{ old('applicant_id') }}">
                            <span class="errorInput">@error('applicant_id'){{ $message }}@enderror</span>
                        </div>
                        <div class="application_password">
                            <label>Password</label>
                            <input type="password" placeholder="Password" name="password">
                            <span class="errorInput">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <div class="btn_login min-width-60">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- end of the body --}}
@endsection
