@extends('main')

@section('title',' | Registration')

@section('stylesheets')
    {!! Html::style('css/jquery-ui.min.css') !!}
    {!! Html::style('css/datepicker.css') !!}
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 text-center well">
            <h1>Registration</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-2 form">
            
            {!! Form::open(['route' => ['register'], 'method' => 'POST', 'files'=>true, 'class' => 'margin']) !!}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    
                    <h2>Personal Information</small></h2>
                    <hr class="colorgraph">
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', old('name'), ['class' => 'form-control well well-sm']) }}

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                            
                            {{ Form::label('birthdate', 'Birthdate:') }}
                            {{ Form::text('birthdate', old('birthdate'), ['class' => 'form-control well well-sm', 'id'=>"dp_1", 'placeholder' => "dd/mm/yy"]) }}

                            @if ($errors->has('birthdate'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birthdate') }}</strong>
                                </span>
                            @endif

                        </div> 
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            {{ Form::label('gender', 'Gender:') }}<br>
                            {{ Form::radio('gender', 'male',[], ['style' => 'margin-left:50px;', 'class' => 'well well-sm']) }}Male
                            {{ Form::radio('gender', 'female', true, ['style' => 'margin-left:20px;']) }} Female     
                             
                            @if ($errors->has('gender'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                            
                            @endif                   
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            
                            {{ Form::label('image', 'Upload Your Image:') }}
                            {{ Form::file('image', old('image'), ['class' => 'form-control well well-sm']) }}

                            @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            
                            @endif
                        </div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            
                            {{ Form::label('phone', 'Contact No.:') }}
                            {{ Form::text('phone', old('phone'), ['class' => 'form-control well well-sm']) }}

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            
                            @endif
                        </div> 
                    </div>
                </div>

                <div class="form-group{{ $errors->has('national_id') ? ' has-error' : '' }}">
                    
                    {{ Form::label('national_id', 'National ID:') }}
                    {{ Form::text('national_id', old('national_id'), ['class' => 'form-control well well-sm']) }}

                    @if ($errors->has('national_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('national_id') }}</strong>
                        </span>
                    
                    @endif
                </div> 

                <div class="form-group{{ $errors->has('current_address') ? ' has-error' : '' }}">
                    
                    <h2>Address</h2>
                    <hr class="colorgraph">
                    {{ Form::label('current_address', 'Current Address:') }}
                    {{ Form::text('current_address', old('current_address'), ['class' => 'form-control well well-sm']) }}

                    @if ($errors->has('current_address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('current_address') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">

                            {{ Form::label('city', 'City:') }}
                            {{ Form::text('city', old('city'), ['class' => 'form-control well well-sm']) }}

                            @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">

                            {{ Form::label('country', 'Country:') }}
                            {{ Form::select('country', [
                               'Bangladesh' => 'Bangladesh',
                               'India' => 'India',
                               'Pakistan' => 'Pakistan']
                           ,[], ['class' => 'form-control well well-sm'] ) }}

                            @if ($errors->has('country'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                </div>
                
                <h2>Educational Qualification</h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }}">                    
                            {{ Form::label('degree', 'Level of Education:') }}
                            {{ Form::select('degree', [
                               'BSc' => 'BSc',
                               'MSc' => 'MSc',
                               'PHd' => 'PHd']
                           ,[], ['class' => 'form-control well well-sm'] ) }}

                            @if ($errors->has('degree'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('degree') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">

                            {{ Form::label('subject', 'Concentration:') }}
                            {{ Form::text('subject', old('subject'), ['class' => 'form-control']) }}

                            @if ($errors->has('subject'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('institution') ? ' has-error' : '' }}">

                    {{ Form::label('institution', 'Institution:') }}
                    {{ Form::text('institution', old('institution'), ['class' => 'form-control']) }}

                    @if ($errors->has('institution'))
                        <span class="help-block">
                            <strong>{{ $errors->first('institution') }}</strong>
                        </span>
                    @endif

                </div>

                <h2>Login Info</h2>
                <hr class="colorgraph">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', old('email'), ['class' => 'form-control well well-sm']) }}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    
                    @endif
                </div> 
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            {{ Form::label('password', 'Password:') }}
                            {{ Form::password('password', ['class' => 'form-control well well-sm']) }}

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">

                            {{ Form::label('password_confirmation', 'Confirm Password:') }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control well well-sm']) }}

                        </div>
                    </div>
                </div>
                
                <h2>Job Status</h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            
                            {{ Form::label('department_id', 'Department Name:') }}
                            {{ Form::select('department_id', $departments, [], ['class' => 'form-control well well-sm']) }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {{ Form::label('designation_id', 'Designation:') }}
                            {{ Form::select('designation_id', $designations, [], ['class' => 'form-control well well-sm']) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">

                    {{ Form::label('join_date', 'Joining Date:') }}
                    {{ Form::text('join_date',old('join_date'), ['class' => 'form-control', 'placeholder' => "dd/mm/yy", 'disabled' => 'disabled']) }}
                </div>
                <div class="form-group">
                    
                    {{ Form::submit('Register', ['class' => 'btn btn-primary btn-lg btn-block']) }}

                </div>


            {!! Form::close() !!}
            

        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript">
    $('#dp_1').datepicker({
        toggleSelected: true,
        inline: false,
        range: false,
        
    })
</script>
@endsection 
