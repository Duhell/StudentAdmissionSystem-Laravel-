@extends('../main')
@section('title','Admin Login')
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
                <p>Admin Login</p>
                <div class="login_style">
                    <form class="min-width-60">
                        @csrf
                        <div class="application_ID">
                            <label>Admin ID</label>
                            <input type="text" placeholder="ID">
                        </div>
                        <div class="application_password">
                            <label>Password</label>
                            <input type="password" placeholder="Password">
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
