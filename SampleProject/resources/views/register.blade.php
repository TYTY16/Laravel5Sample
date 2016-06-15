

@extends('layouts.master')

@section('title', 'Register')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <h3>Register Here</h3>
    <form action="register" method="post">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="">
        <label for="last_name">Last Name </label>
        <input type="text" name="last_name" value="">
        <label for="first_name">User Name</label>
        <input type="text" name="user_name" value="">
        <label for="email">email</label>
        <input type="text" name="email" value="">
        <input type="submit" value="Submit">
    </form>
@endsection