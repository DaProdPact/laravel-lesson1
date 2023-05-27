
    {{-- @foreach ($students as $student)
    <p>{{ $student->gender }} {{ $student->gender_count}}</p>
    @endforeach --}}

@include('partials.header', ['title' => 'Employee System'])


<table class="table table-striped">
    <tr class="bg-success">
        <th class="text-white">First Name</th>
        <th class="text-white">Last Name</th>
        <th class="text-white">Gender</th>
        <th class="text-white">Age</th>


    </tr>


        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee -> first_name }}</td>
            <td>{{ $employee -> last_name }}</td>
            <td>{{ $employee -> gender }}</td>
            <td>{{ $employee -> age }}</td>


        </tr>
@endforeach
</table>





    {{-- <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Age</th>


        </tr>
  

           
            <tr>
                <td>{{ $students -> first_name }}</td>
                <td>{{ $students -> last_name }}</td>
                <td>{{ $students -> gender }}</td>
                <td>{{ $students -> age }}</td>


            </tr>
       
       
    </table> --}}
@include('partials.footer')
