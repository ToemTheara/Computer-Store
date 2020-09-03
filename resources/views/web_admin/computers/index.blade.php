@extends('web_admin.computers.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>COMPUTER</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('computers.create')}}"> Create new computer</a>
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
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>CPU</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Description</th>
            <th width="250px">Action</th>
        </tr>

        @foreach ($computers as $computer)

        <tr>
            <td>{{++$i}}</td>
            <td><img src="storage/images/{{$computer->image}}" class="img-thumbnail" width="75" height="100" alt="Image" alt="Image"></td>
            <td>{{$computer->name}}</td>
            <td>{{$computer->type}}</td>
            <td>{{$computer->price}}$</td>
            <td>{{$computer->cpu}}</td>
            <td>{{$computer->ram}}</td>
            <td>{{$computer->storage}}</td>
            <td>{{$computer->detail}}</td>

            <td>
                <form action="{{route('computers.destroy',$computer->computer_id)}}" method="POST">
                    @csrf
                    {{-- <a class="btn btn-info" href="">Show</a> --}}
                    <a class="btn btn-primary" href="{{route('computers.edit',$computer->computer_id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {!! $computers->links() !!}


@endsection
