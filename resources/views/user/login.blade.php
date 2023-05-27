@include('partials.header', ['title' => 'Login'])

<x-header />

<section class="row bg-white mx-5 rounded-2 py-2 col-10 col-xl-4">
    <h3 class="fw-bold">Welcome to Student System</h3>
    <p class="text-secondary">Sign in your account</p>

    <form action="/login/process" method="post">
      @csrf
      @error('email')
      <span class="text-danger">
        {{ $message }}
      </span>
      <br>
      @enderror
      <label for="email">Email Address</label>
      <input id="email" class="form-control my-2" type="text" name="email" value={{old('email')}}>
      <label for="password">Password</label>
      <input id="password" class="form-control my-2" type="text" name="password">
      <input class="btn btn-primary w-100 text-white fw-bold" type="submit" value="Login">
    </form>

  </section>


@include('partials.footer')
