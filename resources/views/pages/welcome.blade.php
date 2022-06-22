@extends('layouts.app')
@section('title','Home')

@section('stylesheets')
    <style>
        .body {
            width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .content{
            border-radius: 10px;
        }

        .content:hover{
            background-color: #f0f0f0;
            border: 1px solid #a0a0a0;
        }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 h-100 p-5 bg-light border rounded-3 jumpbotron">
            <h1>Welcome to me Blog!</h1>
            <p class="lead">Thank you so much for visiting.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>

        </div>
    </div>
    <br>
    <div class="row">
        <div @click="goTo('/blog/'+post.slug)" style="cursor: pointer;" v-for="(post, index) in posts" :key="index" class="col-md-8 content">

            <div class="post">
                <h3>@{{ post.title}}</h3>
                <p class="body">@{{ post.body}} </p>
{{--                <a :href="" class="btn btn-primary">Read More</a>--}}
                {{-- {{ route('pages.single',$post->id)}}  --}}
            </div>
            <hr style="margin-top:20px;">
            <br>


        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection

@push('js')

    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    posts
                }
            },
            methods: {
                goTo(link) {
                    window.location.href = link;
                },
            },
        });
    </script>
@endpush
