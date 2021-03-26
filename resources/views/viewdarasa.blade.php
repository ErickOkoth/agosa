@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header"> View Forms</div> 

					<div class="card-body">
					
						@include('includes.message')
<table class="table table-bordered table-hover">
	<thead>
	<th>ID</th>
	<th>Name</th>
    <th>Code</th>
	<th>Fees</th>
	
	<th></th>
	</thead>
	<tbody>
	@foreach($darasas as $darasa)
		<tr>
			<td>{{$darasa->id}}</td>
			<td>{{$darasa->name}}</td>
            <td>{{$darasa->code}}</td>
			<td>{{$darasa->fee}}</td>
			
			<td>
				<a class="btn btn-success btn-sm" href="{{route('editdarasa',['id'=>$darasa->id])}}">Edit</a>
				<a class="btn btn-danger btn-sm" href="{{route('remove',['id'=>$darasa->id])}}">Delete</a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection