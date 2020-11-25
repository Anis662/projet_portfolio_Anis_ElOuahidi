@extends('templates.structure')

@section('content')

<section class="container">

    <form action="/admin/skil/{{ $skil->id }}" method="POST">
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
          <label for="formGroupExampleInput">Langue</label>
          <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $skil->langue }}" name="langue">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Pourcentage</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $skil->pourcentage }}" name="pourcentage">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-danger">SUBMIT</button>
        </div>
      </form>

</section>
@endsection