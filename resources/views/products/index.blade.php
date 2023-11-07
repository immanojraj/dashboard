@extends('layouts.app')

@section('title','Home Product')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="">
            <a href="" class="btn btn-primary">Add Product</a>
        </h1>
    </div>
    <hr />
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Product Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
@endsection
