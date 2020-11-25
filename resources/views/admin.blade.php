@extends('templates.structure')
@section('content')
    <section class="container">
        @include('about.table')
        @include("fact.table")
        @include("skil.table")
        @include("portfolio.table")
    </section>
@endsection