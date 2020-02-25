@extends('layouts.app')


@section('content')

  @component("components.line_header")
    About
  @endcomponent

  <div class="row">

      <div class="col-12">
        <p class="lead">
          I'm a student at <a href="#">Worcester Polytechnic Insitute (WPI)</a> pursuing a double major in <span class="text-primary"><b>Computer Science &
          Robotics Engineering</b></span>. I have a GPA of <b>3.85</b> and are involved with <a href="#">
          many clubs/organizations</a>. My skill set is robust and versatile. I can do everything
          from fullstack development to logic gate programming. People would describe me as
          hard-working and goal-driven. I'm always looking for new projects to get involved with!
        </p>

        <div class="row">
          <div class="col-12 col-md-6 text-center">
            <p class="mb-0 h1 display-1">3.85</p>
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
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="row">
          <div class="col-12 col-md-4">
            <img src="/img/trujillo.jpeg" class="d-block mx-auto rounded-circle img-thumbnail shadow-lg" style="max-width:300px;">
          </div>
          <div class="col-12 col-md-8 my-auto">
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
              nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
               culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>

  <div class="col-12 mt-4">
    <div class="d-flex flex-row text-center align-items-center align-items-stretch list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Programming Languages</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
</div>
@endsection
