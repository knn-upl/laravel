@extends('layouts.app')
@section('title','Home')


@section('content')

<div class ="row">
    <div class="col-md-12 h-100 p-5 bg-light border rounded-3 jumpbotron">
           <h1>Welcome to me Blog!</h1>
           <p class="lead">Thank you so much for visiting.</p>
           <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>

    </div>
</div>
<br>
<div class = "row">
    <div class ="col-md-8">

        @foreach ($posts as $post)
        <div class ="post">
            <h3>{{ $post->title}}</h3>
            <p>{{ substr($post->body,0,20)}} {{strlen($post->body)> 20 ? "..." :""}} </p>
            <a href=" {{ url('blog/'.$post->slug)}}" class= "btn btn-primary">Read More</a>
           {{-- {{ route('pages.single',$post->id)}}  --}}
       </div>
       <hr style="margin-top:20px;"> 
       <br>
        @endforeach
     

    </div>

    <div class ="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
</div>
@endsection

