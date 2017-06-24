@extends('layouts.master')

@section('content')

    <div class="col-md-8">
        <h1>Sign In</h1>

        <form action="/login" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" id="email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control" id="password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection