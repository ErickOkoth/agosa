@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agoro Sare High school Forms</div>

                <div class="card-body">
				@include('includes.message')
						<form method="post" action="{{ route('postdarasa') }}">
							@csrf
							<div class="form-group">
								<label for="email">Class Name:</label>
								<input type="text" class="form-control" id="email" name="name" required>
							</div>
                            <div class="form-group">
								<label for="email">Code:</label>
								<input type="number" class="form-control" id="email" name="code" required>
							</div>
							<div class="form-group">
								<label for="email">Fees:</label>
								<input type="number" class="form-control" id="email" name="fee" required>
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