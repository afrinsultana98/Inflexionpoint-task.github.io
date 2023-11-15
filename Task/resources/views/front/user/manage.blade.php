@extends('front.user.master')
@section('title','manage Blogs')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Manage Blogs</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->content}}</td>
                                        <td>
                                            <img src="{{asset($blog->image)}}" alt="" style="height: 80px;">
                                        </td>
                                        <td>
                                            <a href="{{route('user.edit',['id'=>$blog->id])}}" class="btn btn-outline-primary">Edit</a>
                                            <a href="{{route('user.delete',['id'=>$blog->id])}}" onclick="return confirm('Are you sure to delete this blog?')" class="btn btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
