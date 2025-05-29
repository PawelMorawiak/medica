<?--//naglowek plik header.blade.php --?>
@include('header')
<?--//naglowek plik header.blade.php --?>

umów nową wizytę

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


<?--//naglowek plik header.blade.php --?>
@include('footer')
<?--//naglowek plik header.blade.php --?>