
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>OpenClassify TO-DO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        html,
        body {
            overflow-x: hidden; /* Prevent scroll on narrow devices */
        }

        body {
            padding-top: 56px;
        }

        @media (max-width: 767.98px) {
            .offcanvas-collapse {
                position: fixed;
                top: 56px; /* Height of navbar */
                bottom: 0;
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem;
                overflow-y: auto;
                background-color: var(--gray-dark);
                transition: -webkit-transform .3s ease-in-out;
                transition: transform .3s ease-in-out;
                transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            .offcanvas-collapse.open {
                -webkit-transform: translateX(-1rem);
                transform: translateX(-1rem); /* Account for horizontal padding on navbar */
            }
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            color: rgba(255, 255, 255, .75);
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .nav-underline .nav-link {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: .875rem;
            color: var(--secondary);
        }

        .nav-underline .nav-link:hover {
            color: var(--blue);
        }

        .nav-underline .active {
            font-weight: 500;
            color: var(--gray-dark);
        }

        .text-white-50 { color: rgba(255, 255, 255, .5); }

        .bg-purple { background-color: var(--purple); }

        .border-bottom { border-bottom: 1px solid #e5e5e5; }

        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

        .lh-100 { line-height: 1; }
        .lh-125 { line-height: 1.25; }
        .lh-150 { line-height: 1.5; }
    </style>
</head>

<body class="bg-light">
@include('/layouts.partials.navbar')

<main role="main" class="container">
    @yield('content')
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>
