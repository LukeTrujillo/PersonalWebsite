@extends('layouts.app')


@section('content')

  @component("components.line_header")
    About
  @endcomponent

  <div class="row">

      <div class="col-12">
        <p class="lead">
          I'm a student at <a href="#">Worcester Polytechnic Insitute (WPI)</a> pursuing a double major in <span class="text-primary"><b>Computer Science &
          Robotics Engineering</b></span>. I have a GPA of <b>3.80</b> and are involved with <a href="#">
          many clubs/organizations</a>. My skill set is robust and versatile. I can do everything
          from fullstack development to logic gate programming. People would describe me as
          hard-working and goal-driven. I'm always looking for new projects to get involved with!
        </p>

        <div class="row">
          <div class="col-12 col-md-6 text-center">
            <p class="mb-0 h1 display-1">3.80</p>
            <p>GPA (out of 4.0)</p>
          </div>
          <div class="col-12 col-md-6 text-center">
            <p class="mb-0 h1 display-1">1,151</p>
            <p>Github & GitLab commits last year</p>
          </div>
        </div>

        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
          placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
          maximus leo a justo imperdiet, eget cursus quam commodo.
        </p>
      </div>
  </div>
  @component("components.line_header")
  Skills
  @endcomponent
  <div class="row">
    <div class="col-12">
      <h4>Full Stack Development</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
        <div class="d-flex flex-row justify-content-around align-items-center">
          <div class="large-icon p-3 text-center view-fade">
            <i class="fas fa-database gray-icon"></i>
            <p><small>SQL, Oracle, MongoDB</small></p>
          </div>

          <i class="fas fa-arrow-alt-circle-right arrow-icon view-fade"></i>

          <div class="large-icon p-3 text-center view-fade">
            <i class="fas fa-server gray-icon"></i>
            <p><small>PHP, Java, C, C++</small></p>
          </div>

          <i class="fas fa-arrow-alt-circle-right arrow-icon view-fade"></i>

          <div class="large-icon p-3 text-center view-fade">
            <i class="fas fa-desktop gray-icon"></i>
            <p><small>JS, CSS, HTML</small></p>
          </div>
        </div>
        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
          placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
          maximus leo a justo imperdiet, eget cursus quam commodo. Praesent tellus diam,
          finibus ut feugiat quis, consequat in mauris.
        </p>
    </div>
  </div>

  <div class="row">
    <div class="col-12">

      <h4>Programming Languages</h4>
      <div class="d-flex flex-row justify-content-around align-items-center flex-wrap">


        <div class="text-center px-1">
          <i class="fas fa-code fa-5x"></i>
          <br>
          <p>C/C++/C#</p>
        </div>

        <div class="text-center px-1">
          <i class="fab fa-css3-alt fa-5x"></i>
          <br>
          <p>CSS</p>
        </div>

        <div class="text-center px-1">
          <i class="fab fa-html5 fa-5x"></i>
          <br>
          <p>HTML5</p>
        </div>

        <div class="text-center px-1">
          <i class="fab fa-java fa-5x"></i>
          <br>
          <p>Java</p>
        </div>

        <div class="text-center px-1">
          <i class="fab fa-js-square fa-5x"></i>
          <br>
          <p>Javascript</p>
        </div>

        <div class="text-center px-1">
          <i class="fab fa-php fa-5x"></i>
          <br>
          <p>PHP</p>
        </div>


      </div>

      <h4>Frameworks & APIs</h4>
      <div class="d-flex flex-row justify-content-around align-items-center flex-wrap">
        <div class="text-center px-1">
          <i class="fab fa-laravel fa-5x"></i>
          <br>
          <p>Laravel</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-react fa-5x"></i>
          <br>
          <p>React</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-vuejs fa-5x"></i>
          <br>
          <p>Vue.js</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-bootstrap fa-5x"></i>
          <br>
          <p>Bootstrap</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-node-js fa-5x"></i>
          <br>
          <p>Node.js</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-wordpress fa-5x"></i>
          <br>
          <p>Wordpress</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-slack fa-5x"></i>
          <br>
          <p>Slack API</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-spotify fa-5x"></i>
          <br>
          <p>Spotify API</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-mailchimp fa-5x"></i>
          <br>
          <p>Mailchimp API</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-google fa-5x"></i>
          <br>
          <p>Google Cloud</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-android fa-5x"></i>
          <br>
          <p>Android API</p>
        </div>
      </div>

      <h4>Databases & Other</h4>
      <div class="d-flex flex-row justify-content-around align-items-center flex-wrap">
        <div class="text-center px-1">
          <i class="fas fa-database fa-5x"></i>
          <br>
          <p>SQLite</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-envira fa-5x"></i>
          <br>
          <p>MongoDB</p>
        </div>
        <div class="text-center px-1">
          <i class="far fa-circle fa-5x"></i>
          <br>
          <p>OracleSQL</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-facebook-square fa-5x"></i>
          <br>
          <p>FB Ads</p>
        </div>
        <div class="text-center px-1">
          <i class="fab fa-git-square fa-5x"></i>
          <br>
          <p>Git</p>
        </div>

      </div>
    </div>
  </div>
  @component("components.line_header")
  Projects
  @endcomponent

  <div class="row">
    <div class="col-12">
      <p class="lead">
        I have worked on a variety of personal and corporate projects. I am currently working on allowing you do view limited demos of my work. However
        due to legal and security reasons, working demos of my work may not be viewable.
      </p>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <h4>Current Projects</h4>
    </div>
  </div>


  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
    @component("components.project")
      @slot('name')
        Profilio Website
      @endslot

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
      placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
      maximus leo a justo imperdiet, eget cursus quam commodo.

      @slot('button')
          <a href="#" class="btn btn-primary mt-1">View on Github</a>
      @endslot

    @endcomponent
    @component("components.project")
      @slot('name')
        Profilio Website
      @endslot

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
      placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
      maximus leo a justo imperdiet, eget cursus quam commodo.
    @endcomponent
    @component("components.project")
      @slot('name')
        Profilio Website
      @endslot

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
      placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
      maximus leo a justo imperdiet, eget cursus quam commodo.
    @endcomponent
    @component("components.project")
      @slot('name')
        Profilio Website
      @endslot

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
      placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
      maximus leo a justo imperdiet, eget cursus quam commodo.
    @endcomponent
  </div>

  <div class="row">
    <div class="col-12">
      <h4>Past Projects</h4>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
    @component("components.project")
      @slot('name')
        Profilio Website
      @endslot

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
      placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
      maximus leo a justo imperdiet, eget cursus quam commodo.
    @endcomponent
    @component("components.project")
      @slot('name')
        Profilio Website
      @endslot

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
      placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
      maximus leo a justo imperdiet, eget cursus quam commodo.

      @slot('button')
        <a href="#" class="btn btn-primary mt-1">Go somewhere</a>
      @endslot
    @endcomponent
    @component("components.project")
      @slot('name')
        Profilio Website
      @endslot

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
      placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
      maximus leo a justo imperdiet, eget cursus quam commodo.
    @endcomponent
    @component("components.project")
      @slot('name')
        Profilio Website
      @endslot

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
      placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
      maximus leo a justo imperdiet, eget cursus quam commodo.
    @endcomponent
  </div>


@endsection
