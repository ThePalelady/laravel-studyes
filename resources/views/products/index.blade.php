@extends("includes.base")

@section('title', 'Products')

@section('content')
<p> Produtos Funcionando</p>

<a  href= "{{ route('products.add') }}">Adicionar produto</a>


@endsection
