
<h1>Cadastra Novo Post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

@endif


<form action="{{ route('posts.store')}}" method="post">
    @csrf
    @include('admin.posts._partials.form')
</form>