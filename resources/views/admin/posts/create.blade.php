@extends('layouts.app')

	@section('content')
			@if(count($errors))
				<ul class="list-group">
						@foreach($errors->all() as $error)
								<li class="list-group-item text-danger">
											{{ $error }}
								</li>
						@endforeach
				</ul>
			@endif

		<div class="panel panel-default">
			<div class="panel-heading">
				Create a New Post
			</div>
		
			<div class="panel-body">
				<!-- Our Form for the Post Creation -->
				<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<!-- Our Title and Input  All names match the fields in db-->
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" name="title" class="form-control"></input>
						</div>
						<!-- Where we will select our Image Input -->
						<div class="form-group">
							<label for="featured">Featured image</label>
							<input type="file" name="featured" class="form-control">
						</div>
						<!-- Our Content Input -->
						<div class="form-group">
							<label for="content">Content</label>
							<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
						</div>

						<div class="form-group">
							<div class="text-center">
								<button class="btn btn-success" type ="submit">
									Save Post
								</button>
							</div>
						</div>
				</form>
			</div>
		</div>
@stop