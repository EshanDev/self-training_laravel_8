<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to self-training.in.th</title>
    <link rel="stylesheet" href="{{  mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/landing.css') }}">

    <style>
        html, body{
            box-sizing: border-box;
        }
        *, *::before, *::after {
            box-sizing: border-box
        }

    </style>
</head>
<body id="landing">
    <div class="ui wrapper">
        <header>
            <nav class="navbar navbar-expand-sm bg-light navbar-light shadow-sm">
                <div class="container">
                    <a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name') }}</a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#abut" class="nav-link">About</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto only-sm">
                        <button class="btn btn-secondary">toggle menu</button>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="grid-container">
                <div class="content">content</div>
                <div class="footer">footer</div>
            </div>
        </main>

    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
