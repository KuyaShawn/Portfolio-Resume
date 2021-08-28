<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eashune Abenojar</title>
    <meta name="description" content="Resume/Portfolio of important information of myself">
    <meta name="author" content="Eashune Abenojar">
    <link rel='icon' type='image/png' href='imgs/EashuneA_small.jpg'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/final.css?v=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>

</head>

<body>
<aside class="navBar">
    <?php
    // This puts the HTML for the navigation into the page.
    include "includes/nav.php";
    ?>
</aside>
<header>
    <aside class="position-absolute top-50 start-50 translate-middle">
        <picture>
            <source media="(min-width: 60em)" srcset="imgs/EashuneA_large.jpg"/>
            <source media="(min-width: 40em)" srcset="imgs/EashuneA_medium.jpg"/>
            <source media="(min-width: 20em)" srcset="imgs/EashuneA_small.jpg"/>
            <img class="mx-auto" src="imgs/EashuneA.jpg" alt="Photo of Eashune Abenojar">
        </picture>
        <h2 id="name" class="text-light">Eashune Abenojar</h2>
        <h2 class="text-light">Student & Developer</h2>

        <ul class="nav col-md-12 justify-content-center list-unstyled d-flex">
            <li class="ms-3"><a class="text-light" href="#"><i class="bi bi-github"></i></a></li>
            <li class="ms-3"><a class="text-light" href="#"><i class="bi bi-envelope-fill"></i></a></li>
            <li class="ms-3"><a class="text-light" href="#"><i class="bi bi-linkedin"></i></a></li>
        </ul>
    </aside>
</header>