@extends('layouts.app')


@section('title',' $post->title')

@section('content')

    <div id="app" class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>@{{post.title}}</h1>
            <p>@{{post.body}}</p>
            <hr>
            <p>Posted In: @{{ post.category.name}}</p>
        </div>
    </div>

@endsection

@push('js')

    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    post
                }
            },
            mounted() {
                console.log(post);
            },
        });
    </script>
@endpush
