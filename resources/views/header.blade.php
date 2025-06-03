<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medica</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 60px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            flex-wrap: wrap;
        }
        

        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-container img {
            height: 60px;
        }

        .logo-container span {
            font-size: 20px;
            font-weight: 600;
            color: #000000;
        }

        nav {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        nav a, nav form select {
            text-decoration: none;
            margin-left: 20px;
            font-size: 20px;
            font-weight: 500;
            color: #000000;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #59878C;
        }

        nav form {
            margin-left: 30px;
        }

        select {
            border: 1px solid #ccc;
            padding: 5px 10px;
            font-size: 18px;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg-light">
<header>
    <div class="logo-container">
        <a href="{{ url('/') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <span>Medica</span>
        </a>
    </div>

    <nav>
        <a href="{{ url('main-site') }}">{{ __('messages.main_site') }}</a>
        <a href="{{ url('see-profile') }}">{{ __('messages.see_profile') }}</a>
        <a href="{{ url('appointed-visits') }}">{{ __('messages.appointed_visits') }}</a>
        <a href="{{ url('manage-visits') }}">{{ __('messages.appoint_new_visit') }}</a>
        <a href="{{ url('seek-contact') }}">{{ __('messages.seek_contact') }}</a>

        <form action="{{ route('set.locale') }}" method="POST">
            @csrf
            <label for="lang" class="visually-hidden">Wybierz język</label>
            <select id="lang" name="locale" onchange="this.form.submit()">
                <option value="pl" {{ app()->getLocale() == 'pl' ? 'selected' : '' }}>🇵🇱 Polski</option>
                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🇬🇧 English</option>
            </select>
        </form>
    </nav>
</header>
