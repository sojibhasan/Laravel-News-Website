@extends('layout.admin')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('lib/DataTables-1.10.18/css/dataTables.bootstrap.min.css') }}" />
<script type="text/javascript" src="{{ asset('lib/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/DataTables-1.10.18/js/dataTables.bootstrap.js') }}"></script>

<section class="container" style="margin-top:85px;">
	<div class="row">
		@include('admin/left-sidebar')
		<div class="col-sm-9">
			@if(Session::has('success'))
			<p class="alert alert-warning">{{ session('success') }}</p>
			@endif
			<h3 class="border-bottom" style="margin-bottom:20px;">News List <a href="{{ url('admin/add-news') }}" class="pull-right btn btn-success btn-xs">
			<span class="glyphicon glyphicon-plus"></span> Add News</a></h3>
			<table class="table table-bordered display table-hover" id="dataTable">
				<thead>
					<tr class="bg-info">
						<th>Category</th>
						<th>Title</th>
						<th>Image</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@if(count($data)>0)
					@foreach($data as $d)
					<tr>
						<td>{{ $d->cat_title }}</td>
						<td>{{ $d->news_title }}</td>
						<td><img src="{{ asset('storage/'.$d->news_img) }}" width="100" class="img-responsive" /></td>
						<td>{{ str_limit($d->news_desc,50,'...') }}</td>
						<td>
							<a href="{{ url('admin/edit-news/'.$d->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
							<a onclick="return confirm('Are you sure to delete this data?')" href="{{ url('admin/news/delete/'.$d->id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
						</td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$("#dataTable").dataTable();
	});
</script>
@endsection