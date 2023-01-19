<div class="height-auto student_index max-width-90 margin-auto">

    <div class="setprofileuser">
        <span>Set up your Profile</span>
        <span>{{ $data->userid }}</span>
    </div>
    {{-- Personal Information --}}
    <form action="{{ route('submit') }}" method="POST">
        @csrf
        <div class="bg-red info_divider">
            <p>Personal Information</p>
        </div>
        <div class="form_grid">
            <input type="hidden" value="{{ $data->userid }}" name="userid">
            <div>
                <label>Last Name</label>
                <input type="text" placeholder="Last Name" required="required" name="lastname" value="{{ old('lastname') }}">
            </div>
            <div>
                <label>First Name</label>
                <input type="text" placeholder="First Name" required="required" name="firstname"  value="{{ old('firstname') }}">
            </div>
            <div>
                <label>Middle Name</label>
                <input type="text" placeholder="Middle Name" required="required" name="middlename"  value="{{ old('middlename') }}">
            </div>
            <div>
                <label>Suffix</label>
                <select name="suffix" id="">
                    <option value="N/A">...</option>
                    <option value="jr">Jr.</option>
                    <option value="sr">Sr.</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                </select>
            </div>
        </div>
        <div class="form_grid">
            <div>
                <label>Birth Date</label>
                <input type="date" name="birthdate">
            </div>
            <div>
                <label>Birth Place</label>
                <input type="text" placeholder="Place of Birth" required="required" name="birthplace"  value="{{ old('birthplace') }}">
            </div>
            <div>
                <label>Gender</label>
                <select name="gender" id="">
                    <option value="N/A">...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Others</option>
                </select>
            </div>
            <div>
                <label>Age</label>
                <input type="text" placeholder="Age" required="required" name="age"  value="{{ old('age') }}">
            </div>
            <div>
                <label>Citizenship</label>
                <select name="citizenship" id="">
                    <option value="N/A">...</option>
                    <option value="filipino">Filipino</option>
                    <option value="other">Others</option>
                </select>
            </div>
        </div>
        <div class="form_grid">
            <div>
                <label>Address</label>
                <input type="text" placeholder="Unit no./Street" name="unit"  value="{{ old('unit') }}">
            </div>
            <div>
                <label class="visibility">Barangay</label>
                <input type="text" placeholder="Barangay" required="required" name="barangay"  value="{{ old('barangay') }}">
            </div>
            <div>
                <label class="visibility">City</label>
                <input type="text" placeholder="City" required="required" name="city"  value="{{ old('city') }}">
            </div>
            <div>
                <label class="visibility">Province</label>
                <input type="text" placeholder="Province" required="required" name="province"  value="{{ old('province') }}">
            </div>
            <div>
                <label class="visibility">Zipcode</label>
                <input type="text" placeholder="Zipcode" required="required" name="zipcode"  value="{{ old('zipcode') }}">
            </div>
        </div>
        <div class="form_grid">
            <div>
                <label>Email Address</label>
                <input type="email" placeholder="example@gmail.com" name="email"  value="{{ old('email') }}">
            </div>
            <div>
                <label>Cellphone Number</label>
                <input type="text" placeholder="ex: 09xxxxxxxxx" required="required" name="cell"  value="{{ old('cell') }}">
            </div>
            <div>
                <label>Telephone Number</label>
                <input type="text" placeholder="123 456 7890" required="required" name="telenum"  value="{{ old('telenum') }}">
            </div>
        </div>
        {{-- for educational attainment --}}
        <div class="bg-red info_divider">
            <p>Educational Attainment</p>
        </div>
        <div class="form_grid_2">
            <div>
                <label>School Last Attended</label>
                <input type="text" placeholder="Last School" required="required" name="last_attended"  value="{{ old('last_attended') }}">
            </div>
            <div>
                <label>School Address</label>
                <input type="text" placeholder="Address of the last school" required="required" name="school_addr"  value="{{ old('school_addr') }}">
            </div>
        </div>
        <div class="form_grid_2">
            <div>
                <label>Track</label>
                <select name="track" id="">
                    <option value="stem">Science,Technological,Engineering, and Mathematics</option>
                    <option value="abm">Accountancy,Business, and Management</option>
                    <option value="humss">Humanities and Social Sciences</option>
                    <option value="ict">Information Communication and Technology</option>
                    <option value="gas">General Academic Strand</option>
                </select>
            </div>
            <div>
                <label>Year Graduated</label>
                <input type="text" placeholder="ex: S.Y. 2019-2020" required="required" name="year_grad"  value="{{ old('year_grad') }}">
            </div>
        </div>
        {{-- Preferred Courses --}}
        <div class="bg-red info_divider">
            <p>Educational Attainment</p>
        </div>
        <div class="form_grid_2">
            <div>
                <label>Campus</label>
                <select name="campus" id="">
                    <option value="TUPV">Technological University of the Philippines Visayas</option>
                </select>
            </div>
            <div>
                <label>Department</label>
                <select name="dept" id="dept" onchange="studentCourse(this.id,'course')">
                    <option value="N/A">Choose</option>
                    <option value="COE">College of Engineering</option>
                    <option value="COACE">College of Automation and Control Engeneering</option>
                    <option value="COET">College of Engineering Technology</option>
                </select>
            </div>
            <div>
                <label>First Choice</label>
                <select name="choice" id="course">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="w-100 btn">
            <input type="submit" value="Submit &#10148;">
        </div>
    </form>
</div>
<script src="{{ asset('js/courses.js') }}"></script>
