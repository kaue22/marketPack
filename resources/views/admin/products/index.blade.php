@extends('layouts.app')
@section('content')

<a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome </th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($products as $p)
        <tr>
            <th>{{$p->id}}</th>
            <th>{{$p->name}}</th>
            <td>
                <a href="{{route('admin.products.edit',['product'=>$p->id])}}" class="btn btn-sm btn-primary">EDITAR</a>
                <a href="{{route('admin.products.destroy',['product'=>$p->id])}}" class="btn btn-sm btn-danger">REMOVER</a>
            </td>

        </tr>
        @endforeach
    </tbody>

</table>

{{$products->links()}}

@endsection