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
                    <div class="row">
                        <div class="container">
                            <div class="card">
                                <div class="container-fliud">
                                    <div class="wrapper row">
                                        <div class="preview col-md-6">
                                            <div class="preview-pic tab-content">
                                            <div class="tab-pane active" id="pic-1"><img style="width:300px; height:300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQmsDL9Y-tESlBfTmY_T6d41uVNM3NoqJ-nHQ&usqp=CAU" /></div>
                                            </div>
                                        </div>
                                        <div class="details col-md-6">
                                            <h3 class="product-title">shoes fashion</h3>
                                            <div class="rating">
                                                <div class="stars">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <span class="review-no">41 reviews</span>
                                            </div>
                                            <h4 class="price">Price: <span>$180</span></h4>
                                            <h4 class="price">Description:</h4>
                                            <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                                            <div class="action">
                                                <button class="btn btn-danger" type="button">add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
  @endsection