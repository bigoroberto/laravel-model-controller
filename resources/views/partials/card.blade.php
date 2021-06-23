@section('content')
    <ul >
        @foreach ($movies as $movie)
            <li><h1>{{ $movie['title'] }}</h1></li>
            <li><h2>{{ $movie['original_title'] }}</h2></li>
            <li><span>{{ $movie['nationality'] }}</span></li>
            <li><span>{{ $movie['date'] }}</span></li>
            <li class="mb-5"><span>{{ $movie['vote'] }}</span></li>
        @endforeach
    </ul>
@endsection
