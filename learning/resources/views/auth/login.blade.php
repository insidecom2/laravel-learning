@extends('theme.blank')
@section('title', 'Login Page')
@section('content')
    <div class='container'>
        <div class='row  justify-content-md-center'>
            <div class='col-md-4'>

                <form method='post' action='/auth/login'>
                    @csrf
                    <h2 class="text-center py-4">Login</h2>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email address</label>
                        <input type="email" id="email" name='email' required class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="password" name='password' required class="form-control" />
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                    checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>

                    </div>
                    <div class="row mb-4  justify-content-md-center">
                        <div class="col text-center">
                            <a href="/auth/register">Register</a>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                    </div>
                    <!-- Submit button -->

                </form>
                @if ($errors->any())
                    {{ implode('', $errors->all(':message')) }}
                @endif
            </div>
        </div>
    </div>

    <!-- Pills content -->
@endsection
