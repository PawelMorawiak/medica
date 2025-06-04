<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medica</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            padding: 0 20px 40px 20px;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 60px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            flex-wrap: wrap;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-container img {
            height: 60px;
        }

        .logo-container span {
            font-size: 20px;
            font-weight: 600;
            color: #000000;
        }

        nav {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        nav a, nav form select {
            text-decoration: none;
            margin-left: 20px;
            font-size: 20px;
            font-weight: 500;
            color: #000000;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #59878C;
        }

        nav form {
            margin-left: 30px;
        }

        select {
            border: 1px solid #ccc;
            padding: 5px 10px;
            font-size: 18px;
            font-family: 'Montserrat', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #f1f3f5;
            font-weight: 600;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .table-actions form {
            display: inline;
        }
    </style>
</head>

<body>

<header>
    <div class="logo-container">
        <a href="{{ url('/') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <span>Medica</span>
        </a>
    </div>

    <nav>
        <a href="{{ url('main-site') }}">{{ __('messages.main_site') }}</a>
        <a href="{{ url('see-profile') }}">{{ __('messages.see_profile') }}</a>
        <a href="{{ url('appointed-visits') }}">{{ __('messages.appointed_visits') }}</a>
        <a href="{{ url('manage-visits') }}">{{ __('messages.appoint_new_visit') }}</a>
        <a href="{{ url('seek-contact') }}">{{ __('messages.seek_contact') }}</a>

        <form action="{{ route('set.locale') }}" method="POST">
            @csrf
            <label for="lang" class="visually-hidden">Wybierz język</label>
            <select id="lang" name="locale" onchange="this.form.submit()">
                <option value="pl" {{ app()->getLocale() == 'pl' ? 'selected' : '' }}>🇵🇱 Polski</option>
                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🇬🇧 English</option>
            </select>
        </form>
    </nav>
</header>

<h2 style="margin-top: 40px;">Lista wszystkich wizyt</h2>

@if(session('success'))
    <div style="margin-top: 20px; padding: 10px 15px; background-color: #d4edda; color: #155724; border-left: 5px solid #28a745;">
        {{ session('success') }}
    </div>
@endif

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
                <td class="table-actions">
                    <a href="{{ route('visits.edit', $visit->id) }}" class="btn btn-primary btn-sm">Edytuj</a>

                    <form action="{{ route('visits.destroy', $visit->id) }}" method="POST" onsubmit="return confirm('Na pewno usunąć?')" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>


<?--//naglowek plik header.blade.php --?>
<?--//naglowek plik header.blade.php --?>
@include('footer')