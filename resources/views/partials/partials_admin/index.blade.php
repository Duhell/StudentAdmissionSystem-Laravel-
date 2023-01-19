<div class="admin_container margin-auto max-width-90">
    {{-- Search --}}
    <div class="search_container">
        <div>
            <span>List of Students Applied</span>
        </div>
        <div>
            <input type="search" placeholder="Search">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="50" height="50"
                viewBox="0 0 50 50">
                <path d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"></path>
            </svg>
        </div>
    </div>

    {{-- Total Number of Applicants --}}
    <div class="total_number_container">
        <div>
            <span>Total Number of Applicants this year: 2</span>
        </div>
        <div>
            <select name="" id="">
                <option value="">2022</option>
            </select>
        </div>

    </div>

    <section class="max-width-90">
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                <th class="w-10">No.</th>
                <th >Applicant ID</th>
                <th class="w-30">Student Name</th>
                <th>Requirements</th>
                <th class="w-10">Edit </th>
                <th class="w-10">Delete </th>
                </tr>
            </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                <td class="w-10">1</td>
                <td>user1002</td>
                <td class="w-30">Villarma Ryan</td>
                <td>Complete</td>
                <td class="w-10">Edit</td>
                <td class="w-10">Delete</td>
                </tr>
            </tbody>
            </table>
        </div>
    </section>
</div>

<script src="{{ asset('js/table.js') }}"></script>
