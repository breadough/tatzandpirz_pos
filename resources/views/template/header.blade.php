<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="custom-font">
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="/">Dashboard</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/records">Records</a></li>
                <li class="nav-item"><a class="nav-link" href="/artists">Artist</a></li>
                <li class="nav-item"><a class="nav-link" href="">Settings</a></li>
                <li class="nav-item"><a class="nav-link" href="">Log out</a></li>
            </ul>
        </div>
    </div>
    </nav>