@extends('layouts.master')

@section('title')
    Category
@endsection


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
    
        <div class="card-header">
            <h4>Add Category</h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
                
            
            <form action="{{url('add-category')}}" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
                </div>
                {{-- create slug,description,image,SEO tags,Meta Description --}}
                <div class="mb-3">
                    <label for="slug" class="form-label">Category Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Category Slug">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Category Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Category Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <h6>SEO Tags</h6>
                {{-- meta title --}}
                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title">
                </div>

                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" rows="3"></textarea>
                </div>
                {{-- meta keywords --}}
                <div class="mb-3">
                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter Meta Keywords">
                </div>
                
                <h6>Status Mode</h6>
                <div class="row">
                    {{-- Navbar Status --}}
                    <div class="col-md-3 mb-3">
                        <label for="navbar_status" class="form-label">Navbar Status</label>
                        <select class="form-control" id="navbar_status" name="navbar_status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>


                @csrf

                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>


        </div>



    </div>
</div>


@endsection