@include('partials.header' )

<x-nav/>
<x-message/>


{{-- @foreach ($supervisors as $supervisor)
    <p>Supervisor Number {{$supervisor -> id}} : {{$supervisor -> first_name}} {{$supervisor -> last_name}}</p>


    @foreach ($employees as $employee)
    @if ($employee -> supervisor_id == $supervisor -> id)

    <p>--Employee id : {{$employee -> id}} > Name : {{$employee -> first_name}} {{$employee -> last_name}}</p>

    @else
    @endif  
    @endforeach

@endforeach --}}
<div class="row">
    <div class="col-11 mx-5  bg-white">
        <table class="table table-striped">
            <tr class="bg-success">
                <th class="text-white">First Name</th>
                <th class="text-white">Last Name</th>
                <th class="text-white">Birth Date</th>
                <th class="text-white">Supervisor ID</th>
                <th class="text-white">Action</th>

        
        
            </tr>
        
        
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee -> first_name }}</td>
                    <td>{{ $employee -> last_name }}</td>
                    <td>{{ $employee -> birthdate }}</td>
                    <td>{{ $employee -> supervisor_id }}</td>
                    <td>
                        <a href="/employee/{{ $employee->id }}" class="bg-success text-decoration-none text-white p-1 rounded-2">View</a>
                    </td>

        
        
                </tr>
        @endforeach
        </table>
        <div class="row d-flex">
            <div class="col-xl-3 offset-xl-9 col-7 offset-5">
                {{$employees -> links()}}
            </div>

        </div>
       
    </div>
    
</div>

@include('partials.footer')
