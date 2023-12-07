@extends('includes.layout')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-12 col-12">
            <h2 class="mb-4">Berita Terbaru Al-Fatih</h2>
        </div>

        <div class="grid-container">
            @foreach ($books as $book)
                <div class="col-lg-12 col-12">
                    <div class="services-thumb">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="services-image-wrap">
                                    <a href="detail-news/9.html">
                                        <img src="{{ asset('storage/posts/' . $book->image) }}"
                                            class="services-image img-fluid" alt="">
                                        <img src="{{ asset('storage/posts/' . $book->image) }}"
                                            class="services-image services-image-hover img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                    <h4 class="services-title mb-1 mb-lg-2">
                                        <a class="services-title-link" href="detail-news/9.html">{{ $book->title }}</a>
                                    </h4>

                                    <p>Santri Al-Fatih belajar berkuda (Ekskul)</p>

                                    <div class="d-flex flex-wrap align-items-center">

                                        <a href="detail-news/9.html"
                                            class="custom-btn btn button button--atlas mt-2 ms-auto">
                                            <span>Learn More</span>

                                            <div class="marquee" aria-hidden="true">
                                                <div class="marquee__inner">
                                                    <span>Learn More</span>
                                                    <span>Learn More</span>
                                                    <span>Learn More</span>
                                                    <span>Learn More</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection