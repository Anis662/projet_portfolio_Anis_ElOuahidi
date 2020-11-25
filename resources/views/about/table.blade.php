
<h1 class="text-center">About</h1>
<a href="{{ route("about.create") }}" class="btn btn-danger">CREATE</a>

<table class="table-responsive table-dark" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">PHOTO</th>
        <th scope="col">ANNIVERSAIRE</th>
        <th scope="col">WEBSITE</th>
        <th scope="col">PHONE</th>
        <th scope="col">CITY</th>
        <th scope="col">AGE</th>
        <th scope="col">DEGRE</th>
        <th scope="col">MAIL</th>
        <th scope="col">FREELANCE</th>
        <th scope="col">TEXTE</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    @foreach ($about as $e)
    <tbody>
      <tr>
        <td>{{ $e->id }}</td>
        <td><img src="{{ asset("img/$e->photo") }}" alt=""></td>
        <td>{{ $e->aniversaire }}</td>
        <td>{{ $e->website }}</td>
        <td>{{ $e->phone }}</td>
        <td>{{ $e->city }}</td>
        <td>{{ $e->age }}</td>
        <td>{{ $e->degre }}</td>
        <td>{{ $e->mail }}</td>
        <td>{{ $e->freelance }}</td>
        <td>{{ $e->texte }}</td>
        <td class="d-flex">
            <a href="/admin/about/{{ $e->id }}/edit" class="btn btn-success">EDIT</a>
            <form action="/admin/about/{{ $e->id }}" method="POST">
                @csrf
                @method("delete")
                <button class="btn btn-danger" type="submit">DELETE</button>
            </form>
        </td>
      </tr>
      
    </tbody>
        
    @endforeach
  </table>
