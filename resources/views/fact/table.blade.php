<a href="{{ route("fact.create") }}" class="btn btn-danger">CREATE</a>

<table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TITRE</th>
        <th scope="col">CHIFFRE</th>
        <th scope="col">TEXTE</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    @foreach ($fact as $e )
    <tbody>
      <tr>
        
        <td>{{ $e->id }}</td>
        <td>{{ $e->titre }}</td>
        <td>{{ $e->chiffre }}</td>
        <td>{{ $e->texte }}</td>
        <td class="d-flex">
          <a href="/admin/fact/{{ $e->id }}/edit" class="btn btn-success">EDIT</a>
          <form action="/admin/fact/{{ $e->id }}" method="POST">
            @csrf
            @method("delete")
            <button class="btn btn-danger" type="submit">DELETE</button>
          
          </form>
        </td>
      </tr>
      
    </tbody>
        
    @endforeach
  </table>
