@extends('layout.femaster')
@section('content')

<p class="text-center">PRENDA - {{$gift->id}}#{{$gift->name}} </p>

<p>Id: {{$gift->id}}</p>
<p>Name: {{$gift->name}}</p>
<p>Value Preview: {{$gift->valuePreview}}</p>
<p>value Spend: {{$gift->valueSpend}}</p>
<p>userName: {{$gift->userName}}</p>
<p hidden>{{ $valor = $gift->valuePreview - $gift->valueSpend }} </p>
<p>{{
    $gift->valueSpend < $gift->valuePreview ? "Você poupou $valor" : "Você não poupou $valor"
}}</p>


@endsection

