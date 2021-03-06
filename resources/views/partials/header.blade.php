<header>
  {{-- Navigation --}}
  <nav>
    {{-- Boolean Logo --}}
    <div class="logo col-lg-2">
      {{-- Logo image --}}
      <img src="https://www.boolean.careers/images/common/logo.png" alt="boolean_logo">

    </div>
    {{-- Navigation Links --}}
    <div class="links col-lg-8">
      <ul>
        <li><a href="{{route('home')}}">home</a></li>
        <li><a href="{{route('corso')}}">corso</a></li>
        <li> <a href="{{route('dopo_corso')}}">dopo il corso</a> </li>
        <li>lezione gratuita</li>
        <li>assumi i nostri studenti</li>
      </ul>
    </div>
    {{-- Call to Action Button --}}
    <div class="cta_apply col-lg-2">
      <button type="button" name="button">candidati ora</button>
    </div>
  </nav>
  {{-- End of Navigation --}}

</header>
