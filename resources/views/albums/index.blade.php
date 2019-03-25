@extends('layouts.app')


@section('content')
<div class="col">
<h3 class="p-3">Albums</h3>
</div>
</div>
<div class="row">
@foreach($albums as $album)
<div class="col-md-4">
<h5>
{{$album->name}}</h5>
<a href="albums/{{$album->id}}}">

<img  class="img-fluid" src="../storage/app/public/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
</a>
</div>
@endforeach
</div>
@endsection