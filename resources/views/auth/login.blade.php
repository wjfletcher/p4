@extends('layouts.master') @section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <p>Don't have an account? <a href='/register'>Register here...</a></p>

        <h1>Login</h1> @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method='POST' action='/login'>

            {!! csrf_field() !!}

            <div class='input-group'>
                <span class="input-group-addon" id="basic-addon1">Email</span>
                <input type='email' class="form-control" name='email' id='email' value='{{ old(' email ') }}'>
            </div>
            <br>
            <div class='input-group'>
                <span class="input-group-addon" id="basic-addon1">Password</span>
                <input type='password' class="form-control" name='password' id='password' value='{{ old(' password ') }}'>
            </div>
            <br>


            <button type='submit' class='btn btn-primary'>Login</button>

        </form>
    </div>
</div>
@stop