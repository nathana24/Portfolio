@extends('layouts.master')

@section('content')

<style>
    .bg-video {
      margin: 0;
      width: 100%;
      height: 100vh;
    }

    .hero-header {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .hero-header h1 {
        color: #fff;
    }


    .hero-header .get-to-know-me:hover {
        color: white;
        z-index: 1;
        text-decoration: none !important;
    }


    .contact-btn-submit:hover {
        color: white;
        z-index: 1;
        text-decoration: none !important;
    }

    .contact-btn-submit::after {
        z-index: -1;
    }

    .primary-btn {
      border: none;
      display: block;
      text-align: center;
      cursor: pointer;
      text-transform: uppercase;
      outline: none;
      overflow: hidden;
      position: relative;
      color: #fff;
      font-weight: 700;
      font-size: 15px;
      background-color: #222;
      padding: 12px;
      margin: 0 auto;
      box-shadow: 0 5px 15px rgba(0,0,0,0.20);
      margin-top: 15px;
      width: 200px;
    }

    .primary-btn span {
      position: relative;
      z-index: 1;
    }

    .primary-btn:after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      height: 490%;
      width: 140%;
      background: #04C2C9;
      -webkit-transition: all .5s ease-in-out;
      transition: all .5s ease-in-out;
      -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
      transform: translateX(-98%) translateY(-25%) rotate(45deg);
    }

    .primary-btn:hover:after {
      -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
      transform: translateX(-9%) translateY(-25%) rotate(45deg);
      color:;
    }

    .hero-name {
        color: #04C2C9;
    }

    /*Nav Tabs*/
    .nav {
      justify-content: space-around;
      border-bottom: solid 7px #04C2C9;
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
      background-color: #04C2C9;
      color: #fff;
    }

    .nav-tabs .nav-link {
      color: #000;
      border-radius: 0px;
      flex: 1;
      text-align: center;
      background-color: darkgray;
      color: #fff;
      border: none;
    }

    .projects-wrap {
      min-height: 250px;
      padding-left: 15px;
      padding-right: 15px;
    }

    .projects-inner {
      background-color: #04C2C9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .tab-content {
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .form-input {
        border: solid 1px #000;
        border-radius: 0px;
    }

    .form-control:focus {
        outline: none !important;
        border-color: #000 !important;
        box-shadow: none !important;
    }

</style>


<div class="bg-video" data-vide-bg="/videos/coding" style="background-color: rgba(0,0,0,.5);">
    <div id="navigation">
        <ul>
            <li></li>
        </ul>
    </div>
    <div class="hero-header text-center">
        <h1>Hi, my name is <span class="hero-name">Nathan Adrian.</span></h1>
        <a class="primary-btn get-to-know-me" href="#aboutMe">Get to Know Me</a>
    </div>
    <div class="arrow bounce">
        <a href="#aboutMe">
            <i style="position: absolute; bottom: 15px; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 30px;" class="fa fa-angle-down"></i>
        </a>
    </div>
</div>

{{-- About Me Section --}}
<section id="aboutMe">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-about-me" role="tab" aria-controls="nav-home" aria-selected="true">ABOUT ME</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-projects" role="tab" aria-controls="nav-profile" aria-selected="false">PROJECTS</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-resume" role="tab" aria-controls="nav-contact" aria-selected="false">RESUME</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">CONTACT ME</a>
                </div>
              </nav>

              <div class="tab-content" id="nav-tabContent">
                {{-- About Me Tab --}}
                <div class="tab-pane fade show active" id="nav-about-me" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="row">
                    <div class="col-sm-6">
                      <img style="width: 100%;" src="/images/about-img.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                      <h2>Hello, my name is Nathan Adrain. I am a Full-Stack Developer with a little over two years experience in front-end web development. I have recently merged into back-end web development, and am improving everyday. </h2>
                    </div>
                  </div>
                </div>
                {{-- Projects Tab --}}
                <div class="tab-pane fade" id="nav-projects" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="row">
                    <div class="projects-wrap col-sm-4">
                        <a href="">
                            <div class="projects-inner text-center">
                                <h3>Project 1</h3>
                            </div>
                        </a>
                    </div>
                    <div class="projects-wrap col-sm-4">
                        <a href="">
                            <div class="projects-inner text-center">
                                <h3>Projects 2</h3>
                            </div>
                        </a>
                    </div>
                    <div class="projects-wrap col-sm-4">
                        <a href="">
                            <div class="projects-inner text-center">
                                <h3>Project 3</h3>
                            </div>
                        </a>
                    </div>
                  </div>
                </div>
                {{-- Resume Tab --}}
                <div class="tab-pane fade" id="nav-resume" role="tabpanel" aria-labelledby="nav-contact-tab">

                </div>
                {{-- Contact Tab --}}
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <div class="row">
                    <div class="col-sm-8" style="margin: 0 auto;">
                      <form action="">
                        <div class="row">
                          <div class="col-sm-12">
                            <label for="">Name</label>
                            <input type="text" class="form-control form-input" name="name">
                          </div>
                          <div class="col-sm-12">
                            <label for="">Email</label>
                            <input type="text" class="form-control form-input" name="email">
                          </div>
                          <div class="col-sm-12">
                            <label for="">Message</label>
                            <textarea class="form-control form-input" name="message" id="" cols="30" rows="5"></textarea>
                          </div>
                          <div class="col-sm-12">
                            <button class="btn primary-btn contact-btn-submit" type="submit">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

@stop
