@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">Add student</div>

					<div class="card-body">
						@include('includes.message')
						<form method="post" action="{{ route('poststudent') }}">
							@csrf
							<div class="form-group">
								<label for="email">Name:</label>
								<input type="text" class="form-control" id="email" name="name" required>
							</div>
							<div class="form-group">
								<label for="pwd">Email Address:</label>
								<input type="text" class="form-control" id="pwd" name="email_address" required>
							</div>
							<div class="form-group">
								<label for="pwd">Admission No:</label>
								<input type="text" class="form-control" id="pwd" name="adm_no" required>
							</div>
							<div class="form-group">
								<label for="pwd">Parent phone Number:</label>
								<input type="number" class="form-control" id="pwd" name="parent_phone" required>
							</div>
                            <div class="form-group">
								<label for="pwd">Date of Birth:</label>
								<input type="date" class="form-control" id="pwd" name="date_birth" required>
							</div>
                          
							<div class="form-group">
  <label for="sel1">Form:</label>
  <select class="form-control" name="darasa_id" id="sel1">
    <option></option>
	@foreach($darasas as $darasa)
    <option value="{{$darasa->id}}">{{$darasa->name}}</option>
	@endforeach
  </select>
</div>

                           
							<div class="form-group form-check">
								<label class="form-check-label">

								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-sm">Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection