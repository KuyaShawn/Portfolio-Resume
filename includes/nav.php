<?php
// This is the HTML for website navigation. 
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="{{ @BASE }}" class="navbar-brand btn-lg">Eashune Abenojar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <section class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark btn-lg" href="{{ @BASE }}">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark btn-lg" href="">Place Holder</a>
            </li>
        </ul>
    </section>
</nav>