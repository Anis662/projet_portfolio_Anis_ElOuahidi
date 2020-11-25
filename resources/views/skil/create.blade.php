@extends('templates.structure')

@section('content')

<section class="container">

    <form action="{{ route("skil.store") }}" method="POST">
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
          <label for="formGroupExampleInput">Langue</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="langue">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Pourcentage</label>
          <input type="text" class="form-control" id="formGroupExampleInput2"  name="pourcentage">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-danger">SUBMIT</button>
        </div>
      </form>

</section>
@endsection