<h3>Novo Cliente</h3>

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="submit" value="Salvar">
</form>
<a href="{{ route('clientes.index') }}">Voltar</a>