@extends('layouts.app')

@section('title',' View Post')

@section('content')

    <div class="row">
        <div class= "col-md-8">

            <h1> {{ $post->title }}</h1>
            <p class ="lead">{{ $post->body }}</p>
        </div>

        <div class ="col-md-4">
            <div class="p-5 bg-light border rounded-3 jumpbotron">
 
                <dl class ="dl-horizontal">
                    <dt>Url:</dt>
                    <a href="{{ url('blog/'.$post->slug) }}">{{  url('blog/'.$post->slug)  }}</a>
                </dl>

                <dl class ="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{ date('M j, Y | H:i a',strtotime($post->created_at )) }}</dd>
                </dl>

                <dl class ="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y | H:i a',strtotime($post->updated_at )) }}</dd>
                </dl>
                <hr class="hr-margin-bottom">
                
                <div class ="row">
                    <div class ="col-sm-6">
                        {{ Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=> 'btn btn-primary'))}}
                        
                    </div>
                    <div class = "col-sm-6">

                        {{ Form::open(['route' => ['posts.destroy',$post->id],'method'=>'DELETE'])}}
                      
                        {!! Form::submit('Delete', ['class' =>'btn btn-danger']) !!}
                        {{ Form::close()}}
                    </div>
                    <div class="col-sm-12" style="margin-top:10px">                       
                        {{ Html::linkRoute('posts.index','See All Posts',array($post->id),array('class'=> 'btn btn-secondary'))}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

