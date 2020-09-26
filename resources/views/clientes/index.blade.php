<h3>Clientes: </h3>

<a href="{{ route('clientes.create') }}">NOVO</a>
<ul>
    @foreach ($clientes as $c)
        <li>
            {{ $c['id'] }} | {{ $c['name'] }} |
            <a href="{{ route('clientes.show', $c['id']) }}">Info</a> |
            <a href="{{ route('clientes.edit', $c['id']) }}">Editar</a> |
            <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST"> 
                <!--nao pode ser href pq esse é GET e vai ser DELETE-->
                @csrf
                @method('DELETE')
                <input type="submit" value="Excluir">
            </form>
        </li>  
    @endforeach
</ul>