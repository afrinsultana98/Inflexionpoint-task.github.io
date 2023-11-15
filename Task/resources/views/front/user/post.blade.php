@extends('front.user.master')
@section('title','User Own Post')

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
                            <span>{{Session::get('success')}}</span>
                            <form action="{{route('blog.new')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Content</label>
                                    <div class="col-md-8">
                                        <textarea name="content" id="" cols="30" row="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Image</label>
                                    <div class="col-md-8">
                                        <input name="image" type="file" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input value="Add Blog" type="submit" class="btn btn-success"/>
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
