@include('header')

<div class="container my-5">
    <h2 class="text-center mb-4">Umów nową wizytę</h2>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="p-4 border rounded shadow bg-white">

                <form action="{{ route('visits.store') }}" method="POST" class="d-flex flex-column gap-3">
                    @csrf

                    <input type="text" name="specialisation" class="form-control" placeholder="Specjalizacja" required>
                    <input type="text" name="doctor" class="form-control" placeholder="Lekarz" required>
                    <input type="text" name="avaliable_date" class="form-control" placeholder="Data dostępności" required>
                    <input type="text" name="location" class="form-control" placeholder="Lokalizacja" required>
                    <input type="text" name="avaibaility" class="form-control" placeholder="Dostępność (np. wolna/zajęta)" required>

                    {{-- Jeśli user_id jest pobierany z auth, usuń to pole --}}
                    <input type="text" name="user" class="form-control" placeholder="Użytkownik">

                    <button type="submit" class="btn btn-success">Dodaj wizytę</button>
                </form>

            </div>
        </div>
    </div>
</div>

@include('footer')