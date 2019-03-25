@extends('layouts.app')


@section('content')
<div class="col">
<img  class="img-fluid" src="../../storage/app/public/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">

</div>
{!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method'=>'POST']) !!}

{{ Form::submit('Delete Photo',['class'=>'btn btn-danger mt-2'])}}
{!! Form::close() !!}
@endsection