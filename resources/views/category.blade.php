@extends('layouts.master');

@section('title')
    Category
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Category</h1>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                        <tr>
                            <td> {{ $item->id }} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->image }} </td>
                            <td> {{ $item->status }} </td>
                            <td>
                                <button class="btn btn-success">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection