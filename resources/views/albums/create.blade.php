@extends('layouts.app')


@section('content')
<div class="col-md-8">
<h3>Create Album</h3>
{!! Form::open(['action' => 'AlbumsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
{{ Form::text('name','',['placeholder'=>'Album Name','class'=>'form-control mb-2']) }}
{{ Form::textarea('description','',['placeholder'=>'Album Description','class' => 'form-control mb-2']) }}
{{Form::file('cover_image')}}
<br>
{{ Form::submit('Submit',['class'=>'btn btn-primary mt-2 btn-block'])}}
{!! Form::close() !!}

</div>
@endsection