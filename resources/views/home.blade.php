<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posts</title>
</head>
<body>




<?--// uzytkownik zalogowany, wyswietlany ponizszy panel --?>

@auth 
<?--//naglowek plik header.blade.php --?>
@include('header')
<?--//naglowek plik header.blade.php --?>


<h2> Jesteś zalogowany </h2>


<form action="/logout" method="GET" >
  @csrf
  <button> Wyloguj </button>
</form>

<div style=" border: 3px solid;">
<h2>dodawanie wizyty</h2>
<form action="/make-appointment" method="GET" >
  @csrf
<input type="text" name="add-doctor-for-appointment" placeholder="doctor">
<input type="text" name="add-location-for-appointment" placeholder="location">
<input type="text" name="add-time-for-appointment" placeholder="time">
  <button> dodaj wizytę </button>
</form>
</body>
</div>


<?--// dodawanie postu formularz --?>

<div style=" border: 3px solid;">
<h2>dodawanie postu</h2>
<form action="/create-post" methood="GET">
@csrf 
<input type="text" name="loginname" placeholder="name">
<textarea name="body" col="20" row="20" placeholder="treść postu"></textarea> 
<button>dodaj post</button>
</form>
</div>

<?--//naglowek plik header.blade.php --?>
@include('footer')
<?--//naglowek plik header.blade.php --?>

<?--// uzytkownik NIE zalogowany, wyswietlany NIE ZALOGOWANY KONIEC ZALOGOWANE USERA ponizszy panel --?>
@else




<?--// LOGOWANIE --?>

<div style=" border: 3px solid;">
<h2>Logowanie</h2>
<form action="/login" methood="GET">
@csrf 
<input type="text" name="loginname" placeholder="name">
<input type="password" name="loginpassword" placeholder="password">
<button>Zaloguj</button>
</form>
</div>






<?--// REJESTRACJA --?>
<div style=" border: 3px solid;">

<h2>Rejestracja</h2>
<form action="/register" methood="GET">
@csrf 
<input type="text" name="name" placeholder="name">
<input type="email" name="email" placeholder="email">
<input type="password" name="password" placeholder="password">
<button>Register</button>
</form>
</div>


@endauth

</body>
</html>