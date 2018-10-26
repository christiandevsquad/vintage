@extends('layouts.app')

@section('editable_content')
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group mr-2" role="group" aria-label="First group">
        <button type="button" class="btn btn-primary">Add Product</button>
    </div>
    <div class="btn-group mr-2" role="group" aria-label="Second group">
        <button type="button" class="btn btn-outline-success">Import Product</button>
    </div>

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search product" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-success" type="button">Search</button>
        </div>
    </div>
</div>
@endsection