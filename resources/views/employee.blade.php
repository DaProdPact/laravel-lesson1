<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <style>
        table,tr,th,td{
            border:black solid 1px;
        }
    </style>
</head>
<body>
    {{-- @foreach ($students as $student)
    <p>{{ $student->gender }} {{ $student->gender_count}}</p>
    @endforeach --}}


     <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Age</th>


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
</body>
</html>

