<h3>Clientes</h3>
<a href="{{route('clientes.create')}}">Novo Cliente</a>
<ol>
    @foreach ($clientes as $t)
    <li>
    {{ $t['nome'] }} |
        <a href="{{route('clientes.edit', $t ['id'])}}">Editar</a> |
        <a href="{{route('clientes.show', $t ['id'])}}">Info</a>
    </li>
    @endforeach
</ol>