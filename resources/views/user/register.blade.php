@include('partials.header', ['title' => 'Register'])

<x-header />

<section class="row bg-white mx-5 rounded-2 py-2 col-10 col-xl-4">
    <h3 class="fw-bold">Welcome to Student System</h3>
    <p class="text-secondary">Sign Up to create an account</p>

    <form action="/store" method="post">
      @csrf

      <label class="fw-bold" for="name">Name</label>
      <input id="name" class="form-control my-2" type="text" name="name" value={{ old('name') }}>
      @error('name')
          <span class="text-danger">
            {{ $message }}
          </span>
          <br>
      @enderror

      <label class="fw-bold" for="email">Email Address</label>
      <input id="email" class="form-control my-2" type="email" name="email" value={{ old('email') }}>
      @error('email')
      <span class="text-danger">
        {{ $message }}
      </span>
      <br>
  @enderror

      <label class="fw-bold" for="password">Password</label>
      <input id="password" class="form-control my-2" type="text" name="password">
      @error('password')
      <span class="text-danger">
        {{ $message }}
      </span>
      <br>
  @enderror

      <label class="fw-bold" for="password_confirmation">Password_confirmation</label>
      <input id="password_confirmation" class="form-control my-2" type="text" name="password_confirmation">
      @error('password_confirmation')
      <span class="text-danger">
        {{ $message }}
      </span>
      <br>
  @enderror

      <input class="btn btn-primary w-100 text-white fw-bold" type="submit" value="Sign Up">
    </form>

  </section>


@include('partials.footer')
