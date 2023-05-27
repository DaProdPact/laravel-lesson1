@include('partials.header' )
<x-nav/>

<section class="row bg-white mx-5 rounded-2 py-2 col-10 col-xl-4 mt-5">
    <h3 class="fw-bold text-center">Add New Employee</h3>

    <form action="/add/employee" method="post">
      @csrf
      <label for="first_name">Firstname</label>
      <input id="first_name" class="form-control my-2" type="text" name="first_name">
      <label for="last_name">Lastname</label>
      <input id="last_name" class="form-control my-2" type="text" name="last_name">
      <label for="birthdate">Birthdate</label>
      <input id="birthdate" class="form-control my-2" type="date" name="birthdate">
      <label for="supervisor_id">Supervisor ID</label>
      <input id="supervisor_id" class="form-control my-2" type="text" name="supervisor_id ">
      <input class="btn btn-primary w-100 text-white fw-bold" type="submit" value="Create Employee">
    </form>

  </section>
@include('partials.footer')
