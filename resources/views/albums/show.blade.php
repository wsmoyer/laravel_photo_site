@extends('layouts.app')


@section('content')
<div class="col">
<h3 class="p-3">{{$album->name}}</h3>
<a href="/" class="btn btn-primary">Go Back</a>
<a href="/photoshow/public/photos/create/{{$album->id}}" class="btn btn-primary float-right">Upload Photo to Album</a>

</div>
<div class="row">
@foreach($album->photos as $photo)
<div class="col-md-4">
<h5 class="p-3">
{{$photo->title}}</h5>
<a href="/photoshow/public/photos/{{$photo->id}}}">

<img  class="img-fluid" src="../../storage/app/public/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
</a>
</div>
</div>
@endforeach
@endsection