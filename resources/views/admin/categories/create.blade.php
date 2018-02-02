@extends('layouts.app')

	@section('content')
		@include('admin.includes.errors')

		<div class="panel panel-default">
			<div class="panel-heading">
				Create a New Category
			</div>
		
			<div class="panel-body">
				<!-- Our Form for the Post Creation -->
				<form action="{{ route('category.store') }}" method="post">
						{{ csrf_field() }}
						<!-- Our Name for the Category Input  All names match the fields in db-->
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" class="form-control"></input>
						</div>
						<div class="form-group">
							<div class="text-center">
								<button class="btn btn-success" type="submit">
										Save Category
								</button>
							</div>
						</div>
				</form>
			</div>
		</div>
@stop