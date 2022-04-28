<div>
    <ul>
        @foreach($comics as $comic)
        <li>
            {{$comics->title}}
            {{-- ecc  --}}
        </li>
        @endforeach
    </ul>
</div>