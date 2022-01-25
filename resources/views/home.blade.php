@extends('layouts.main')
@section('content')
<div class="container">
  <h2>Home</h2>
  <h4>Nella pagina <strong>Travel Offers</strong> trovi maggiori informazioni sulle nostre offerte.</h4>
  <a href="{{route('offers')}}" class="btn btn-primary">Clicca qui</a>
</div>
@endsection