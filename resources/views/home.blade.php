<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"></html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel główny</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">



@auth
  @include('header')

  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="mb-0">Witaj, {{ auth()->user()->name }}</h2>
      <form action="/logout" method="GET">
        @csrf
        <button class="btn btn-outline-danger">Wyloguj</button>
      </form>
    </div>

    <div class="row g-4">
      <!-- Dodawanie postu -->
      <div class="col-md-6">
        <div class="p-4 border rounded shadow bg-white">
          <h4>{{ __('messages.add_post') }}</h4>
          <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <input type="text" name="title" class="form-control mb-2" placeholder="{{ __('messages.title') }}">
            <textarea name="body" class="form-control mb-3" rows="4" placeholder="{{ __('messages.body') }}"></textarea>
            <button type="submit" class="btn btn-primary">{{ __('messages.save_post') }}</button>
          </form>
        </div>
      </div>

      <!-- Dodawanie wizyty -->
      <div class="col-md-6">
        <div class="p-4 border rounded shadow bg-white">
          <h4>Dodaj wizytę</h4>
          <form action="{{ route('visits.store') }}" method="POST">
            @csrf
            <input type="text" name="specialisation" class="form-control mb-2" placeholder="Specjalizacja" required>
            <input type="text" name="doctor" class="form-control mb-2" placeholder="Lekarz" required>
            <input type="text" name="avaliable_date" class="form-control mb-2" placeholder="Data dostępności" required>
            <input type="text" name="location" class="form-control mb-2" placeholder="Lokalizacja" required>
            <input type="text" name="avaibaility" class="form-control mb-2" placeholder="Dostępność (np. wolna/zajęta)" required>
            {{-- Pole "user" możesz usunąć jeśli używasz auth()->id() --}}
            <input type="text" name="user" class="form-control mb-3" placeholder="Użytkownik">
            <button type="submit" class="btn btn-success">Dodaj wizytę</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('footer')

@else
  <div class="container py-5">
    <div class="row justify-content-center g-5">

      <!-- Logowanie -->
      <div class="col-md-5">
        <div class="p-4 border rounded shadow bg-white">
          <h4>Logowanie</h4>
          <form action="/login" method="GET">
            @csrf
            <input type="text" name="loginname" class="form-control mb-2" placeholder="Login">
            <input type="password" name="loginpassword" class="form-control mb-3" placeholder="Hasło">
            <button class="btn btn-primary">Zaloguj się</button>
          </form>
        </div>
      </div>

      <!-- Rejestracja -->
      <div class="col-md-5">
        <div class="p-4 border rounded shadow bg-white">
          <h4>Rejestracja</h4>
          <form action="/register" method="GET">
            @csrf
            <input type="text" name="name" class="form-control mb-2" placeholder="Imię">
            <input type="email" name="email" class="form-control mb-2" placeholder="Email">
            <input type="password" name="password" class="form-control mb-3" placeholder="Hasło">
            <button class="btn btn-success">Zarejestruj się</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endauth

</body>
</html>