<h2>Edytuj wizytę</h2>
<form method="POST" action="{{ route('visits.update', $visit->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="specialisation" value="{{ $visit->specialisation }}" required>
    <input type="text" name="doctor" value="{{ $visit->doctor }}" required>
    <input type="text" name="avaliable_date" value="{{ $visit->avaliable_date }}" required>
    <input type="text" name="location" value="{{ $visit->location }}" required>
    <input type="text" name="avaibaility" value="{{ $visit->avaibaility }}" required>

    <button type="submit">Zapisz zmiany</button>
</form>