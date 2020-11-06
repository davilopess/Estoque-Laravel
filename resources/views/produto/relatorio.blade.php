

<h1>Listagem de produtos</h1>
    <table class="table table-striped table-hover">
        @foreach ($produtos as $p)
        <tr  class="{{$p->quantidade<=1 ? 'danger' : '' }}">
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
        </tr>

        @endforeach
    </table>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
