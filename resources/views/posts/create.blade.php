<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <input type="text" name="title" placeholder="Tytuł">
    <textarea name="body" placeholder="Treść"></textarea>
    <button type="submit">Zapisz post</button>
</form>