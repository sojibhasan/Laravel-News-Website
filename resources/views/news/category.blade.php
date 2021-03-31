@extends('layout.front')
@section('content')
	<section class="container news-container">
    <div class="col-sm-9">
    {{-- Pgination Start --}}
    <div class="row">
      <div class="col-sm-12">
        {{ $news->links() }}
      </div>
    </div>
    {{-- Pagination End --}}
    {{-- News List Start --}}
    @if(count($news)>0)
    @foreach($news as $n)
    <div class="row news-list">
      <div class="col-sm-3">
        <a href="{{ url('news/detail/'.$n->id) }}" class="thumbnail">
          <img class="img" src="{{ asset('storage/'.$n->news_img) }}" alt="{{ $n->news_title }}">
        </a>
      </div>
      <div class="col-sm-9">
        <h2>{{ $n->news_title }}</h2>
        <p class="margin-top10">{{ str_limit($n->news_desc,200,'...') }}</p>
        <p>
          <a href="{{ url('news/detail/'.$n->id) }}" class="btn btn-sm btn-info">Read More...</a>
        </p>
      </div>
    </div>
    <hr />
    @endforeach
    @else
    <h4>No Data Found!!</h4>
    @endif
    {{-- News List End --}}
    {{-- Pgination Start --}}
    <div class="row">
      <div class="col-sm-12">
        {{ $news->links() }}
      </div>
    </div>
    {{-- Pagination End --}}
  </div>
  @include('news.right-sidebar')
  </section>
@endsection
