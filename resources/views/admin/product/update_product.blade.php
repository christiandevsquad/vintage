@extends('layouts.app')

@section('editable_content')

<style>
.btn-color{
color: #ffffff;
}

.centered {
height: 150px;
width: 150px;
overflow: hidden;
}

.vcenter {
display: inline-block;
vertical-align: middle;
float: none;
}
</style>

<form action="{{action('ProductController@store')}}" method="post" enctype="multipart/form-data">
	<div class="row">
	<div class="col-5">
		<div class="form-group">
			<nav class="navbar-nav navbar-expand-sm justify-content-end">
			<button type="submit" class="btn btn-primary mr-sm-2 btn-sm">UPDATE</button>
			<button type="button" class="btn btn-warning btn-color mr-sm-2 btn-sm">CANCEL</button>
			<button type="button" class="btn btn-danger btn-sm ml-auto ">DELETE</button>
			</nav>
		</div>

		<div class="form-group">
			<input type="product-name" class="form-control" placeholder="Product Name">
		</div>
		<div class="form-group">
			<input type="product-name" class="form-control" placeholder="Product Subame">
		</div>
		<div class="form-group">
		<input type="price" class="form-control" placeholder="Price">
		</div>
		<div class="form-group">
			<textarea class="form-control" rows="10" placeholder="Description"></textarea>
		</div> 

		</div>

		<div class="col-7">
		<nav class="navbar-nav navbar-expand-sm justify-content-end">
			<button class="btn btn-primary btn-sm ml-auto">PREVIEW</button>
		</nav>

		<h6 style="font-family: Courier New, Courier, bold, monospace; padding-top:20px;">IMAGES</h6>

		{{--
		<div class="container text-center" style="padding-left:0px; padding-right:0px;">
			<div class="row">
			<div class="col-3">
				<img src="images/no_image.png" alt="" class="rounded img-thumbnail mx-auto image-fluid"> 
			</div>
			<div class="col-3">
				<img src="images/no_image.png" alt="" class="rounded img-thumbnail mx-auto image-fluid"> 
			</div>
			<div class="col-3">
				<img src="images/no_image.png" alt="" class="rounded img-thumbnail mx-auto image-fluid"> 
			</div>
			<div class="col-3" style="padding-top:30px; padding-left:70px">
				<button type="button" class="btn btn-primary btn-sm btn-default"> ADD </button>
			</div>
			</div>
		</div>
		--}}

		<nav class="navbar-nav navbar-expand-sm justify-content-end" style="padding-top:20px;">
			<input class="form-control mr-sm-2" type="tag" placeholder="Tag" aria-label="Tag">
			<button class="btn btn-primary btn-sm ml-auto">ADD</button>
		</nav>
	</div>
</form>
@endsection