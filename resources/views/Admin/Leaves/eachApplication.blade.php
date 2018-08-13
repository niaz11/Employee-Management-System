@extends('Admin.master')

<?php $titleTag = htmlspecialchars($user->name); ?>
@section('title', "| $titleTag ")

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')
<div class="row" style="margin-top: 50px;">
    
    <div class="col-lg-12">
        <h1 class="page-header" style="font-size: 20px; text-align: center;">Leave Application
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li class="active">Leave Request</li>
        </ol>
    </div>

    
        <div class="col-lg-8 col-lg-offset-2">
            
            <div class="well well-sm">
                <h4>Sir,</h4>
                <h4 style="margin-top: -8px;">System Analyst & Head,</h4> 
                <h4 style="margin-top: -8px;">Department of {{$user->department}} </h4>
                <h4 style="margin-top: -8px;"><i>Nexus</i> Firm,</h4>
                <h4 style="margin-top: -8px;">Kotbari, Comilla 3506, bangladesh.</h4>
                
                <h4 style="margin-top: 30px;">Subject: <strong>{{ $user->title }}</strong></h4>
                <h4 style="margin-top: 30px;">Sir,</h4>
                <p style="font-size: 16px; margin-top: -8px;">{{ $user->application }}</p>
                <h4 style="margin-top: 30px;">your,</h4>
                <h4 style="margin-top: -8px;">most obedient </h4>
                <h4 style="margin-top: -8px;">Employee Id: <strong>{{$user->user_id}}</strong></h4>
                <h4 style="margin-top: -8px;"> <strong>{{ $user->name }}</strong></h4>
                <h4 style="margin-top: -8px;">Remaining Leave: <strong> {{ $employee->existLeave }} </strong></h4>
                <h4 style="margin-top: -8px;">Taken Leave: <strong> {{ $employee->useLeave }} </strong></h4>
                <h4 style="margin-top: -8px;">Leave Require: <strong>{!! $interval->format('%R%a days') !!}</strong></h4>
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::model($user, ['route' => ['Leaves.update', $user->id], 'method' => 'PUT']) !!}
                    
                            {{ Form::submit('Accept', ['class' => 'btn btn-success btn-block btn-lg']) }}
                        
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('Leaves.reject', $user->id) }}" class="btn btn-danger btn-lg btn-block">Reject</a>
                    </div>
                </div>             
            </div>
        </div>
    </div>
  
@stop
 