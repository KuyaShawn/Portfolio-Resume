<?php
// This is the HTML for website navigation. 
?>
<nav class="navbar navbar-expand-lg navbar-light container">
    <a class="navbar-brand text-light btn-lg fs-4 font-weight-bold">Welcome to my page!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <section class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light btn-lg fs-4 font-weight-bold" href="{{ @BASE }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light btn-lg fs-4 font-weight-bold" href="#abt_section">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light btn-lg fs-4 font-weight-bold" href="#timeLine_section">Timeline</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light btn-lg fs-4 font-weight-bold" href="#project_section">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light btn-lg fs-4 font-weight-bold" href="{{ @BASE }}">Extras</a>
            </li>
        </ul>
    </section>
</nav>
