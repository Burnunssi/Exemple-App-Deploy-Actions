@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id != null)
        <p>Exibibindo produto id: {{ $id }}</p>
    @endif

@endsection