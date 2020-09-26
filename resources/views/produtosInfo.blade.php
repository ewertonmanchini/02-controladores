<h1>[ControllerParams] {{ $title }}</h1>
<ol>
    @foreach ($produtos as $p)
        <li>
            {{ $p['name'] }} <a href="{{ route('produtosInfo',$loop->index) }}">[detalhes]</a>
            <!-- $loop variavel do blade  apontando o index/indice do for -->
            <!-- o @ no blade e so para noa precisar usar o <?php  ?> -->
            @if (isset($selecionado) && $selecionado['id'] == $p['id'])
             <<<<<<<<<<<<<<<<<<
            @endif
        </li>
    @endforeach
</ol>

@if (isset($selecionado))
<hr>

<h2>Produtos Detalhes</h2>

<h3>ID: {{ $selecionado['id'] }}</h3>
<h3>Nome: {{ $selecionado['name'] }}</h3>
<h3>Detalhes: {{ $selecionado['description'] }}</h3>
    
@endif