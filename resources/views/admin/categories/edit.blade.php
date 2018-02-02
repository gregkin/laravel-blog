@extends('layouts.app')

	@section('content')
			@include('admin.includes.errors')
			
			<div class="panel panel-default">
				<div class="panel-heading">
					Update Category {{ $category->name }}
				</div>
		
				<div class="panel-body">
				<!-- Our Form for the Post Creation -->
				<form action="{{ route('category.update', ['id' => $category->id ]) }}" method="post">
						{{ csrf_field() }}
						<!-- Our Name for the Category Input  All names match the fields in db-->
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" value="{{ $category->name }}" class="form-control"></input>
						</div>
						<div class="form-group">
							<div class="text-center">
								<button class="btn btn-success" type="submit">
										Update Category
								</button>
							</div>
						</div>
					</form>
				</div>
		</div>
@stop