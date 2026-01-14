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

            <button class="btn btn-primary">Visit My Works</button>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="assets/imgs/man.png" class="about-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aliquid ad provident aut
                        fuga animi soluta quae eos non cupiditate voluptates dolorem, doloremque quos dicta quibusdam
                        impedit iure nemo a iste
                        <br>culpa! Quasi quibusdam hic recusandae delectus velit officiis explicabo voluptatibus! Nemo
                        esse similique, voluptates labore distinctio, placeat explicabo facilis molestias, blanditiis
                        culpa iusto voluptatem ratione eligendi a, quia temporibus velit vero ipsa sint ex voluptatum
                        expedita aliquid! Debitis, nam!
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
                            <img src="assets/imgs/pencil-case.svg"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Technical Writer</h6>
                            <p class="subtitle">Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/responsive.svg"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Fixing Laravel Apps Bugs</h6>
                            <p class="subtitle">Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/toolbox.svg"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Collaborate to Make Project with PHP</h6>
                            <p class="subtitle">Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/analytics.svg"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
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
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="assets/imgs/folio-1.jpg" class="portfolio-card-img"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/folio-2.jpg" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/folio-3.jpg" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->


    </section><!-- end of contact section -->


@endsection