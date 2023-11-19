@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form>
                    <div class="form-floating mb-2">
                        <label for="floatingInput">Email address</label>
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    </div>
                    <div class="form-floating mb-2">
                        <label for="floatingPassword">Password</label>
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    </div>

                    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection
