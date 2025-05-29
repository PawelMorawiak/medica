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
<h2> Jesteś zalogowany </h2>

<form action="/logout" method="GET" >
  @csrf
  <button> Wyloguj </button>
</form>

<form action="/make_appointment" method="GET" >
  @csrf
  <button> UMÓW WIZYTĘ </button>
</form>


<?--// uzytkownik NIE zalogowany, wyswietlany ponizszy panel --?>
@else

<?--// REJESTRACJA --?>
<div style=" border: 3px solid;">

<h2>Rejestracja</h2>
<form action="/register" methood="GET">
@csrf 
<input type="text" name="name" placeholder="name">
<input type="text" name="email" placeholder="email">
<input type="password" name="password" placeholder="password">
<button>Register</button>
</form>
</div>

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


@endauth





</body>
</html>