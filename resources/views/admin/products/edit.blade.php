@extends('layouts.app')
@section('content')

<h1>Atualizar Produto</h1>

<form action="{{route('admin.products.store')}}" method="post">
    <input type="hidden" name="_token" value={{csrf_token()}}>

    <div class="form-group">
        <label>Nome Produto</label>
        <input type="text" name="name" class="form-control" value="{{$products->name}}">
    </div>
    <div class="form-group">
        <label>Descrição Produto</label>
        <input type="text" name="description" class="form-control" value="{{$products->description}}>
    </div>

    <div class="form-group">
        <label>Conteúdo</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control" value="{{$products->body}}"></textarea>
    </div>


    <div class="form-group">
        <label>Preço</label>
    <input type="text" name="price" class="form-control" value="{{$products->price}}">
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value="{{$products->slug}}>
    </div>

    <div class="form-group ">
        <button type="submit" class="btn btn-lg btn-success">Atualizar Produto</button>
    </div>

</form>
@endsection