<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($stores as $store)
        <tr>
            <th>{{$store->id}}</th>
            <th>{{$store->name}}</th>

        </tr>
        @endforeach
    </tbody>

</table>

{{$stores->links()}}