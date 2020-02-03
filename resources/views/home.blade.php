@extends('layouts.app')


@section('content')
  <div class="row">
      <div class="col-12">
        <h1>About</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
          placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
          maximus leo a justo imperdiet, eget cursus quam commodo. Praesent tellus diam,
           finibus ut feugiat quis, consequat in mauris.
        </p>
        <p>
          Pellentesque sodales tellus metus, non euismod eros sodales eu. Proin dictum nibh
           vitae est imperdiet, non dapibus felis gravida. Donec ac euismod est, at dignissim
            magna. Nam lectus ipsum, elementum vel ipsum ac, ullamcorper condimentum tellus.
            Fusce et neque sodales, viverra metus at, aliquet libero. Sed non egestas metus.
            Morbi tristique tempor urna, sit amet mollis nunc. Aliquam eget efficitur odio,
            non sagittis augue. Integer pellentesque odio in hendrerit dapibus.
        </p>
      </div>
  </div>
  <div class="row">
      <div class="col-12">
        <h1>Skills</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat orci
          sit amet turpis consequat, et efficitur leo sodales. Nullam maximus leo a justo
          imperdiet, eget cursus quam commodo.
        </p>
        <h4>Programming Skills</h4>
        <div class="d-flex flex-row justify-content-between flex-wrap" style="border: 0.20rem solid #DE1A1A; border-radius:1rem;">
          <div class="large-icon">
            <i class="fab fa-java"></i>
            <p>Java</p>
          </div>
          <div class="large-icon">
            <i class="fab fa-css3-alt"></i>
            <p>CSS</p>
          </div>
          <div class="large-icon">
            <i class="fab fa-js"></i>
            <p>Javascript</p>
          </div>
          <div class="large-icon">
            <i class="fab fa-php"></i>
            <p>PHP</p>
          </div>
          <div class="large-icon">
            <i class="fab fa-laravel"></i>
            <p>Laravel</p>
          </div>
          <div class="large-icon">
            <i class="fab fab fa-github"></i>
            <p>Database</p>
          </div>
          <div class="large-icon">
            <i class="fas fa-database"></i>
            <p>SQL</p>
          </div>
          <div class="large-icon">
            <i class="fab fa-html5"></i>
            <p>HTML5</p>
          </div>
          <div class="large-icon">
            <i class="fab fa-react"></i>
            <p>React.js</p>
          </div>
          <div class="large-icon">
            <i class="fas fa-mobile-alt"></i>
            <p>Mobile Development</p>
          </div>

        </div>
      </div>
  </div>

@endsection
