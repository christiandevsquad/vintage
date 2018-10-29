@extends('layouts.app')

@section('editable_content')

{{--
<!-- jQuery CDN  -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script>

<!-- Amsify Plugin -->
<link rel="stylesheet" href="/css/amsify.suggestags.css">
<script src="/js/jquery.amsify.suggestags.js"></script>
--}}

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
		</div>
	</div>
</form>
@endsection