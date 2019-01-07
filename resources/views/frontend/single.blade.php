@extends('layouts.guest')
@section('content')
<div class="container">
        <div class="row">
            <div class="section-title text-center">
                        <h1>Artikel</h1>
                   </div>
        	<div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <img class="img-fluid" src="{{ asset('assets/img/gambar/'.$artikel->gambar) }}" alt="" style="max-width: 75%; height: auto; margin-top: 50px;">
                        <h1>
                            {{ $artikel->judul }}
                        </h1>
                    <div class="content-wrap">
                        <p>
                            {!! $artikel->deskripsi !!}
                        </p>

                    </div>
                    </div>
                    <!-- Start nav Area -->
                <section class="nav-area pt-50 pb-100">
                    <div class="container">
                        <div class="row justify-content-between">
                            @if(isset($previous))
                            <div class="col-sm-6 nav-left justify-content-start d-flex">
                                <!-- <div class="thumb">
                                    <img src="{{ asset('assets/img/gambar/'.$artikel->gambar) }}" style="width: 20px;" alt="">
                                </div> -->
                                <div class="post-details">
                                    <p><b>{{ $previous->judul }}</b></p>
                                    <h4 class="text-uppercase"><a href="{{ URL::to( '/single/' . $previous->slug) }}"><<<-Kembali</a></h4>
                                </div>
                            </div>
                            @endif
                            @if(isset($next))
                            <div class="col-sm-6 nav-right justify-content-end d-flex">
                                <!-- <div class="thumb">
                                    <img src="{{ asset('assets/img/gambar/'.$artikel->gambar) }}" style="width: 20px;" alt="">
                                </div>   --> 
                                <div class="post-details">
                                    <p><b>{{ $next->judul }}</b></p>
                                    <h4 class="text-uppercase"><a href="{{ URL::to( '/single/' . $next->slug) }}">Selanjutnya->>></a></h4>
                                </div>                      
                            </div>
                            @endif
                        </div>
                    </div>    
                </section>
                <!-- End nav Area -->
                </div>
            </div>
        </div>
        @endsection