@extends('web_user.layouts.app')

    @section('content')
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h3 class="my-4">COMPUTER STORE</h3>
                    <div class="list-group text-center">
                        <a href="/" class="list-group-item">ALL COMPUTER</a>
                        <a href="/apple" class="list-group-item"><button class="btn btn-outline-primary ">APPLE COMPUTER</button></a>
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
                    <button class="btn btn-outline-primary ">APPLE Computer>>></button>
                </div>

                <div>
                    <form class="form-row" action="/search-model" method="GET">
                        <div class="col-auto my-1">
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="model">
                            <option selected>Choose model...</option>
                            <option value="Macbook Pro" name="macbookpro">MacBook Pro</option>
                            <option value="Macbook Air" name="macbookair">MacBook Air</option>
                          </select>
                        </div>
                        <div class="col-auto my-1">
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="year">
                            <option selected>Choose Year...</option>
                            <option value="2018" >2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                          </select>
                        </div>
                        <div class="col-auto my-1">
                          <button type="submit" class="btn btn-primary">Search</button>
                        </div>

                    </form>
                </div>
                    <div class="row">
                        @foreach ($computers as $computer)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                <a href="/computer_detail/{{$computer->computer_id}}"><img class="card-img-top" src="storage/images/{{$computer->image}}" alt="Computer"></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="/computer_detail/{{$computer->computer_id}}">{{$computer->name}}</a>
                                    </h4>
                                    <h5>${{$computer->price}}</h5>
                                    <p class="card-text">{{$computer->detail}}</p>
                                </div>
                                <div class="card-footer text-center">
                                    <small class="text-muted">Date: {{$computer->created_at}}</small>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /.row -->
                    {{$computers->appends(request()->input())->links()}}
                </div>
            <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
  @endsection
