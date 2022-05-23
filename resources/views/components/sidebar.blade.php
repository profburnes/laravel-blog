<div>
    <ul>
       @foreach ($categorias as $categoria)
            <li><a href="categorias/{{$categoria->id}}">{{$categoria->categoria}}</a></li>
       @endforeach
    </ul>
</div>