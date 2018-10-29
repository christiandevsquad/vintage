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
    
    <table class="table table-hover" id="table" style="margin-top:20px;" >
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Sub Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr class='item{{ $item->id }}'>
                <td style="text-align:center">{{ $item->id }}</td>
                <td style="text-align:center">{{ $item->name }}</td>
                <td style="text-align:center">{{ $item->subName }}</td>
                <td style="text-align:center">{{ $item->price }}</td>
                <td style='text-align:center; white-space: nowrap'>
                    <a href="{{action('ProductController@edit', $item->id)}}" class="edit-modal btn btn-success btn-xs" role="button">Edit</button>
                    <a href="{{action('ProductController@destroy', $item->id)}}" class="delete-modal btn btn-danger btn-xs">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>

<script>
    $(document).ready(function() {
        $('#table').DataTable( {
            "pagingType": "full_numbers"
        } );
    } );
</script>
@endsection