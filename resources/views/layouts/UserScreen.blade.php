<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- end bootstrap -->
    <!-- Google Fonts CDN Link -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="template/assets/css/TampilanUtama/Home.css">
    <title>Moelia | @yield('title')</title>
</head>

<body>
    <div class="container">
        <Header>
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <a href="/login">
                                <button class="btn btn-primary" type="submit">Login <i class="fa-solid fa-right-to-bracket"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navbar -->
        </Header>

        <!-- konten -->
        <section class="isi-konten"> @yield('konten')</section>
        <!-- end konten -->

        <!-- footer -->
        <div class="body-footer">
            <footer>
                <div class="container">
                    <div class="wrapper">
                        <div class="footer-widget">
                            <a href="#">

                            </a>
                            <h6>Social Media Kami</h6>
                            <ul class="socials">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <ul class="links">
                                <h6>Menu</h6>
                                <li><a href="#">home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">service</a></li>
                                <li><a href="#">testimonial</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <ul class="links">
                                <h6>Layanan</h6>
                                <li><a href="#">web design</a></li>
                                <li><a href="#">web development</a></li>
                                <li><a href="#">seo optimization</a></li>
                                <li><a href="#">blog writing</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <h6>Kontak Kami</h6>
                            <ul class="links fa-ul">
                                <li><i class="fa-li fa fa-duotone fa-phone"></i>0857345687</li>
                                <li><i class="fa-li fa fa-solid fa-envelope"></i>Contoh@gmail.com</li>
                                <li><i class="fa-li fa fa-brands fa-whatsapp"></i>0857345687</li>
                            </ul>
                        </div>
                    </div>
                    <div class="copyright-wrapper">
                        <p>
                            Copyright © 2023 &nbsp <a href="https://www.instagram.com/moeliadesign/" target="_blank" class="ml-1">Moelia Design</a> <span> . All rights Reserved</span>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end footer -->

    </div>
    <!-- bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end bootstrap -->
</body>

</html>