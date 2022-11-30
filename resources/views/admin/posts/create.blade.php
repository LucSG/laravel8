@extends('admin.layouts.app')

@section('title', 'Criar Novo Post')
@section('content')

<h1>Cadastra Novo Post</h1>

<form action="{{ route('posts.store')}}" method="post">
    @csrf
    @include('admin.posts._partials.form')
</form>
    
@endsection