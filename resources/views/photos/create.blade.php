@extends('layouts.app')


@section('content')
<div class="col-md-8">
<h3 class="p-3">Upload Photo</h3>
{!! Form::open(['action' => 'PhotosController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
{{ Form::text('title','',['placeholder'=>'Photo Title','class'=>'form-control mb-2']) }}
{{ Form::textarea('description','',['placeholder'=>'Photo Description','class' => 'form-control mb-2']) }}
{{Form::file('photo')}}
{{Form::hidden('album_id',$album_id)}}
<br>
{{ Form::submit('Submit',['class'=>'btn btn-primary mt-2 btn-block'])}}
{!! Form::close() !!}

</div>
@endsection