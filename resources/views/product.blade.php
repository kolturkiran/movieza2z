@extends('master')
@section('content')
<style>
    img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.dropbtn {
  background-color: none;
  color: coral;
  padding: 10px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.dropdwn-cotainer{
    padding:50px 70px;
    margin:10px;
    /* background: url("../images/eevzz_logo.png") no-repeat fixed center center / cover rgba(0, 0, 0, 0) !important; */
    background-image: url("../images/eevzz_logo.png")no-repeat fixed center center / cover rgba(0, 0, 0, 0) !important;
    background-size: cover;
    background-repeat: no-repeat;
}

</style>
    <div class="container custom-product">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="item {{ $item['id']==1?'active':''}}">
                    <a href="detail/{{$item['id']}}">
                        <img class="slider-img" src="{{$item['gallery']}} ">
                        <div class="carousel-caption slider-text">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                        </div>
                    </a>
                </div>
            @endforeach                       
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <!-- Trending wrapper -->
        <!--<div class="trending-wrapper">
            <h3>Trending Products</h3>
            <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="trending-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-image"src="{{$item['gallery']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>                        
                        </div>
                    </a>
                </div>
            @endforeach                       
            </div>
        </div>-->
        <div class="dropdwn-cotainer">
            <div class="row">
                <div class="dropdown col-sm-3">
                    <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div class="dropdown col-sm-3">
                    <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div class="dropdown col-sm-3">
                    <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div class="dropdown col-sm-3">
                    <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection