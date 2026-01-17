@extends('frontend.layouts.index')

@section('konten')
    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI!</span>
                <span class="down">I am Hibatul Azizi</span>
            </h1>
            <p class="header-subtitle">Fullstack Web Developer</p>

            <a href="#portfolio"><button class="btn btn-primary">Visit My Works</button></a>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">

                    <img src="{{ $abouts->img }}" class="about-img rounded-lg"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">{{ $abouts->judul }}</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        {{ strip_tags($abouts->deskripsi) }}
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">What I Do ?</p>
            <h6 class="section-title mb-6">Service</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/pencil-case.svg" alt="" class="icon">
                            <h6 class="title">Technical Writer</h6>
                            <p class="subtitle">Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/responsive.svg" alt="" class="icon">
                            <h6 class="title">Fixing Laravel Apps Bugs</h6>
                            <p class="subtitle">Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/toolbox.svg" alt="" class="icon">
                            <h6 class="title">Collaborate to Make Project with PHP</h6>
                            <p class="subtitle">Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/analytics.svg" alt="" class="icon">
                            <h6 class="title">UI/UX Designer</h6>
                            <p class="subtitle">Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
                @foreach ($portfolio as $portfolio)
                    <div class="col-md-4">
                        <a href="#" class="portfolio-card">
                            <img src="{{ $portfolio->gambar }}" class="portfolio-card-img mt-4 mb-4 rounded-sm"
                                style="height: 340px; object-fit:cover;" alt="">
                            <span class="portfolio-card-overlay">
                                <span class="portfolio-card-caption">
                                    <h4>{{ $portfolio->judul }}</h5>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#portfolio-{{ $portfolio->id }}">
                                            Detail
                                        </button>


                                </span>
                            </span>
                        </a>
                    </div>
                    {{-- modal --}}
                    <div class="modal fade" id="portfolio-{{ $portfolio->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4>{{ $portfolio->judul }}</h4>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            @if (!empty($portfolio->gambar))
                                                {{-- <img src="{{ asset('inputan/thumbnail/img') }}/{{ $portfolio->gambar }}"
                                                style = "width:20px" alt=""> --}}
                                                <img src="{{ $portfolio->gambar }}"
                                                    style = "width:100%; height:320px; object-fit:cover;" alt="">
                                            @else
                                                <p>Gambar Kosong</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">

                                        {{ strip_tags($portfolio->deskripsi) }}
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir modal --}}
                @endforeach
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->


    </section><!-- end of contact section -->
@endsection
