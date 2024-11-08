<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('iPortfolio/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('iPortfolio/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('iPortfolio/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('iPortfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('iPortfolio/assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('iPortfolio/assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('iPortfolio/assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('iPortfolio/assets/css/main.css') }}">
</head>

<body class="index-page">
    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>
        <div class="profile-img">
            <img src="{{ asset('iPortfolio/assets/img/my-profile-img.jpg') }}" class="img-fluid rounded-circle">
        </div>
        <a href="{{ route('landing-page') }}" class="logo d-flex align-items-center justify-content-center">
            {{-- <img src="{{ asset('iPortfolio/assets/img/logo.png') }}" alt=""> --}}
            <h1 class="sitename">Mohd. Farid Hasymi</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://github.com/neveleneve" target="__blank" class="github">
                <i class="bi bi-github"></i>
            </a>
            <a href="https://linkedin.com/in/frdhsym/" target="__blank" class="linkedin">
                <i class="bi bi-linkedin"></i>
            </a>
            <a href="mailto:frdhsym@gmail.com" target="__blank" class="google-plus">
                <i class="bi bi-google"></i>
            </a>
            <a href="https://facebook.com/pandumfh" target="__blank" class="facebook">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="https://instagram.com/frdhsym" target="__blank" class="instagram">
                <i class="bi bi-instagram"></i>
            </a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('iPortfolio/assets/img/hero-bg.jpg') }}" data-aos="fade-in" class="">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>
                    <span class="d-none d-xl-inline">
                        Mohammad
                    </span>
                    <span class="d-inline d-xl-none">
                        Mohd.
                    </span>
                    Farid Hasymi
                </h2>
                <p>I'm
                    <span class="typed"
                        data-typed-items="Programmer, Web Developer, Backend Developer, Freelancer">Programmer</span>
                    <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
                    <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
                </p>
            </div>
        </section>
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>
                    As a freelance web developer, I have been creating desktop, web, and internet of things applications
                    based on client requests since 2019. I have expertise in Laravel, a popular PHP framework that
                    enables fast and secure web development. I have used Laravel to build various projects, such as an
                    online store, a blog platform, and a smart home system.
                </p>
                <p>
                    I am also pursuing a Bachelor's degree in Information Technology from Sekokah Tinggi Teknologi
                    Indonesia Tanjungpinang, where I have learned about data modeling and decision support system
                    methods. I have applied these methods to enhance the functionality and performance of my
                    applications, such as by creating data-driven dashboards, optimizing queries, and implementing
                    artificial intelligence features. I am a non-stop learner who is always eager to explore new
                    technologies and challenges.
                </p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('iPortfolio/assets/img/my-profile-img.jpg') }}"
                            class="img-fluid img-thumbnail rounded-circle" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Web Developer &amp; Backend Developer.</h2>
                        <p class="fst-italic py-3">
                            Passionate about building scalable web applications and creating efficient backend
                            solutions. With a strong foundation in web technologies, I enjoy solving problems and
                            delivering high-quality code.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Birthday:</strong>
                                        <span>17 August 1997</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Website:</strong>
                                        <span>frdhsym.space</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Phone:</strong>
                                        <span>+62 8228 378 4 873</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>City:</strong>
                                        <span>Tanjungpinang, Indonesia</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Age:</strong>
                                        <span>
                                            {{ \App\Helpers\AgeHelper::ageCalculation('1997-08-17') }}
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Degree:</strong>
                                        <span>Bachelor</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Email:</strong>
                                        <span>frdhsym@gmail.com</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Freelance:</strong>
                                        <span>
                                            @if ($gitdata['hireable'])
                                                <small class="badge text-bg-success">
                                                    Available
                                                </small>
                                            @else
                                                <small class="badge text-bg-danger">
                                                    Not Available
                                                </small>
                                            @endif
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3">
                            With a track record of delivering clean, maintainable code, I specialize in backend
                            development and have experience in frontend technologies. Always eager to learn and grow,
                            I’m excited to bring my skills to new projects and collaborate with forward-thinking teams.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="stats" class="stats section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Github Stats</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <img src="{{ $gitdata['avatar_url'] }}" class="img-fluid img-thumbnail rounded-circle"
                            alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2 class="fw-bold text-decoration-underline">
                            {{ strtoupper($gitdata['username']) }}
                            <a class="fw-bold h6" href="https://github.com/{{ $gitdata['username'] }}">
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>
                        </h2>
                        @if ($gitdata['hireable'])
                            <small class="badge text-bg-success">
                                Hireable
                            </small>
                        @else
                            <small class="badge text-bg-danger">
                                Not Hireable
                            </small>
                        @endif
                        <p class="fst-italic py-3">
                            {{ $gitdata['bio'] }}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="stats-item">
                                    <i class="bi bi-person-check"></i>
                                    <span data-purecounter-start="0"
                                        data-purecounter-end="{{ $gitdata['following'] }}"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Following</strong></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats-item">
                                    <i class="bi bi-person-plus"></i>
                                    <span data-purecounter-start="0"
                                        data-purecounter-end="{{ $gitdata['followers'] }}"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Followers</strong></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats-item">
                                    <i class="bi bi-file-text"></i>
                                    <span data-purecounter-start="0"
                                        data-purecounter-end="{{ $gitdata['public_repos'] }}"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Public Repositories</strong></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats-item">
                                    <i class="bi bi-file-lock"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{ count($privaterepo) }}"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Private Repositories</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class="skills section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row skills-content skills-animation">
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill"><span>HTML</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill"><span>CSS</span> <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill"><span>JavaScript</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill"><span>MySQL</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    <script src="{{ asset('iPortfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('iPortfolio/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('iPortfolio/assets/js/main.js') }}"></script>
</body>

</html>
