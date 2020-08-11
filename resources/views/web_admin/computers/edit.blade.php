@extends('web_admin.computers.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Computer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('computers.index')}}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{route('computers.update',$computer->computer_id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Image</strong>
                <input type="file" name="image" class="form-control"  value="{{$computer->image}}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control"  value="{{$computer->name}}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Type</strong>
                <input type="text" name="type" class="form-control"  value="{{$computer->type}}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Price</strong>
                <input type="text" name="price" class="form-control"  value="{{$computer->price}}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>CPU</strong>
                <input type="text" name="cpu" class="form-control"  value="{{$computer->cpu}}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>RAM</strong>
                <input type="text" name="ram" class="form-control"  value="{{$computer->ram}}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Storage</strong>
                <input type="text" name="storage" class="form-control"  value="{{$computer->storage}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input class="form-control" style="height:100px" name="detail"  value="{{$computer->detail}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary col-3">Submit</button>
        </div>
    </div>

</form>
@endsection
