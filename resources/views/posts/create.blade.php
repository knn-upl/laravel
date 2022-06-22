@extends('layouts.app')

@section('title' , ' Create New Post')
@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}

@endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <h1>Create New Post</h1>

            {!! Form::open(['route' => 'posts.store' , 'data-parsley-validate' => '']) !!}
            {{ Form::label('title','Title:',array('class' => 'top-space-20'))}}
            {{ Form::text('title',null,array('class' => 'form-control top-space-10','required' => '')) }}

            {{ Form::label('slug','Slug:',array('class' => 'top-space-20'))}}
            {{ Form::text('slug',null,array('class' => 'form-control top-space-10','required' => ''))  }}

            {{ Form::label('category_id','Category:',array('class' => 'top-space-20'))}}

            {!!
	            Form::select('category_id',
	            $categories
	            , null, ['class' => 'form-control'])
            !!}

            {{ Form::label('body','Post Body:',array('class' => 'top-space-20'))}}
            {{ Form::textarea('body',null,array('class' => 'form-control top-space-10','required' => '')) }}

            {{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block top-space-10'))}}

            {!! Form::close() !!}

        </div>

    </div>

@endsection

@section('scripts')
    {!! Html::script('/js/parsley.js')  !!}
@endsection
