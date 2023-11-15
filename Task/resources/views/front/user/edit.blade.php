@extends('front.user.master')
@section('title','User Edit Post')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Edit Blog</h3>
                        </div>
                        <div class="card-body">
                            <span>{{Session::get('success')}}</span>
                            <form action="{{route('user.update',['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{ $blog->title }}"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Content</label>
                                    <div class="col-md-8">
                                        <textarea name="content" id="" cols="30" row="10" class="form-control">{{ $blog->content }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Image</label>
                                    <div class="col-md-8">
                                        <input name="image" type="file" class="form-control" value="{{ $blog->image }}" />
                                        <img src="{{asset($blog->image)}}" alt="" style="height: 80px" class="mt-2">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input value="update Blog" type="submit" class="btn btn-success"/>
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
