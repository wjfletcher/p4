@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
    <p>Already have an account? <a href='/login'>Login here...</a></p>

    <h1>Register</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/register'>
        {!! csrf_field() !!}

        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Name</span>
            <input type='text' class="form-control" name='name' id='name' value='{{ old('name') }}' required>
        </div>
        <br>

        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Email</span>
            <input type='email' class="form-control" name='email' id='email' value='{{ old('email') }}' required>
        </div>
        <br>

        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Password</span>
            <input type='password' class="form-control" name='password' id='password' required>
        </div>
        <br>

        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Confirm Password</span>
            <input type='password' class="form-control" name='password_confirmation' id='password_confirmation' required>
        </div>
        <br>

        <button type='submit' class='btn btn-primary'>Register</button>

    </form>
        </div>
</div>
@stop