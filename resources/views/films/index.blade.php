@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    	<div class="film-list span6 center">
    		<h1 class="text-center">Film List</h1>
    		<a href="{{url('films/create')}}">Add Film</a>
	        <table class="table" border="1">
	        	<tr>
	        		<th>Name</th>
	        		<th>Rating</th>
	        		<th>Country</th>
	        		<th>Action</th>
	        		<th>Delete</th>
	        	</tr>
		       <tr>
	            @foreach ($films['data'] as $film)
			       	<td>{{$film['name']}}</td>
			       	<td>{{$film['rating']}}</td>
			       	<td>{{$film['country']}}</td>
			       	<td><a href="{{url('films/'.$film['id'].'/edit')}}"><i class="fa fa-edit"></i></a>&nbsp;<a href="{{url('films/'.$film['slug'])}}"><i class="fa fa-eye"></i></a>&nbsp;
			       	</td>
			       	<td>
			       	{{ Form::open([ 'method'  => 'delete', 'route' => [ 'films.destroy', $film['id'] ] ]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                	{{ Form::close() }}
                	</td>
			    @endforeach
		       	</tr>
			</table>
			<ul class="pagination">
				<li><a href="{{ $films['first_page_url'] }}">First Page</a></li>
				<li><a href="{{ $films['prev_page_url'] }}">Prev</a></li>
				<li><a href="{{ $films['next_page_url'] }}">Next</a></li>
				<li><a href="{{ $films['last_page_url'] }}">Last Page</a></li>
			</ul>
	    </div>
    </div>
</div>
@endsection