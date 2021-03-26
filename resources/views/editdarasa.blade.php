@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">Edit Forms</div>

					<div class="card-body">
						@include('includes.message')
						<form role="form" method="post" action="{{route('update',$darasa->id)}}">
							@csrf
							<div class="form-group">
								<label for="email">Classes:</label>
								<input type="text" class="form-control" id="name" name="name" value="{{$darasa->name}}" required>
							</div>
                            <div class="form-group">
								<label for="pwd">Code:</label>
								<input type="text" class="form-control" id="code" name="code" value="{{$darasa->code}}" required>
							</div>
							<div class="form-group">
								<label for="pwd">Fee:</label>
								<input type="text" class="form-control" id="fee" name="fee" value="{{$darasa->fee}}" required>
							</div>
							
							<div class="form-group form-check">
								<label class="form-check-label">

								</label>
							</div>
							<input type="text" id="id" name="id" value="{{$darasa->id}}" hidden> 
							<button type="submit" class="btn btn-primary btn-sm">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection