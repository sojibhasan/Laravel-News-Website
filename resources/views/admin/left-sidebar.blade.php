<div class="col-sm-3">
	<div class="list-group">
		<a href="{{ url('admin') }}" class="list-group-item {{ Request::is('admin') ? 'active' : '' }}">News</a>
		<a href="{{ url('admin/category') }}" class="list-group-item {{ Request::is('admin/category') ? 'active' : '' }}">Categories</a>
	</div>
</div>