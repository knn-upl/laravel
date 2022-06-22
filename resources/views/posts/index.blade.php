@extends('layouts.app')

@section('title', ' All Posts')
    
@section('content')

    <div class ="row">
            <div class="col-md-10">
                <h1>All Posts</h1>
            </div>
            <div class="col-md-2">
                <a href=" {{ route('posts.create')}}" class ="btn btn-primary">Create New Post</a>


            </div>
            <div class="col-md-12">
                <hr>
            </div>
    
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>     
                       
                        <th>id</th>                   
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created At</th>    
                        <th></th>
                    </tr>               
                </thead>
                <tbody>
                                
                        @foreach ($posts as $posts)
                        <tr>  
                            <th>{{ $posts->id }}</th>
                            <td>{{ $posts->title }}</td>
                            <td>{{ substr($posts->body,0,20)}} {{strlen($posts->body)> 20 ? "..." :""}}  </td>
                            <td>{{ date('M j,Y',strtotime($posts->created_at)) }}</td>
                           
                            <td> <a href="{{route('posts.show',$posts->id)}}" class="btn btn-dark btn-sm">View</a> <a href="{{route('posts.edit',$posts->id)}}" class="btn btn-dark btn-sm">Edit</a></td>
                        </tr>
                        @endforeach                    
                </tbody>
            </table>
     
            {{-- <div class="text-center">
				{{ $posts->hasPages() }}

			</div>// --}}
        </div>
    </div>
@endsection