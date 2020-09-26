<h3>Clientes: </h3>

<a href="{{ route('clientes.create') }}">NOVO</a>
<ul>
    @foreach ($clientes as $c)
        <li>
            {{ $c['id'] }} | {{ $c['name'] }}
        </li>  
    @endforeach
</ul>