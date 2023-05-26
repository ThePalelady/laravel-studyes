@extends('include.base')

@section('title', 'Produts - Adicionar')


@section('content')

    <h2>Adicione seu produto</h2>

<form action="{{ route('produtos.addSave') }}" method="post">
    <input type="text" name="name" placeholder="Nome do Produto"/>
    <br>
    <input type="text" name="price" step="0.01" placeholder="Preço"/>
    <input type="number" name="quantity" placeholder="Quantidade" min="0"/>
    <hr width="30%" aling="left">
    <button class="submit" value="gravar">


</form>

@endsection
