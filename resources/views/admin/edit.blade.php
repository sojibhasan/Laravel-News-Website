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
			<h3 class="border-bottom" style="margin-bottom:20px;">Edit News <a href="{{ url('admin') }}" class="pull-right btn btn-success btn-xs">
			<span class="glyphicon glyphicon-arrow-left"></span> News List</a></h3>
			<table class="table table-bordered display table-hover" id="dataTable">
				<form action="{{ url('admin/update-news/'.$news->id) }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<tr>
						<th>Category</th>
						<td>
							<select name="_category" class="form-control">
								<option value="">--- Select Category ---</option>
								@if(count($categories)>0)
								@foreach($categories as $c)
								<option {{ ($c->cat_id==$news->cat_id) ? 'selected':'' }} value="{{ $c->cat_id }}">{{ $c->cat_title }}</option>
								@endforeach
								@endif
								<option></option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Title</th>
						<td><input value="{{ $news->news_title }}" type="text" class="form-control" placeholder="Title" name="_title" /></td>
					</tr>
					<tr>
						<th>Description</th>
						<td>
							<textarea class="form-control" name="_desc" placeholder="Description" rows="15">{{ $news->news_desc }}</textarea>
						</td>
					</tr>
					<tr>
						<th>Image</th>
						<td>
							<img src="{{ asset('storage/'.$news->news_img) }}" width="100" />
							<input type="hidden" name="img" value="{{ $news->news_img }}" />
							<input type="file" name="img">
						</td>
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