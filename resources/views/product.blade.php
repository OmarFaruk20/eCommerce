@extends('master')

@section('main_content')
	
	<div class="content">
		<div class="custom_product">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  	@foreach($products as $item)
			    <div class="item {{$item['id']==1? 'active': ''}}">
			      <img class="slider_img" src="{{$item['gallery']}}" alt="slider">
			      <div class="carousel-caption slider-text">
			        <h3>{{ $item['name'] }}</h3>
			        <p>{{ $item['description'] }}</p>
			      </div>
			    </div>
			    @endforeach
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>

@stop