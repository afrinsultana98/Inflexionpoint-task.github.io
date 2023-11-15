@extends('backend.master')
@section('title','Add Blogs')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Blog</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
{{--                            <form action="{{route('product.store')}}" method="post" i>--}}
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" disabled selected>Select a Category</option>
                                           @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
{{--                                <div class="row mt-3">--}}
{{--                                    <label for="" class="col-md-4">Brand Name</label>--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <input type="text" name="brand_name" class="form-control"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row mt-3">--}}
{{--                                    <label for="" class="col-md-4">Days</label>--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <input type="text" name="price" class="form-control"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Content</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4 ">Publication Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" checked value="1"/> Published</label>
                                        <label for=""><input type="radio" name="status" value="0"/> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-4 ">
                                        <input type="submit"  value="create" class="btn btn-outline-success">
                                    </div>

                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
