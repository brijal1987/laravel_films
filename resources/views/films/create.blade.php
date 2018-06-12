@extends('layouts.app')
@section('content')

<form action="{{url('films')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	@include('films._form');
	
	<div class="form-group row">
        <input type="submit" class="btn btn-primary col-md-push-4 col-md-2 " id="addFilm" name="addFilm" value="Add New Film" >
	</div>
</form>


@endsection
