<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posts</title>
</head>
<body>

<div style=" border: 3px solid;">

<h2>Rejestracja</h2>
<form action="/register" methood="GETS">
@csrf 
<input type="text" placeholder="name">
<input type="text" placeholder="email">
<input type="password" placeholder="password">
<button>Register</button>

</form>

</div>



</body>
</html>