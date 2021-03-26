@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">Edit student</div>

					<div class="card-body">
						@include('includes.message')
						<form role="form" method="post" action="{{route('updated',$student->id)}}">
							@csrf
							<div class="form-group">
								<label for="email">Name:</label>
								<input type="text" class="form-control" id="name" name="name" value="{{$student->name}}" required>
							</div>
							<div class="form-group">
								<label for="pwd">Admission No:</label>
								<input type="text" class="form-control" id="adm_no" name="adm_no" value="{{$student->adm_no}}" required>
							</div>
                            <div class="form-group">
								<label for="pwd"> Parent Phone:</label>
								<input type="text" class="form-control" id="phone" name="parent_phone" value="{{$student->parent_phone}}" required>
							</div>
                            <div class="form-group">
  <label for="sel1">Class:</label>
  <select class="form-control" name="darasa_id" id="sel1">
    <option value="{{$student->darasa->id}}"></option>
	
	@foreach($darasas as $darasa)
    <option value="{{$darasa->id}}">{{$darasa->name}}</option>
	@endforeach
  </select>
</div>
<div class="form-group">
                            <div class="form-group">
								<label for="pwd">Date Of birth:</label>
								<input type="date" class="form-control" id="date" name="datebirth" value="{{$student->datebirth}}" required>
							</div>
							<div class="form-group">
								<label for="pwd">Fee Status:</label>
								<input type="number" class="form-control" id="fee" name="fee" value="{{$student->fee}}" required>
							</div>
							
							<div class="form-group form-check">
								<label class="form-check-label">

								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-sm">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection