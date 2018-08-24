@extends('layouts.master')

@section('content')
<div class="login">
    <div class="login-bg color-top"><span class="unselectable">/////////////&lt;div&gt;///////////////////////////////////////////////////////////</span></div>
    <form class="centered" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-Mail</label>

            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <input type="hidden" name="remember" value='on'>
        <input type="submit" class="invisible-desktop" value="Login">
    </form>
    <div class="login-bg color-bottom"><span class="unselectable">//.com////////////////////////////////////</span></div>
</div>
@endsection
