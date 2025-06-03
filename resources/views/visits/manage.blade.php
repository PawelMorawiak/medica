<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarządzanie wizytami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Lista wszystkich wizyt</h2>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Specjalizacja</th>
                <th>Lekarz</th>
                <th>Data</th>
                <th>Lokalizacja</th>
                <th>Dostępność</th>
                <th>Akcja</th>
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
                    @if($visit->avaibaility !== 'zajęta')
                    <form action="{{ route('visits.occupy', $visit->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-warning btn-sm">Zajmij</button>
                    </form>
                    @else
                        <span class="text-danger">Zajęta</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
