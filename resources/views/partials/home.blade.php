
@extends('layouts/base')



@section('title')
Home
@endsection

@section('main')
  <div class="container">
    {{-- JUMBOTRON --}}
    <div class="jumbotron">
      <div class="left_jumbo col-lg-7">
        {{-- Main title --}}
        <div class="title">
          <h1>Diventa <strong>sviluppatore web</strong></h1>
        </div>
        {{-- Sub title --}}
        <div class="sub_title">
          <h3>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h3>
        </div>
        <div class="features">
          <ul>
            <li><strong>6 mesi</strong> di corso intensivo online in diretta </li>
            <li> <strong>Nessuna compotenza</strong> di programmazione richiesta</li>
            <li> Siamo certi del tuo successo, altrimenti<strong> ti rimborsiamo</strong></li>
          </ul>

        </div>
      </div>
      {{-- Right side of Jumbotron --}}
      <div class="right_jumbo col-lg-5">
        {{-- Jumbotron image --}}
        <div class="jumbo_image">
          <img src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="">

        </div>
      </div>
    </div>
  </div>
  {{-- END OF JUMBOTRON --}}

  {{-- NUMBERS --}}
  <section id="numbers">
    <div class="container">
      <div class="numbers_wrapper">
        <div class="single_num col-lg-4">
          <h2>98%</h2>
          <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
        </div>
        <div class="single_num col-lg-4">
          <h2>€ 23.000</h2>
          <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner</p>
        </div>
        <div class="single_num col-lg-4">
          <h2>#1</h2>
          <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
        </div>
      </div>
    </div>
  </section>
  {{-- END OF NUMBERS --}}

  {{-- PARTNERS --}}
  <section id="partners">
    <div class="container">
      <div class="partners_wrapper">
        <p>I nostri studenti sono stati assunti da:</p>
        <div class="logos_container">
          <ul class="first_row col-lg-12">
            <li class="single_logo col-lg-3">
              <img src="https://www.boolean.careers/images/companies/facileit.png" alt="facile.it_logo">
            </li>
            <li class="single_logo col-lg-3">
              <img src="https://www.boolean.careers/images/companies/oneday.png" alt="oneday_logo">
            </li>
            <li class="single_logo col-lg-3">
              <img src="https://www.boolean.careers/images/companies/prima.png" alt="prima_logo">
            </li>
          </ul>
          <ul class="second_row col-lg-12">
            <li class="single_logo col-lg-3">
              <img src="https://www.boolean.careers/images/companies/fabbrica-digitale-big.png" alt="fabbricadigitale_logo">
            </li>
            <li class="single_logo col-lg-3">
              <img src="https://www.boolean.careers/images/companies/nephila.png" alt="accenture_logo">
            </li>
            <li class="single_logo col-lg-3">
              <img src="https://www.boolean.careers/images/companies/rds.png" alt="rds_logo">
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>
  {{-- END OF PARTNERS --}}
@endsection
