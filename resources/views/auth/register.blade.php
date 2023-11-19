@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form>
                    <div class="form-floating mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                    </div>
                    <div class="form-floating mb-2">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-floating mb-2">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="name@example.com">
                    </div>
                    <div class="form-floating mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control rounded-bottom" id="password"
                            placeholder="Password">
                    </div>

                    <button class="btn btn-primary w-100 mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection
