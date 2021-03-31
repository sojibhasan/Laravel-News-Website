@extends('layout.front')
@section('content')
	<section class="container news-container">
    <div class="col-sm-9">
    {{-- News List Start --}}
    <div class="row news-list">
      <h3>
        {{ $newsDetail[0]->news_title }}
      </h3>
      <img class="img margin-top20" src="{{ asset('storage/'.$newsDetail[0]->news_img) }}" alt="{{ $newsDetail[0]->news_title }}">
      <p class="margin-top10">
        {{ $newsDetail[0]->news_desc }}
      </p>
    </div>
    <hr />
    {{-- News List End --}}
  </div>
  @include('news.right-sidebar')
  </section>
@endsection
