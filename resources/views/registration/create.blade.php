@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Register</h1>
        <form method="POST" action="/register">

            {{ csrf_field() }}
            <div class="col-sm-8 blog-main">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>



                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" required>
                </div>



                <div class="form-group">
                    <label for="password">Password Confirmation:</label>
                    <input type="text" name="password" class="form-control" id="password" required>
                </div>



                <div class="form-group">
                    <label for="password_confirmation">Password:</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>


                @include('layouts.errors')

            </div>



        </form>
    </div>

@endsection