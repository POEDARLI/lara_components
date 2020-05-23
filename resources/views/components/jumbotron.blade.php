<div class="jumbotron">

  <h1 class="display-4">{{ $title }}</h1>

  <!-- to use component's default value, must use $slot -->
  <p class="lead">{{ $slot }}</p>

  <!-- if not defined $button variable, will show default value "click here" -->
  <a class="btn btn-primary btn-lg" href="#" role="button">{{ $button ?? "Click here" }}</a>

</div>