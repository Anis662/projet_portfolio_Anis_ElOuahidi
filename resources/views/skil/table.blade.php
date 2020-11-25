
    <a href="{{ route("skil.create") }}" class="btn btn-danger">CREATE</a>

<table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">LANGUE</th>
        <th scope="col">POURCENTAGE</th>
        
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    @foreach ($skil as $e )
    <tbody>
      <tr>
        
        <td>{{ $e->id }}</td>
        <td>{{ $e->langue }}</td>
        <td>{{ $e->pourcentage }}</td>
        
        <td class="d-flex">
          <a href="/admin/skil/{{ $e->id }}/edit" class="btn btn-success">EDIT</a>
          <form action="/admin/skil/{{ $e->id }}" method="POST">
            @csrf
            @method("delete")
            <button class="btn btn-danger" type="submit">DELETE</button>
          
          </form>
        </td>
      </tr>
      
    </tbody>
        
    @endforeach
  </table>
