<h3>Editar Cliente</h3>
<!-- para editar deve ser put ou patch como html nao pode fazer isso se usa o @ method() é do laravel -->
<form action="{{ route('clientes.update', $client['id'])}}" method="POST">
    @csrf <!-- obrigatorio quando nao é GET -->
    @method('PUT') <!-- PUT atualiza o cliente todo PATCH so alguns campos -->
    <input type="text" name="name" value="{{ $client['name'] }}">
    <input type="submit" value="Salvar">
</form>
<a href="{{ route('clientes.index') }}">Voltar</a>