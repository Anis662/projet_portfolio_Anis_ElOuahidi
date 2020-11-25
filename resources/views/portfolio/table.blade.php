<a href="{{ route("portfolio.create") }}" class="btn btn-danger">CREATE</a>

<table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">IMAGE</th>
        <th scope="col">CATEGORIE</th>
        
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    @foreach ($portfolio as $e )
    <tbody>
      <tr>
        
        <td>{{ $e->id }}</td>
        <td><img src="{{ asset("img/$e->image") }}" alt=""></td>
        <td>{{ $e->categorie }}</td>
        
        <td class="d-flex">
          <a href="/admin/portfolio/{{ $e->id }}/edit" class="btn btn-success">EDIT</a>
          <form action="/admin/portfolio/{{ $e->id }}" method="POST">
            @csrf
            @method("delete")
            <button class="btn btn-danger" type="submit">DELETE</button>
          
          </form>
        </td>
      </tr>
      
    </tbody>
        
    @endforeach
  </table>
