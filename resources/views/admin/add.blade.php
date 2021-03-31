@extends('layout.admin')
@section('content')
<section class="container" style="margin-top:85px;">
	<div class="row">
		@include('admin/left-sidebar')
		<div class="col-sm-9">
			@if ($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
				<p>{{ $error }}</p>
				@endforeach
			</div>
			@endif
			@if(Session::has('success'))
			<p class="alert alert-warning">{{ session('success') }}</p>
			@endif
			<h3 class="border-bottom" style="margin-bottom:20px;">Add News <a href="{{ url('admin') }}" class="pull-right btn btn-success btn-xs">
			<span class="glyphicon glyphicon-arrow-left"></span> News List</a></h3>
			<table class="table table-bordered display table-hover" id="dataTable">
				<form action="{{ url('admin/store-news') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<tr>
						<th>Category</th>
						<td>
							<select name="_category" class="form-control">
								<option value="">--- Select Category ---</option>
								@if(count($categories)>0)
								@foreach($categories as $c)
								<option value="{{ $c->cat_id }}">{{ $c->cat_title }}</option>
								@endforeach
								@endif
								<option></option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Title</th>
						<td><input type="text" class="form-control" placeholder="Title" name="_title" /></td>
					</tr>
					<tr>
						<th>Description</th>
						<td>
							<textarea class="form-control" id="editor" name="_desc" placeholder="Description" rows="15"></textarea>
						</td>
					</tr>
					<tr>
						<th>Image</th>
						<td><input type="file" name="img"></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Add Data" class="btn btn-danger" />
						</td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</section>
<script type="text/javascript" src="{{ asset('lib/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
	CKEDITOR.replace('editor');
</script>
@endsection