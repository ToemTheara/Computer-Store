@extends('web_user.layouts.app')

    @section('content')
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h3 class="my-4">COMPUTER STORE</h3>
                    <div class="list-group text-center">
                        <a href="/" class="list-group-item">ALL COMPUTER</a>
                        <a href="/apple" class="list-group-item">APPLE COMPUTER</a>
                        <a href="/msi" class="list-group-item">MSI COMPUTER</a>
                        <a href="/dell" class="list-group-item">DELL COMPUTER</a>
                        <a href="/lenovo" class="list-group-item">LENOVO COMPUTER</a>
                        <a href="/asus" class="list-group-item">ASUS COMPUTER</a>
                    </div>
                </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                    <div class="row">
                        @foreach ($lenovo as $lenovo)

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="storage/images/{{$lenovo->image}}" alt="Computer"></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#">{{$lenovo->name}}</a>
                                    </h4>
                                    <h5>{{$lenovo->price}}</h5>
                                    <p class="card-text">{{$lenovo->detail}}</p>
                                </div>
                                <div class="card-footer text-center">
                                    <small class="text-muted">Date: {{$lenovo->created_at}}</small>
                                </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <!-- /.row -->


                </div>
            <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
  @endsection
