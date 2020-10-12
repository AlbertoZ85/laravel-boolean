<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
      <img src="https://www.boolean.careers/images/misc/logo.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item @if (url()->current() == route('home')) active @endif">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item @if (url()->current() == route('chisiamo')) active @endif">
          <a class="nav-link" href="{{route('chisiamo')}}">Chi siamo</a>
        </li>
        <li class="nav-item @if (url()->current() == route('studenti')) active @endif">
          <a class="nav-link" href="{{route('studenti')}}">Studenti</a>
        </li>
      </ul>
    </div>
  </nav>
</div>