@extends('layouts/base')

@section('title')
Domande frequenti
@endsection


@section('main')
  <div class="intro_faq">
    <h2>Domande frequenti</h2>
    <p>Le nostre risposte a tutte le tue domande. Non trovi la risosta che stai cercando? <a href="#">Contatttaci</a> e saremo felici di darti una mano.</p>


  </div>

  <div class="main_faq">

    {{-- Left side FAQ --}}
    <ul class="faq_list left_faq col-lg-6">
      <h2>Prima del corso</h2>
      @foreach ($left_faqs as $faq )
        <li>
          <div class="question">
            <h3>{{$faq['question']}}</h3>
            <span class="question_icon"><i class="fas fa-plus"></i></span>
          </div>
          <div class="answer hidden">
            <p>{{$faq['answer']}}</p>
          </div>
        </li>

      @endforeach
    </ul>

    {{-- Right side FAQ --}}
    <ul class="faq_list right_faq col-lg-6">
      <h2>Dopo il corso</h2>
      @foreach ($right_faqs as $faq)
        <li>
          <div class="question">
            <h3>{{$faq['question']}}</h3>
            <span class="question_icon"><i class="fas fa-plus"></i></span>
          </div>
          <div class="answer hidden">
            <p>{{$faq['answer']}}</p>
          </div>
        </li>
      @endforeach
    </ul>

  </div>
@endsection
