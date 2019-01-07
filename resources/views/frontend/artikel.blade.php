@extends('layouts.guest')
@section('content')
<div class="news-blog-area pb-100">
<div class="container">
	<div class="section-title mb-45">
		<h4>Artikel</h4>
	</div>
	<div class="row d-felx">
    @foreach($artikels as $data)
		<div class="col-md-4 col-sm-6">
			<div class="news-blog-wrapper mb-30">
				<div class="news-blog-img">
					<a href="single/{{ $data->slug}}"><img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="" style="max-height: 450px; max-width: 500px; margin-top: 7px;"/></a>
				</div>
				<div class="news-blog-content">
					<h4><a href="single/{{ $data->slug}}">{{$data->judul}}</a></h4>
					<div class="news-blog-meta">
						
						<span>{{$data->created_at}}</span>
					</div>							
					<p>{!! str_limit($data->deskripsi,50) !!}</p>
					<a href="single/{{ $data->slug}}">baca selengkapnya</a>
				</div>
			</div>

		</div>
        @endforeach
	</div>
</div>
</div>
@endsection