@include('partials.header' )
<x-nav/>

<section class="row bg-white mx-5 rounded-2 py-2 col-10 col-xl-4 mt-5">
    <h3 class="fw-bold text-center">Edit {{ $employees -> first_name }}  {{ $employees -> last_name }} Information</h3>

    <form action="/employee/{{ $employees -> id }}" method="POST">
      @method('PUT')
      @csrf
      <label for="first_name">Firstname</label>
      <input id="first_name" class="form-control my-2" type="text" name="first_name" value={{ $employees->first_name }}>
      <label for="last_name">Lastname</label>
      <input id="last_name" class="form-control my-2" type="text" name="last_name" value={{ $employees->last_name }}>
      <label for="birthdate">Birthdate</label>
      <input id="birthdate" class="form-control my-2" type="date" name="birthdate" value={{ $employees->birthdate }}>
      <label for="supervisor_id">Supervisor ID</label>
      <input id="supervisor_id" class="form-control my-2" type="text" name="supervisor_id" value={{ $employees->supervisor_id }}>
      <input class="btn btn-primary w-100 text-white fw-bold" type="submit" value="Update Information">
    </form>
    <form action="/employee/{{ $employees -> id }}" method="POST">
      @method('delete')
      @csrf
      <input class="btn btn-danger w-100 text-white fw-bold my-2" type="submit" value="Delete">
    </form>


  </section>
@include('partials.footer')
