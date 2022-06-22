@extends('layouts.app')

@section('title',' Edit Blog Post')

@section('content')
<div>
    {{ Form::model($post,['route' => ['posts.update',$post->id],'method'=>'PUT','class' =>'row'])}}
    <div class= "col-md-8">
        {{ Form::label('title','Title:')}}
        {{ Form::text('title', null,["class" => 'form-control'])}}
        
        {{ Form::label('slug','Slug:',["style"=>'margin-top:15px;'])}}
        {{ Form::text('slug', null,["class" => 'form-control'])}}
        

        {{ Form::label('body','Body:',["style"=>'margin-top:15px;'])}}
        {{ Form::textarea('body', null,["class" => 'form-control',"style" =>'margin-bottom:15px;'])}}
    </div>

    <div class ="col-md-4">

        <div class="p-5 bg-light border rounded-3 jumpbotron">
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
                <div class = "col-sm-6">

                    {{ Form::submit('Save Changes', ['class'=>'btn btn-success']) }}
                   
                </div>
                <div class ="col-sm-6">                   
                    {{ Html::linkRoute('posts.show','cancel',array($post->id),array('class'=> 'btn btn-danger'))}}                    
                </div>
              

            </div>
        </div>
    </div>
</div>

    
@endsection