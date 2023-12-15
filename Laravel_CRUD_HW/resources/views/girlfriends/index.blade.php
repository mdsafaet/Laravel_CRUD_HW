@extends('girlfriends.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD Practice</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('girlfriend.create') }}"> Create New Product</a>  
                     {{-- girlfriend is Route (web.php) and create is method--}}
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone</th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($girlfriends as $singlegirlfriend) 
        {{-- girlfriends is from controller index  girlfriends varriable --}}
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $singlegirlfriend->name }}</td>
            <td>{{ $singlegirlfriend->age }}</td>
            <td>{{ $singlegirlfriend->address }}</td>
            <td>{{ $singlegirlfriend->phone }}</td>
           

            <td>
                <form action="{{ route('girlfriend.destroy',$singlegirlfriend->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('girlfriend.show',$singlegirlfriend->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('girlfriend.edit',$singlegirlfriend->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $girlfriends->links() !!}
      
@endsection