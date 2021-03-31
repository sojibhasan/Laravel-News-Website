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
			<h3 class="border-bottom" style="margin-bottom:20px;">Add Category <a href="{{ url('admin/category') }}" class="pull-right btn btn-success btn-xs">
			<span class="glyphicon glyphicon-arrow-left"></span> Category List</a></h3>
			<table class="table table-bordered display table-hover" id="dataTable">
				<form action="{{ url('admin/category/store_category') }}" method="post">
					{{ csrf_field() }}
					<tr>
						<th>Title</th>
						<td><input type="text" class="form-control" placeholder="Title" name="_title" /></td>
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