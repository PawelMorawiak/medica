<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('header')

<div style="max-width: 800px; margin: 40px auto; padding: 30px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
    <h2 style="margin-bottom: 20px;">Twój profil</h2>

    <p><strong>ID użytkownika:</strong> {{ auth()->user()->id }}</p>
    <p><strong>Imię i nazwisko:</strong> {{ auth()->user()->name }}</p>
    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
    <p><strong>Data weryfikacji email:</strong> {{ auth()->user()->email_verified_at ?? 'Niezweryfikowany' }}</p>
    <p><strong>Rola:</strong> {{ auth()->user()->role ?? 'Brak roli' }}</p>
    <p><strong>Utworzono:</strong> {{ auth()->user()->created_at }}</p>
    <p><strong>Ostatnia aktualizacja:</strong> {{ auth()->user()->updated_at }}</p>

    <hr>

    <h4>Ustawienia konta</h4>
    <ul style="line-height: 1.8;">
        <li><a href="#">Zmień hasło</a></li>
        <li><a href="#">Zmień adres e-mail</a></li>
        <li><a href="#">Usuń konto</a></li>
    </ul>
</div>

@include('footer')