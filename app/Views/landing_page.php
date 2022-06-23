<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cover Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/icon/fontawesome-pro-5.15.3-web/css/all.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>/css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <!-- <h3 class="float-md-start mb-0">Cover</h3> -->
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#" id="about-me-tab" data-bs-toggle="tab" data-bs-target="#about-me" type="button" role="tab" aria-controls="about-me" aria-selected="true">About Me</a>
                    <a class="nav-link" href="#" class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">Projects</a>
                    <a class="nav-link" href="#" class="nav-link" id="skill-tab" data-bs-toggle="tab" data-bs-target="#skill" type="button" role="tab" aria-controls="skill" aria-selected="false">Skills</a>
                    <a class="nav-link" href="#" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <div class="tab-pane fade show active" id="about-me" role="tabpanel" aria-labelledby="about-me-tab">
                <h1>Halo (ʘ‿ʘ)╯</h1>
                <div class="col col-md-6 mx-auto my-3">
                    <img src="<?= base_url() ?>/assets/img/ava-crop.webp" alt="" class="rounded-circle w-50">
                </div>
                <p class="lead">Aku Muhammad Adif Fikri, mahasiswa Informatika di Universitas Singaperbangsa Karawang angkatan tahun 2019.</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
                </p>
            </div>

            <div class="tab-pane d-none fade" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                <h1>LALALLA</h1>
                <i class="fab fa-linkedin fa-fw"></i>
                <i class="fas fa-at fa-fw"></i>
                <p class="lead">Cover is a one-page template for building simple and beautiful about-me pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
                </p>
            </div>
        </main>


        <footer class="mt-auto text-white-50">
            <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script href="<?= base_url() ?>/icon/fontawesome-pro-5.15.3-web/css/all.min.css"></script>

    <script>
        $(document).ready(function() {

            $("#about-me-tab").on('click', function() {
                $("#projects").addClass("d-none");
                $("#about-me").removeClass("d-none");
            })

            $("#projects-tab").on('click', function() {
                $("#projects").removeClass("d-none");
                $("#about-me").addClass("d-none");
            })
        });
    </script>
</body>

</html>