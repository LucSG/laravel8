@extends('admin.layouts.app')

@section('title', "Editar Post {$post->title}")

@section('content')
    
<h1>Editar o Post <strong>{{ $post->title}}</strong></h1>




<form action="{{ route('posts.update', $post->id)}}" method="post">

    @method('put')
    @include('admin.posts._partials.form')
</form>

<form action="{{route('posts.destroy', $post->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value ="DELETE">
    <button type="submit">Deletar o Post: {{$post -> title}}</button>
</form>
@endsection