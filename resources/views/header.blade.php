<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"></html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Medica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<br>

<style>
  html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
  }

  main {
    flex: 1;
  }
</style>

<header class="bg-dark text-white py-3 shadow-sm">



<div class="container d-flex justify-content-between align-items-center flex-wrap">
    <h1 class="h4 m-0">{{ __('messages.user_panel') }}</h1>
    <nav class="d-flex gap-3">
        <a href="{{ url('main-site') }}" class="text-white text-decoration-none">{{ __('messages.main_site') }}</a>
        <a href="{{ url('see-profile') }}" class="text-white text-decoration-none">{{ __('messages.see_profile') }}</a>
        <a href="{{ url('appointed-visits') }}" class="text-white text-decoration-none">{{ __('messages.appointed_visits') }}</a>
        <a href="{{ url('appoint-new-visit') }}" class="text-white text-decoration-none">{{ __('messages.appoint_new_visit') }}</a>
        <a href="{{ url('seek-contact') }}" class="text-white text-decoration-none">{{ __('messages.seek_contact') }}</a>
    
       <form action="{{ route('set.locale') }}" method="POST">
        @csrf
        <label for="lang" class="visually-hidden">Wybierz język</label>
        <select id="lang" name="locale" title="Wybierz język" onchange="this.form.submit()" class="form-select">
        <option value="pl" {{ app()->getLocale() == 'pl' ? 'selected' : '' }}>🇵🇱 Polski</option>
        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🇬🇧 English</option>

        </select>
        </form>
    
    
    </nav>
</div>
</header>

</br>
