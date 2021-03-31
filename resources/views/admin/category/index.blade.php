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
			<h3 class="border-bottom" style="margin-bottom:20px;">Category List <a href="{{ url('admin/category/add') }}" class="pull-right btn btn-success btn-xs">
			<span class="glyphicon glyphicon-plus"></span> Add Category</a></h3>
			<table class="table table-bordered display table-hover" id="dataTable">
				<thead>
					<tr class="bg-info">
						<th>#ID</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@if(count($data)>0)
					@foreach($data as $d)
					<tr>
						<td>{{ $d->cat_id }}</td>
						<td>{{ $d->cat_title }}</td>
						<td>
							<a href="{{ url('admin/category/edit/'.$d->cat_id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
							<a onclick="return confirm('Are you sure to delete this data?')" href="{{ url('admin/category/delete/'.$d->cat_id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
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
		$("#dataTable").dataTable({
			"order": [[ 0, 'desc']]
		});
	});
</script>
@endsection