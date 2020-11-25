
<section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>Facts</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
@foreach ($fact as $i )
    
<div class="row no-gutters">

  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
    <div class="count-box">
      <i class="icofont-simple-smile"></i>
      <span data-toggle="counter-up">{{ $i->chiffre }}</span>
      <p><strong>{{ $i->titre }}</strong> {{ $i->texte }}</p>
    </div>
  </div>



</div>

</div>
@endforeach
  </section>
