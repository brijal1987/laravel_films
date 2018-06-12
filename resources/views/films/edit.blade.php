@extends('layouts.app')
@section('content')

<form action="{{url('films/'.$film['id'])}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	@include('films._form');
	<div class="form-group row">
        <input type="submit" class="btn btn-success col-md-push-4 col-md-2 " id="EditFilm" name="Edit Film" value="Edit Film" >&nbsp;
        <a href="{{url('films')}}" class="btn btn-success col-md-push-4 col-md-2 ">Cancel</a>
	</div>
</form>


@endsection

<div class="col-md-4">
        <div class="form-group row">
          <label class="col-md-push-1 col-md-3" for="Film Rating">Rating </label>
          <input type="number" class="form-control col-md-push-2 col-md-5 rating" id="Rating" name="rating" aria-describedby="RatingHelp" placeholder="Enter Film Rating" value="<?php echo old('rating')?old('rating'):'';?>">
          <?php echo old('rating')?old('rating'):'';?>
        </div>

      </div>
