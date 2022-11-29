<h1>Detalhes do post</h1>

<ul>
    <li><strong>Título: </strong>{{$post -> title}}</li>
    <li><strong>Conteúdo: </strong>{{$post -> content}}</li>
</ul>

<form action="{{route('posts.destroy', $post->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value ="DELETE">
    <button type="submit">Deletar o Post: {{$post -> title}}</button>
</form>

<form action="{{route('posts.edit', $post->id)}}" method="post">
    <input type="hidden" name="_method" value ="GET">
    <button>Editar o Post: {{$post -> title}}</button> 
</form>
