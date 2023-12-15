@extends('girlfriends.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show girlfriend</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('girlfriend.index') }}"> Back</a> {{--girlfriend is Route (web.php) and index is method--}}
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $girlfriend->name }}
            </div>
        
            <div class="form-group">
                <strong>Age:</strong>
                {{ $girlfriend->age }}

        </div>
        <div class="form-group">
            <strong>Address:</strong>
            {{ $girlfriend->address }}
    </div>
    <div class="form-group">
        <strong>Phone:</strong>
        {{ $girlfriend->phone }}
@endsection