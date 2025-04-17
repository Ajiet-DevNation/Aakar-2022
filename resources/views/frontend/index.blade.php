@extends('layouts.front')

@section('content')
<section class="slider">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="events-slider-content">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="inner">
                  <div class="date">
                    <figure><img src="{{asset('frontend/images/icon-date.svg')}}" alt="Image"></figure>
                    <span>June 3, 2022</span></div>
                  <h2> Pro Night with <br> ALL OK</h2>
                  <a href="{{route('register')}}" class="slider-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">REGISTER NOW   </span></a>
                  <div class="location">
                    <div class="icon"><img src="{{asset('frontend/images/icon-location.svg')}}" alt="Image"></div>
                    <span>AJIET Campus</span> </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="inner">
                  <div class="date">
                    <figure><img src="{{asset('frontend/images/icon-date.svg')}}" alt="Image"></figure>
                    <span>June 3, 2022</span></div>
                  <h2>Symphony<br>Solo Singing</h2>
                  <a href="{{route('register')}}" class="slider-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">REGISTER NOW   </span></a>
                  <div class="location">
                    <div class="icon"><img src="{{asset('frontend/images/icon-location.svg')}}" alt="Image"></div>
                    <span>AJIET Campus</span> </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="inner">
                  <div class="date">
                    <figure><img src="{{asset('frontend/images/icon-date.svg')}}" alt="Image"></figure>
                    <span>June 4, 2022</span></div>
                  <h2>Battlegrounds Mobile India</h2>
                  <a href="{{route('register')}}" class="slider-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">REGISTER NOW   </span></a>
                  <div class="location">
                    <div class="icon"><img src="{{asset('frontend/images/icon-location.svg')}}" alt="Image"></div>
                    <span>AJIET Campus</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="events-slider-images">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="slide-image" data-background="{{asset('frontend/images/allok.jpg')}}"></div>
              </div>
              {{-- <div class="swiper-slide">
                <div class="slide-image" data-background="{{asset('frontend/images/groupDance.jpg')}}"></div>
              </div> --}}
              <div class="swiper-slide">
                <div class="slide-image" data-background="{{asset('frontend/images/soloSinging.jpeg')}}"></div>
              </div>
              <div class="swiper-slide">
                <div class="slide-image" data-background="{{asset('frontend/images/bgmi.jpg')}}"></div>
              </div>
            </div>
            <div class="button-prev"><span class="icon arrow"></span></div>
            <div class="button-next"><span class="icon arrow"></span></div>
          </div> 
        </div>
      </div>
    </div>
</section>
<section class="content-section" data-background="#F6FAFB">
  <span class="section-bg" data-background="{{asset('frontend/images/section-bg05.png')}}" data-scroll data-scroll-speed="2"></span>
  <!-- end section-bg -->
<div class="container">
  <div class="row justify-content-center g-0">
    <div class="col-12">
        <div data-scroll data-scroll-speed="0.5">
      <div class="section-title text-center">
        <h2>Get Your Pass</h2>
      </div>
      <!-- end section-title --> 
           </div>
        <!-- end data-scroll -->
    </div>
    <!-- end col-12 -->
    <div class="col-xl-3 col-lg-4 col-md-6">
        <div data-scroll data-scroll-speed="-0.5">
      <div class="price-box">
        <h5>BASE PASS</h5>
        <div class="price"> <span class="currency">₹</span> <span class="value">150</span> <span class="time">/Event</span> </div>
        <!-- end price -->
        <ul>
          <li class="active"> <i class="far fa-check-circle"></i> Any single Non-Mega Event of the users choice <small></small> </li>
          <li> <i class="far fa-times-circle"></i> Does not include a concert pass <small></small> </li>
        </ul>
        <a href="{{route('register')}}" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">APPLY NOW</span></a> </div>
      <!-- end price-box --> 
            </div>
        <!-- end data-scroll -->
    </div>
    <!-- end col-3 -->
    <!-- end col-3 -->
    <div class="col-xl-3 col-lg-4 col-md-6">
        <div data-scroll data-scroll-speed="-0.5">
          <div class="price-box featured">
            <h5>PREMIUM PASS</h5>
            <div class="price"> <span class="currency">₹</span> <span class="value">300</span> <span class="time"></span> </div>
            <!-- end price -->
            <ul>
              <li class="active"> <i class="far fa-check-circle"></i> Can register to as many Non-Mega Events as needed <small></small> </li>
              <li class="active"> <i class="far fa-check-circle"></i> Includes a concert pass <small></small> </li>
            </ul>
            <a href="{{route('register')}}" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">APPLY NOW</span></a> </div>
      <!-- end price-box --> 
              </div>
        <!-- end data-scroll -->
    </div>
    <!-- end col-3 --> 
    <div class="col-xl-3 col-lg-4 col-md-6">
      <div data-scroll data-scroll-speed="-0.5">
    <div class="price-box">
      <h5>MEGA PASS</h5>
      {{-- <div class="price"> <span class="currency">₹</span> <span class="value"></span> <span class="time">/Team</span> </div> --}}
      <!-- end price -->
      <ul class="mt-5">
        <li class="active"> <i class="far fa-check-circle"></i> Includes registration for all Mega Events  <small></small> </li>
        <li class="active"> <i class="far fa-check-circle"></i> Payment must be done on spot <small></small> </li>
        <li> <i class="far fa-times-circle"></i> Does not include a concert pass <small></small> </li>
      </ul>
      <a href="{{route('register')}}" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">APPLY NOW</span></a> </div>
    <!-- end price-box --> 
          </div>
      <!-- end data-scroll -->
  </div>
  </div>
  <!-- end row --> 
