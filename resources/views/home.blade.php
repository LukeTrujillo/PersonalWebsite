@extends('layouts.app')


@section('content')

  @component("components.line_header")
    About
  @endcomponent

  <div class="row">
      <div class="col-12">
        <p>
          Hello there and welcome to my website. I am young and ambititous full-stack developer
          and engineer living in the Greater Boston area. If have any questions or would like to
          learn more please reach out to me.
        </p>
        <h4>TLDR</h4>
        <p>
          If you are like me then you value your time. In an attempt to keep things quick, here
          is a paragraph explaining my skills. This is also summarized on my resume which
          be downloaded by <a href="#">clicking here.</a>
        </p>
        <p>
          I'm a student at <a href="#">WPI</a> pursuing a double major in <b>Computer Science &
          Robotics Engineering</b>. I have a GPA of <b>3.85</b> and are involved with <a href="#">
          many clubs/organizations</a>. My skill set is robust and versatile. I can do everything
          from fullstack development to logic gate programming. People would describe me as
          hard-working and goal-driven. I'm always looking for new projects to get involved with!

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
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
          placerat orci sit amet turpis consequat, et efficitur leo sodales. Nullam
          maximus leo a justo imperdiet, eget cursus quam commodo. Praesent tellus diam,
          finibus ut feugiat quis, consequat in mauris.
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

        <h3 class="text-center">Development Skills</h3>
        <div class="row">
          <div class="col-12 col-md-6">

            <h5 class="text-center">Platform / APIs</h5>
            <div class="d-flex flex-row justify-content-center flex-wrap">
              <div class="large-icon p-3">
                <i class="fab fa-bootstrap"></i>
                <p><small>Bootstrap 3/4</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-css3-alt"></i>
                <p><small>CSS</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-html5"></i>
                <p><small>HTML5</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-js"></i>
                <p><small>Javascript</small></p>
              </div>
            </div>
            <p class="text-center"><b>and PHP, React.js, Vue.js, Wordpress</b></p>

          </div>
          <div class="col-12 col-md-6">

            <h5 class="text-center">Platform / APIs</h5>
            <div class="d-flex flex-row justify-content-center flex-wrap">
              <div class="large-icon p-3">
                <i class="fab fa-bootstrap"></i>
                <p><small>Bootstrap 3/4</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-css3-alt"></i>
                <p><small>CSS</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-html5"></i>
                <p><small>HTML5</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-js"></i>
                <p><small>Javascript</small></p>
              </div>
            </div>
            <p class="text-center"><b>and PHP, React.js, Vue.js, Wordpress</b></p>

          </div>
          <div class="col-12 col-md-6">

            <h5 class="text-center">Platform / APIs</h5>
            <div class="d-flex flex-row justify-content-center flex-wrap">
              <div class="large-icon p-3">
                <i class="fab fa-bootstrap"></i>
                <p><small>Bootstrap 3/4</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-css3-alt"></i>
                <p><small>CSS</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-html5"></i>
                <p><small>HTML5</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-js"></i>
                <p><small>Javascript</small></p>
              </div>
            </div>
            <p class="text-center"><b>and PHP, React.js, Vue.js, Wordpress</b></p>
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-center">Platform / APIs</h5>
            <div class="d-flex flex-row justify-content-center flex-wrap">
              <div class="large-icon p-3">
                <i class="fab fa-bootstrap"></i>
                <p><small>Bootstrap 3/4</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-css3-alt"></i>
                <p><small>CSS</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-html5"></i>
                <p><small>HTML5</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-js"></i>
                <p><small>Javascript</small></p>
              </div>
            </div>
            <p class="text-center"><b>and PHP, React.js, Vue.js, Wordpress</b></p>
          </div>

        </div>

        <h3 class="text-center">Engineering Skills</h3>
        <div class="row">
          <div class="col-12 col-md-6">
            <h5 class="text-center">Product Design</h5>
            <div class="d-flex flex-row justify-content-center flex-wrap">
              <div class="large-icon p-3">
                <i class="fab fa-bootstrap"></i>
                <p><small>Bootstrap 3/4</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-css3-alt"></i>
                <p><small>CSS</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-html5"></i>
                <p><small>HTML5</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-js"></i>
                <p><small>Javascript</small></p>
              </div>
            </div>
            <p class="text-center"><b>and PHP, React.js, Vue.js, Wordpress</b></p>
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-center">Platform / APIs</h5>
            <div class="d-flex flex-row justify-content-center flex-wrap">
              <div class="large-icon p-3">
                <i class="fab fa-bootstrap"></i>
                <p><small>Bootstrap 3/4</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-css3-alt"></i>
                <p><small>CSS</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-html5"></i>
                <p><small>HTML5</small></p>
              </div>
              <div class="large-icon p-3">
                <i class="fab fa-js"></i>
                <p><small>Javascript</small></p>
              </div>
            </div>
            <p class="text-center"><b>and PHP, React.js, Vue.js, Wordpress</b></p>
          </div>
        </div>
      </div>
  </div>
@endsection
