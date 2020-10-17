<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>e-journal | Journal System oleh Harvasoft</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
        @yield('css')
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body>
         <!--Navbar Start-->
         @include('includes.navbar')
         <!-- Navbar End -->

          <!-- home start -->
        <section class="bg-home" style="background: url({{ asset('assets/images/bg-journal.jpg') }})" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="home-title">
                                    <h1 class="mb-4 text-white">Selamat Datang di e-Journal</h1>
                                    <p class="text-white home-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio culpa quas asperiores explicabo esse hic ducimus dolores ab exercitationem excepturi odit perspiciatis facere, nesciunt reiciendis quibusdam officia sed sint at?</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </section>
        <!-- home end -->

         <section class="content container-fluid mt-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    {{ $slot }}
                </div>
                <div class="col-md-4">
                    <div class="quick-link card shadow-md border-light mb-2">
                        <h5 class="card-header bg-success text-white">Quick Links</h5>
                        <div class="card-body">
                            <ul class="list-unstyled list-recent-link">
                                <li>
                                    <a href="">Search Articles</a>
                                </li>
                                <li>
                                    <a href="">Search by Subject Area</a>
                                </li>
                                <li>
                                    <a href="">Submit your articles</a>
                                </li>
                                <li>
                                    <a href="">Articles Processing Charge</a>
                                </li>
                                <li>
                                    <a href="">Recently Published Articles</a>
                                </li>
                                <li>
                                    <a href="">Recent e-Presentations</a>
                                </li>
                                <li>
                                    <a href="">Recenttly Downloaded Articles</a>
                                </li>
                                <li>
                                    <a href="">Author Testimonial</a>
                                </li>
                                <li>
                                    <a href="">Submit Your Feedback</a>
                                </li>
                                <li>
                                    <a href="">We in Media</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="indexing card shadow-md border-light mb-2">
                        <h5 class="card-header bg-success text-white">Indexing</h5>
                        <div class="card-body">
                            <img src="https://www.ijsr.net/images/CrossRef.jpg" alt="" class="w-100 mb-2 img-thumbnail">
                            <img src="https://www.ijsr.net/images/gscholar.png" alt="" class="w-100 img-thumbnail mb-2">
                            <img src="https://www.ijsr.net/images/semantic.jpg" alt="" class="w-100 img-thumbnail">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- footer start -->
        @include('includes.footer')
        <!-- footer end -->

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>

        <!-- custom js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        @yield('js')
        @livewireScripts
    </body>
</html>
