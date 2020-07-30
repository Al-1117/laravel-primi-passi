@extends('layouts/base')

@section('title')
Domande frequenti
@endsection


@section('main')
<div class="container">
  <ul class="faq_list">
    @foreach ($faq_list as $faq)
      <li>
        <h3>{{$faq['question']}}</h3>
        <p>{{$faq['answer']}}</p>
      </li>

    @endforeach
  </ul>


</div>
@endsection
