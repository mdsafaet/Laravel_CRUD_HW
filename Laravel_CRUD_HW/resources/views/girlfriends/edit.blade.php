@extends('girlfriends.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Girlfriends</h2>
            </div>
            <div class="pull-right">                                                            
                <a class="btn btn-primary" href="{{ route('girlfriend.index') }}"> Back</a> {{--girlfriend is Route (web.php) and index is method--}}
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                                                                              
    <form action="{{ route('girlfriend.update',$girlfriend->id) }}" method="POST">   {{-- here  girlfriend is Route (web.php) and update is method  --}}
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $girlfriend->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Age:</strong>
                        <input type="text" name="age" value="{{ $girlfriend->age }}" class="form-control" placeholder="Age">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> Address: </strong>
                            <input type="text" name="address" value="{{ $girlfriend->address }}" class="form-control" placeholder="Address">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong> Phone: </strong>
                                <input type="text" name="phone" value="{{ $girlfriend->phone }}" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                    


    


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection