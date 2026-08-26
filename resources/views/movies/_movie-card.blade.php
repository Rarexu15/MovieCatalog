<li>
    <a href="{{ route('movies.show', $movie['id']) }}">
        {{ $movie['title'] }} ({{ $movie['year'] }})
    </a>
</li>