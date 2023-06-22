<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Refugee</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <x-frontend.master>

            <!-- ======= Header ======= -->
            <!-- End Header -->

            <!-- ======= Hero Section ======= -->
            <section id="hero">
                <div class="hero-container" data-aos="fade-up">
                    <h1>Welcome to Refugee Managment System</h1>
                    <h2>A refugee is a person who has been forced to leave their home country due to persecution, war,
                        or violence, and who has sought refuge in another country. </h2>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </section><!-- End Hero -->

            <main id="main">
                <!-- ======= About Section ======= -->
                <section id="about" class="about">
                    <div class="container">

                        <div class="row justify-content-end">
                            <div class="col-lg-11">
                                <div class="row justify-content-end">

                                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">

                                    </div>

                                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">

                                    </div>

                                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">

                                    </div>

                                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                        <div class="count-box pb-5 pt-0 pt-lg-5">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6 video-box align-self-baseline position-relative">
                                <img src="{{ asset('../../ui/frontend/img/Rohingya-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q"
                                    class="glightbox play-btn mb-4"></a>
                            </div>

                            <div class="col-lg-6 pt-3 pt-lg-0 content">
                                <h3>A refugee is a person who has been forced to leave their home country due to
                                    persecution, war, or violence, and who has sought refuge in another country. </h3>
                                <p class="fst-italic">
                                    Refugees are individuals who are unable or unwilling to return to their home country
                                    due to a well-founded fear of persecution based on their race, religion,
                                    nationality, political opinion, or membership in a particular social group.
                                </p>
                                <ul>
                                    <li><i class="bx bx-check-double"></i>Refugees often flee their countries with few
                                        possessions, facing significant challenges. </li>
                                    <li><i class="bx bx-check-double"></i>Refugees often flee their countries with few
                                        possessions, facing significant challenges.</li>
                                    <li><i class="bx bx-check-double"></i>Refugees often flee their countries with few
                                        possessions, facing significant challenges.</li>
                                    <li><i class="bx bx-check-double"></i> Refugees often flee their countries with few
                                        possessions, facing significant challenges.</li>
                                </ul>
                                <p>
                                    Refugees often flee their countries with few possessions, facing significant
                                    challenges and uncertainties as they seek safety and security. They may be housed in
                                    refugee camps or other temporary shelters until they can be resettled in a new
                                    country or return home.
                                </p>
                            </div>

                        </div>

                    </div>
                </section><!-- End About Section -->

            </main><!-- End #main -->

            <!-- ======= Footer ======= -->
            <!-- End Footer -->
        </x-frontend.master>


    </div>
</body>

</html>
