@extends('templates.structure')

@section('content')

<section class="container">

    <form action="{{ route("fact.store") }}" method="POST">
      @csrf
      
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
        <div class="form-group">
          <label for="formGroupExampleInput">Chiffre</label>
          <input type="text" class="form-control" id="formGroupExampleInput"  name="chiffre">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Titre</label>
          <input type="text" class="form-control" id="formGroupExampleInput2"  name="titre">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Texte</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="texte">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-danger">SUBMIT</button>
        </div>
      </form>

</section>
@endsection