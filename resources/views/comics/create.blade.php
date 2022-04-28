<form action="{{ route('comics.store') }}" method="post">
    @csrf
    {{-- campi del  comics  --}}
    <input type="text" name="title" placeholder="titolo del comic">
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="SALVA">
</form>