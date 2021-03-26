@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header"> View All Students</div>

					<div class="card-body">
					
						@include('includes.message')
<table class="table table-bordered table-hover">
	<thead>
	<th>Name</th>
	<th>Admission NO.</th>
    <th>Parent Phone No.</th>
    <th>Form.</th>
    <th>Date of Birth.</th>
    <th>Email Address</th>
	
	<th></th>
	<th></th>
	</thead>
	<tbody>
	@foreach($students as $student)
		<tr>
        <td>{{$student->name}}</td>
        <td>{{$student->adm_no}}</td>
        <td>{{$student->parent_phone}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->date_birth}}</td>
        <td>{{$student->email_address}}</td>
	
        <td><a class="btn btn-info btn-lg" href="{{route('editstudent',$student->id)}}">Edit</a></td>
        <td><a class="btn btn-danger btn-lg" href="{{route('removed',$student->id)}}">Delete</a></td>
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