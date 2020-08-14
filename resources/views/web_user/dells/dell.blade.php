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
                        <a href="/dell" class="list-group-item"><button class="btn btn-outline-primary ">DELL COMPUTER</button></a>
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
                    <img class="d-block img-fluid" style="width:900px; height:350px; " src="https://www.ultrabookreview.com/wp-content/uploads/2020/04/rog-scar-15-2020.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" style="width:900px; height:350px;"  src="https://tech4gamers.com/wp-content/uploads/2020/05/Asus-ROG-Strix-Scar-17-G732LXS-740x356-1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" style="width:900px; height:350px;" src="https://www.techhub.in.th/wp-content/uploads/2020/06/Facebook-Post_New-Model-ROG_20200622-02.jpg" alt="Third slide">
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
                <div>
                    <button class="btn btn-outline-primary ">DELL Computer>>></button>
                </div>
                    <div class="row">
                        @foreach ($dells as $dell)

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                <a href="/dell_detail/{{$dell->computer_id}}"><img class="card-img-top" src="storage/images/{{$dell->image}}" alt="Computer"></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="/dell_detail/{{$dell->computer_id}}">{{$dell->name}}</a>
                                    </h4>
                                    <h5>${{$dell->price}}</h5>
                                    <p class="card-text">{{$dell->detail}}</p>
                                </div>
                                <div class="card-footer text-center">
                                    <small class="text-muted">Date: {{$dell->created_at}}</small>
                                </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <!-- /.row -->
                    {!!$dells->links()!!}


                </div>
            <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
  @endsection
