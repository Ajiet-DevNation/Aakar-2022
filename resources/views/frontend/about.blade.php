@extends('layouts.front')

@section('content')
<header class="page-header" data-background="{{asset('frontend/images/about.png')}}">
    <div class="container">
      <div class="inner">
        <h6>KNOW MORE</h6>
        <h2>About Us</h2>
      </div>
    </div>
  </header>
  <section class="content-section">
    <span class="section-bg" data-background="{{asset('frontend/images/section-bg01.png')}}" data-scroll data-scroll-speed="2"></span>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div data-scroll data-scroll-speed="-0.5">
            <div class="section-title text-center">
              <h2>Welcome to AAKAR 2022!</h2>
              <h4>Not just an Event, an Experience!</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div data-scroll data-scroll-speed="0.5">
          <div class="text-box">
            <h3>Learn more about AAKAR-2022</h3>
            <p style="font-weight:normal">
            A J Institute of Engineering & Technology is pleased to organize its fourth intercollegiate Techno-Cultural fest "AJIET AAKAR- 2022", on the 3<sup>rd</sup> and 4<sup>th</sup> of June, 2022 at AJIET Campus.
            AJIET AAKAR-2022 is a splendid platform for students to showcase their technical as well as cultural talents.
            It's an opportunity to acquire feedback from professional entertainers and an enthusiastic audience to watch and encourage the talents.
            </p>
          </div>
        </div>
        <a href="{{route('all_events')}}" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">DISCOVER NOW</span></a>
        <div class="spacing-20"></div>
        <div data-scroll data-scroll-speed="0.5"></div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div data-scroll data-scroll-speed="1">
            <div class="text-box">
              <h5>Learn more about AJIET</h5>
              <p style="font-weight:normal">A J Institute of Engineering & Technology, Mangaluru is approved by AICTE and the Govt. of Karnataka. 
              The campus is located within the city limits on the National Highway NH-66 in the Mangalore to Udupi Highway near Kottara Chowki.</p>
            </div>
          </div>
          <div data-scroll data-scroll-speed="0.5"></div> 
        </div> 
      </div>
    </div>
  </section>
  @if(count($organizers))
  <section class="content-section" style="padding-top: 0px">
		<span class="section-bg" data-background="images/section-bg06.png" data-scroll data-scroll-speed="2"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
			   <div data-scroll data-scroll-speed="-0.5">
            <div class="section-title text-center">
              <h6>Backbone of AAKAR</h6>
              <h2>Student Organizers</h2>
            </div>
				     </div>
          </div>
          @foreach ($organizers as $organizer)
          <div class="col-md-4 col-sm-6">
            <div data-scroll data-scroll-speed="0.5">
              <div class="speaker">
                <figure> <img src="{{$organizer->img ? Storage::url($organizer->img) : '' }}" alt="Image">
                  <figcaption>
                    <ul>
                      <li><a href="{{"mailto:".$organizer->email}}"><i class="fab fa-google"></i></a></li>
                      <li><a href="{{"tel:+91 ".$organizer->phone}}"><i class="fa fa-phone"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
                <div class="content-box">
                  <h4>{{$organizer->name}}</h4>
                  <small>{{$organizer->position}}</small> </div>
              </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
      
    @endif
    <section>
      <div class="row">
        <div class="col-12">
          <div data-scroll data-scroll-speed="-0.5">
             <div class="section-title text-center justify-content-center">
              <h6>Tech Team of AAKAR</h6> 
              <h2>This Site is developed by</h2>
               <img class="img-fluid" width="250" src="{{asset('frontend/images/devnation.png')}}" alt="" srcset="">
             </div>
              </div>
           </div>
      </div>
    </section>
@endsection
