@extends('layouts.app')
@section('title'," All Categories" )

@section('content')


    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                   <tr>
                        <th>#</th>
                        <th>Name</th>
                   </tr>
                </thead>
                <tbody v-for="(category, index) in categories" :key="index">
                    <tr>
                        <th> @{{category.id}} </th>
                        <td> @{{category.name}} </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-4">
            <div class="p-5 bg-light border rounded-3 jumpbotron">
                {{ Form::open(['route'=> 'categories.store','method' => 'POST'])}}
                <h2>New Category</h2>
                {{ Form::label('name','Name:',['class' => 'top-space-10'])}}
                {{ Form::text('name',null,['class' => 'form-control top-space-10'])}}
                {{ Form::submit('Create New Category',['class' =>'btn btn-primary top-space-20'])}}
                {{ Form::close()}}

            </div>
        </div>
    </div>
@endsection

@push('js')

    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    categories
                }
            },
            mounted() {
                console.log(post);
            },
        });
    </script>
@endpush
