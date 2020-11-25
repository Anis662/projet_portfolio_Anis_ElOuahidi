@extends('templates.structure')

@section('content')

<section class="container">

    <form action="/admin/fact/{{ $fact->id }}" method="POST">
      @csrf
      @method("put")
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
          <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $fact->chiffre }}" name="chiffre">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Titre</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $fact->titre }}" name="titre">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Texte</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $fact->texte }}" name="texte">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-danger">SUBMIT</button>
        </div>
      </form>

</section>
@endsection