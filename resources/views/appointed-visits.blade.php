
<?--//naglowek plik header.blade.php --?>
@include('header')
<?--//naglowek plik header.blade.php --?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Specjalizacja</th>
            <th>Lekarz</th>
            <th>Data</th>
            <th>Lokalizacja</th>
            <th>Dostępność</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($visits as $visit)
            <tr>
                <td>{{ $visit->id }}</td>
                <td>{{ $visit->specialisation }}</td>
                <td>{{ $visit->doctor }}</td>
                <td>{{ $visit->avaliable_date }}</td>
                <td>{{ $visit->location }}</td>
                <td>{{ $visit->avaibaility }}</td>
                <td>
                    <a href="{{ route('visits.edit', $visit->id) }}" class="btn btn-sm btn-primary">Edytuj</a>

                    <form action="{{ route('visits.destroy', $visit->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Na pewno usunąć?')">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<?--//naglowek plik header.blade.php --?>
@include('footer')
<?--//naglowek plik header.blade.php --?>

