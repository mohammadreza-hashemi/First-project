@extends('layout')

@inject('carbon','\Carbon\Carbon')

@section('content')

@if(empty($people))
        <span>no people available</span>
        @else
        <span>peoble are availble</span>
        @endif
       @foreach ($people as $p)
            <li>{{$p}}</li>
        @endforeach
        <h2>{{ $carbon::now('Europe/London') }}</h2>
        <form method="POST" class="container"> 
            {{ csrf_field() }}
            
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-offset-3">
                    <input class="form-control" name="email[]" id="email-1" type="text" value="{{ old('email.0')}}">
                    @if($errors->has('email.0'))
                    <span class="text-danger">{{ $errors->first('email.0')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-offset-3">
                    <input class="form-control" name="email[]" id="email-2" type="text" value="{{ old('email.1')}}">
                    @if($errors->has('email.1'))
                        <span class="text-danger">{{ $errors->first('email.1')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-offset-3">
                    <input class="form-control" name="email[]" id="email-3" type="text" value="{{ old('email.2')}}">
                    @if($errors->has('email.2'))
                        <span class="text-danger">{{ $errors->first('email.2')}}</span>
                    @endif
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="btn" >send</button>
        </form>
@stop