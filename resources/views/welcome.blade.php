@extends('layouts.app')
@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:100%; height:500px;
overflow:hidden;">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="img-fluid" src="https://wallbox.ru/wallpapers/main2/201717/14932179335900b28d98f2c6.98496604.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="https://www.zastavki.com/pictures/originals/2017Animals___Cats_Two_cute_little_kitten_112429_.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="https://s1.1zoom.ru/b5050/4/Cats_Kittens_Ginger_484195_3840x2400.jpg" alt="Third slide">
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <br>
<h1 class="h1">Top 10 active users</h1>
  <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Level</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Serg</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>user</td>
      <td>user</td>
      <td>root</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>4</td>
      <td>24</td>
      <td>&</td>
    </tr>
  </tbody>
</table>
</div>
@endsection