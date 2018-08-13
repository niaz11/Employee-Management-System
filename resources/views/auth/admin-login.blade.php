@extends('main')

@section('title',' | Admin Login')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Admin Login</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            {!! Form::open(['route' => ['admin.login.submit'], 'method' => 'POST']) !!}
        
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) }}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    
                    @endif
                </div> 

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>  

                <div class="form-group">
                    
                    {{ Form::checkbox('remember') }} {{ Form::label('remember', 'Remember Me') }}

                </div>

                <div class="form-group">
                    
                    {{ Form::submit('Login', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>

                </div>   
                

            {!! Form::close() !!}
        </div>
    </div>
@endsection