</div>
<!-- end container --> 
</section>
  <section class="content-section">
      <span class="section-bg" data-background="{{asset('frontend/images/section-bg01.png')}}" data-scroll data-scroll-speed="1"></span>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div data-scroll data-scroll-speed="-0.5">
              <div class="side-content left">
                <h6>AAKAR</h6>
                <h2>Not just an event,<br> an experience!</h2>
                <p style="font-weight:normal">A J Institute of Engineering & Technology, Mangaluru is pleased to organize its fourth intercollegiate Techno-Cultural fest, "AJIET AAKAR- 2022", with the tagline of "Not just an Event, an Experience", on the 3<sup>rd</sup> and 4<sup>th</sup> of June 2022, at AJIET Campus.<br><br>  AJIET AAKAR-2022 is a splendid platform for students to showcase their technical as well as cultural talents.
                It's an opportunity to acquire feedback from professional entertainers and an enthusiastic audience to watch and encourage the talents.</p>
                <a href="{{route('all_events')}}" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">DISCOVER NOW</span></a> 
              </div>
            </div>
          </div>
        <div class="col-lg-6">
            <div data-scroll data-scroll-speed="0.5">
          <figure class="side-image"> <img src="{{asset('frontend/images/side-image01.png')}}" alt="Image"> </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content-section no-top-spacing">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div data-scroll data-scroll-speed="-0.5">
          <div class="counter-box">
            <figure><img src="{{asset('frontend/images/icon-counter01.png')}}" alt="Image"></figure>
            <span class="odometer">30+</span>
            <h6>Events</h6>
          </div>
                </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div data-scroll data-scroll-speed="0.5">
            <div class="counter-box">
              <figure><img src="{{asset('frontend/images/icon-counter02.png')}}" alt="Image"></figure>
              <span class="odometer">20+</span>
              <h6>Sponsers</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div data-scroll data-scroll-speed="-1">
              <div class="counter-box">
                <figure><img src="{{asset('frontend/images/icon-counter03.png')}}" alt="Image"></figure>
                <span class="odometer">1000+</span>
                <h6>Students<br>
                Participated</h6>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content-section" data-background="#F6FAFB">
      <span class="section-bg" data-background="{{asset('frontend/images/section-bg02.png')}}" data-scroll data-scroll-speed="2"></span>

    <div class="container">
      <div class="row">
        <div class="col-12">
            <div data-scroll data-scroll-speed="-0.5">
          <div class="section-title">
            <h6>SCHEDULE OF EVENT</h6>
            <h2>List of Events</h2>
          </div>
                 </div>
            <!-- end data-scroll -->
        </div>
        <!-- end col-12 -->
        <div class="col-12">
            <div data-scroll data-scroll-speed="0.5">
          <div class="schedule-box">
            <div class="nav">
              <div class="active" data-bs-toggle="tab" data-bs-target="#tab-content01"> <span class="day">DAY 01</span> <small class="date">FRIDAY, JUNE 03</small> </div>
              <!-- tab-nav -->
              <div data-bs-toggle="tab" data-bs-target="#tab-content02" > <span class="day">DAY 02</span> <small class="date">SATURDAY, JUNE 04</small> </div>
              <!-- tab-nav -->
         
            </div>
            <!-- end nav -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab-content01">
                <div class="timeline">

                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">9:30AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Symphony<br /><h5>Swara Sangama<br/>Mad ads <br>Gully Cricket</h5>
                    <p></p>
                  </div>
                   
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">10:30AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
          <h5>         <h5>Reel it</h5>
                    <p></p>
                  </div>

                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">11:00AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                  <h5> Papyrus</h5>
                    <p></p>
                  </div>
                  
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">11:30AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
               <h5>    Need for Speed(NFS)<br />Charisma on Command</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                <!-- end timeline -->
               
                <!-- end timeline -->
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">12:00PM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Artistica<br/>Bob The Builder<br/>Nerve Wrecking<br/>Times Up!</h5>
                    <p></p>
                  </div>
                </div>
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">12:30AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Troubleshoot</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                  <!-- end timeline -->
                  <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">2:00PM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Circuitronix<br/>RoboCup<br/>Valorant</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                <!-- end timeline --> 
                  <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">2:30PM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Face Canvas</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
              </div>

              <!-- end tab-pane -->
              <div class="tab-pane fade" id="tab-content02">
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">9:15AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Rapid Rhythms <br>Step Hoppers</h5>
                    
                  </div>
                  <!-- end event-description --> 
                </div>
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">9:30AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Trail by Trivia</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                <!-- end timeline -->
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">10:00AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Masqurade<br/>Pixels<br/>Scrambled <br>bgmi </h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">10:30AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Deadlock <br>Counter Strike</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                <!-- end timeline -->
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">11:00AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Just A Minute (JAM)<br/>Spectra</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">11:30AM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Master Caed</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">12:00PM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Jumanji<br/>Intellect Game<br/>Spyder Web </h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                
                  <!-- end event-description --> 
                </div>
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">1:30PM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Diamond Rush</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                <div class="timeline">
                  <div class="event-time"><img src="{{asset('frontend/images/icon-time.svg')}}" alt="Image">2:00PM</div>
                  <!-- end event-time -->
                  <div class="event-description">
                    <h5>Slow and Furious <br>Cineshort</h5>
                    <p></p>
                  </div>
                  <!-- end event-description --> 
                </div>
                
              <!-- end tab-pane --> 
            </div>
            <!-- end tab-content --> 
          </div>
          <!-- end schedule-box --> 
                 </div>
            <!-- end data-scroll -->
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
  <section class="content-section left-white-bg" data-background="#F8669E">
      <span class="section-bg" data-background="{{asset('frontend/images/section-bg03.png')}}" data-scroll data-scroll-speed="1"></span>
      <!-- end section-bg -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
            <div data-scroll data-scroll-speed="0.5">
            <video loop class="side-image" autoplay muted>
            <source src="frontend/images/celebrateAakar.mp4" type="video/mp4"></video>
          <!-- end side-image --> 
                 </div>
            <!-- end data-scroll -->
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
            <div data-scroll data-scroll-speed="-0.5">
          <div class="side-content right light">
            <h3 class="countdownHeading">Celebrate<br>Aakar 2022 !!<br></h3>
               <p>This year we are celebreating Aakar 2022 Inter-Collegiate Techno-Cultural Fest on June 3rd 2022 and June 4th 2022. <br><br>We hope to meet you soon!</p>
            <div class="countdown light right" id="js-countdown">
              <div class="countdown-item countdown-item">
                <div class="countdown__timer js-countdown-days"></div>
                <!-- end countdown__timer --> 
                <span>Day</span> </div>
              <!-- end countdown-item -->
              <div class="countdown-item">
                <div class="countdown__timer js-countdown-hours"></div>
                <span>Hrs</span> </div>
              <!-- end countdown-item -->
              <div class="countdown-item">
                <div class="countdown__timer js-countdown-minutes"></div>
                <span>Min</span> </div>
              <!-- end countdown-item -->
              <div class="countdown-item">
                <div class="countdown__timer js-countdown-seconds"></div>
                <span>Sec</span> </div>
              <!-- end countdown-item --> 
            </div>
            <!-- end countdown --> 
            <a href="{{route('all_events')}}" class="custom-button light"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">DISCOVER NOW</span></a> 
          </div>
          <!-- end side-content -->
                  </div>
            <!-- end data-scroll -->
        </div>
        <!-- end col-6 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>





@endsection