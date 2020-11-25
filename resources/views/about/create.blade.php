@extends('templates.structure')

@section('content')

<section class="container">

    <form action="{{ route("about.store") }}" method="POST" enctype="multipart/form-data">
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
          <label for="formGroupExampleInput">Photo</label>
          <input type="file" class="form-control" id="formGroupExampleInput"  name="photo">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Anniversaire</label>
          <input type="text" class="form-control" id="formGroupExampleInput2"  name="aniversaire">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Website</label>
            <input type="text" class="form-control" id="formGroupExampleInput2"  name="website">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Phone</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="phone">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">City</label>
            <input type="text" class="form-control" id="formGroupExampleInput2"  name="city">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Age</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="age">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Degree</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="degre">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="mail" class="form-control" id="formGroupExampleInput2" name="mail">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Freelance</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="freelance">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Texte</label>
            <input type="text" class="form-control" id="formGroupExampleInput2"  name="texte">
          </div>
          <div class="text-center">
            <button class="btn btn-primary" type="submit">
                Submit
            </button>
          </div>
      </form>

</section>
@endsection