@extends('layouts.app')


@section('content')

  @component("components.line_header")
    About
  @endcomponent

  <div class="row">

      <div class="col-12">
        <p class="lead">
          I'm a student at <a href="#">Worcester Polytechnic Insitute (WPI)</a> pursuing a double major in <span class="text-primary"><b>Computer Science &
          Robotics Engineering</b></span>. I have a GPA of <b>3.80</b> and are involved with
          many clubs/organizations. My skill set is robust and versatile. I can do everything
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

      </div>
  </div>
  @component("components.line_header")
  Skills
  @endcomponent
  <div class="row">
    <div class="col-12 text-center text-md-left">
      <h4>Full Stack Development</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
        <div class="d-none d-md-flex flex-row justify-content-around align-items-center">
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
        <p class="lead text-center text-md-left">
          On numerous projects, I have been tasked with doing full-stack development
          starting with UX design and ending with server management. I love working
          on a project from the start and being able to watch it grow into
          something great!
        </p>
    </div>
  </div>

  <div class="row">
    <div class="col-12">

      <h4 class="text-center text-md-left">Programming Languages</h4>
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

        <div class="text-center px-1">
          <i class="fab fa-sass fa-5x"></i>
          <br>
          <p>Sass</p>
        </div>


      </div>

      <h4 class="text-center text-md-left">Frameworks & APIs</h4>
      <div class="d-flex flex-row justify-content-around align-items-center flex-wrap view-fade">
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

      <h4 class="text-center text-md-left">Databases & Other</h4>
      <div class="d-flex flex-row justify-content-around align-items-center flex-wrap view-fade">
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


  <div class="row row-cols-1 row-cols-md-2">
    @component("components.project")
      @slot('path')
        /img/resume_site.PNG
      @endslot

      @slot('name')
        Portfolio Website <span class="badge badge-pill badge-success">Active</span>
      @endslot

      After working on many projects, I built this website to display my work and connect with
      future clients, employers, and professionals.

      @slot('button')
          <a href="https://github.com/LukeTrujillo/PersonalWebsite" class="btn btn-sm btn-primary">View on Github</a>
      @endslot

    @endcomponent
    @component("components.project")
      @slot('path')
        /img/diodeck_site.PNG
      @endslot
      @slot('name')
        Diodeck <span class="badge badge-pill badge-secondary">In Haitus</span>
      @endslot

      Currently in hiatus, this is a eLearning platform that teaches people who to build circuits
      and write code through innovative hands-on learning.
      <br>
      Diodeck was vistied by thousands of people
      people and recieved over $10,000 in funding from donors and academic institutions.

    @endcomponent
  </div>

  <div class="row">
    <div class="col-12">
      <h4>Past Projects</h4>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
    @component("components.project")
      @slot('path')
        /img/ink_ahead_site.PNG
      @endslot


      @slot('name')
        Ink Ahead
      @endslot

      Designed, built, and maintained website for small apparell company, Ink Ahead.
      <br>
      This was used as the primary point of sale for the company for over four months.
      The company later decided to rebrand and the website was shut down.
    @endcomponent
    @component("components.project")
      @slot('path')
        /img/jit_site.PNG
      @endslot

      @slot('name')
        Just in Time Realty
      @endslot

      Designed and development website for local realtor interested in renting properties
      to tourists. After 4 months of paid development, the development of the project was
      halted because of a change in business strategy.
    @endcomponent
    @component("components.project")
      @slot('path')
        /img/dj_spotify_site.PNG
      @endslot

      @slot('name')
        DJ Spotify
      @endslot

      Developed collaborative queue and dynamic shuffle using the Spotify API during
      a 24 hour hackathon at Wentworth Institute of Technology. This would go on win
      the hackathon category for "Best Software"
    @endcomponent
    @component("components.project")
      @slot('path')
        /img/aiman_site.PNG
      @endslot

      @slot('name')
        Resume Website
      @endslot

      Designed, built, and maintain resume website for young professional. The website
      was built to the clients standards.

      @slot('button')
        <a href="http://www.aimannajah.com" target="_blank" class="btn btn-primary btn-sm">Visit Website</a>
      @endslot
    @endcomponent
  </div>
@endsection
