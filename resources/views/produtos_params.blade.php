<h1>[ViewParams] {{ $title }}</h1>
<ul>
    @foreach ($produtos as $p)
        <li>{{ $p['id'] }} - {{ $p['name'] }}</li>
    @endforeach
</ul>