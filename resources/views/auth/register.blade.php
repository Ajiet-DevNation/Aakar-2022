@extends('layouts.front')

@section('content')
<div class="container login-card">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg mb-4 p-4">
                <h2>Registration Info</h2>
                <ul>
                    <li class="reg__info__title"><b>Base Pass</b> </li>
                    <ul>
                        <li class="reg__info__description">Registrants can participate in a single event only</li>    
                        <li class="reg__info__description">Does not include a concert pass</li>    
                        <li class="reg__info__description">Does not include Mega-Events</li>
                    </ul>
                    <li class="reg__info__title"><b>Premium Pass</b> </li>
                    <ul>
                        <li class="reg__info__description">Registrants can participate in multiple events.</li>    
                        <li class="reg__info__description">Includes a concert pass</li>    
                        <li class="reg__info__description">Does not include Mega-Events</li>
                    </ul>
                    <li class="reg__info__title"><b>Mega Pass</b> </li>
                    <ul>
                        <li class="reg__info__description">Registrants can participate only in MEGA Events and payment will be ON SPOT.</li>    
                        <li class="reg__info__description">Does not include a concert pass</li>
                    </ul>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card shadow-lg mb-4 ">
                <div class="card-header login-header">
                    <h2 class="text-center">REGISTER</h2>
                  </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     

                        <div class="row mb-3 justify-content-center">
                            {{-- <label for="password"  class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-6 ">
                                <input id="password" placeholder="Password (min 8 characters)*" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <input id="password-confirm" placeholder="Confirm Password*" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            
                            <div class="col-md-6">
                                <input id="usn" placeholder="USN/College roll number*" value="{{ old('usn') }}"  type="text" class="form-control @error('usn') is-invalid @enderror" name="usn" autocomplete="usn">
                                @error('usn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <input id="phone" placeholder="Phone*" type="number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  name="phone" autocomplete="usn">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-12">
                                <input id="college_name" placeholder="College Name*" type="text" class="form-control @error('college_name') is-invalid @enderror" value="{{ old('college_name') }}"  name="college_name" autocomplete="usn">
                                @error('college_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        
                                <div class="col-md-12 mt-3">
                                    <label for="">Upload ID Card<span class="text-danger">*</span></label>
                                    <input  name="id_card" id="input-id" type="file" class="file" @error('id_card') is-invalid @enderror data-show-preview="false">
                                   
                                </div>
                                 @error('id_card')
                            
                                    <strong class="text-danger mt-1">{{ $message }}</strong>
                              
                            @enderror
                               
                         
                            <div class="col-md-12 mt-3">
                                <select name="pass_type" class="form-select select-pass" required aria-label="Default select example">
                                    <option disabled>Select Pass</option>
                                    <option value="base" {{old('pass_type') == 'base' ? 'selected':''}}>Base Pass - Single Event</option>
                                    <option value="premium" {{old('pass_type') == 'premium' ? 'selected':''}} >Premium Pass - Multiple Events</option>
                                    <option value="mega" {{old('pass_type') == 'mega' ? 'selected':''}}>Mega Pass</option>
                                  </select>
                                  @error('pass_type')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <div class="col-md-12 mt-3 select-single-event-div">
                                <label for="">Select Event </label>
                                <select class="form-select select-single-event" name="events[]">
                                    {{-- <option selected disabled>Select Event</option> --}}
                                @foreach ($events as $event)
                                @if ($event->eventType->type!="Mega Technical Events"&&$event->eventType->type!="Mega Cultural Events")
                                <option @if (old("events")){{ (in_array($event->id, old("events")) ? "selected":"") }}@endif value="{{$event->id}}">{{$event->name}}</option>
                                @endif
                                @endforeach
                                  </select>
                                  
                            </div>
                            <div class="col-md-12 mt-3 select-multiple-event-div">
                                <label for="">Select Events </label>
                                <select name="events[]" class="form-select select-multiple-event"  multiple="multiple">
                                    {{-- <option selected disabled>Select Event</option> --}}
                                @foreach ($events as $event)
                                @if ($event->eventType->type!="Mega Technical Events"&&$event->eventType->type!="Mega Cultural Events")
                                <option @if (old("events")){{ (in_array($event->id, old("events")) ? "selected":"") }}@endif value="{{$event->id}}">{{$event->name}}
                                </option>
                                @endif
                                @endforeach
                                  </select>
                            </div>
                            <p class="mt-2">
                            <b>Note: Concert Tickets are free with Premium Pass.</b>
                            </p>
                            <div class="col-md-12 mt-3 select-mega-event-div">
                                <label for="">Select Mega Events <small class="text-muted">(For Mega Events Payment is on-spot)</small></label>
                                <select id="megaID" name="events[]" class="form-select select-mega-event"  multiple="multiple" onchange="changeFunc()">
                                    {{-- <option selected disabled>Select Event</option> --}}
                                @foreach ($events as $event)
                                @if ($event->eventType->type=="Mega Technical Events"||$event->eventType->type=="Mega Cultural Events")
                                <option @if (old("events")){{ (in_array($event->id, old("events")) ? "selected":"") }}@endif value="{{$event->id}}">{{$event->name}}
                                </option>
                                @endif
                                @endforeach
                                </select>
                            </div>
                           
                        </div>
                        <div class="row mb-3 justify-content-center select-payment-text">
                            <div class="col-md-12 col-lg-6 text-center my-auto" >
                                <h1 class=" scan-heading">SCAN</h1>
                                <h3 class="scan-sub-heading">AND</h3>
                                <h1 class="scan-heading">PAY</h1>
                                <h1 class="scan-heading pay-150">₹150</h1>
                                <h1 class="scan-heading pay-300">₹300</h1>

                         
                            </div>
                            <div class="col-md-12 col-lg-6 select-payment-text">
               
                              <img src="{{ asset('frontend/images/upi5.jpeg') }}" class="img-fluid" alt="" srcset="">
                              <p class="text-center">ajaakar@axl</p>
                            </div>
                    
                        </div>
                        <div class="row mt-3 select-payment-text">
                            <div class="col-md-12 mt-3 ">
                                <input id="text" placeholder="Ref ID/Transaction ID*" type="text" class="select-payment-required @error('transaction_id') is-invalid @enderror" value="{{ old('transaction_id') }}"  class="form-control @error('transaction_id') is-invalid @enderror" name="transaction_id" value="{{ old('transaction_id') }}" autocomplete="off" >
                                @error('transaction_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                           
                         
                        </div>
                        <div class="row mb-3 justify-content-center select-payment-text">
                            
                      
                            <div class="col-md-12 mt-3 text-center ">
                                <label for="">Attach Payment Screenshot <span class="text-danger">*</span></label>
                                <input name="payment_screenshot" value="{{ old('payment_screenshot') }}"  class="select-payment-required file  @error('payment_screenshot') is-invalid @enderror" value="{{ old('transaction_id') }}"  class="form-control @error('transaction_id') is-invalid @enderror" id="input-pay-ss" type="file" class="file" data-show-preview="false">
                            </div>
                            @error('payment_screenshot')
                            <strong class="text-danger mt-1">{{ $message }}</strong>
                    @enderror
                        </div>
                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 text-center">
                              <a class="btn btn-link" href="{{ route('login') }}">
                                  Already Registered? Login
                              </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection