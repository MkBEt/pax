@extends('frontend.master_frontend')
@section('content')
<div class="page-content">
    <div class="container">
    <div class="signin__page m-t-30 p-t-40">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="section-title">
                    <h2 class="title">Sign into your account</h2>
                </div>
                <div class="logo col-md-12 p-t-20 p-b-20">
                    <i class="fa fa-rss fa-4x"></i>
                </div>
                <div class="signin_content col-md-12">
                    <p class="heading3 text-justify">मेरोरिपोर्टमा सदस्य भइसकेपछि तपाईले त्यहाँभित्र आफ्नो छुट्टै पाना (Profile Page) पाउनुहुनेछ, जहाँ तपाईले:</p>
                    <ul >
                        <li>कुनै पनि बिषयका समाचार, रिपोर्ट, लेख ब्लगको रुपमा पोष्ट गर्न,</li>
                        <li>कुनैपनि सामाजिक सवाल वा विषयमा छलफल शुरु गर्न,
                        </li>
                        <li>
                         कुनैपनि सवालसंग सम्बन्धित फोटो, भिडियोहरु अपलोड गर्न,
                        </li>
                        <li>साथीहरूसँग अलग्गै समुह (Group Create) बनाई छलफल गर्न,</li>
                        <li>नागरिक समाजको भुमिका र दायित्व बारे आफ्नो समुदायमा हुन लागेको वा भएको गतिविधिको प्रचार गर्न,</li>
                        <li>सामाजिक संजाल (फेसबुक र ट्वीटर)मा जस्तै मेरोरिपोर्टमा आफ्नो Status Update गर्न र उक्त स्टाटसलाइ आफ्नो फेसबुक वा ट्वीटरमा पनि लिंक Share गर्न, </li>
                        <li>नेपालमा नागरिक समाजसंस्था, आमसंचारमाध्यम र सार्वजनिक सरकारी निकायको पारस्परिक जवाफदेहितासंग सम्बन्धीत सुचना तथा समाचारहरु बारे जानकारी पाउन । 
                        </li>
                        <li>नागरिक समाजसंस्था, आमसंचारमाध्यम र सार्वजनिक सरकारी निकायको पारस्परिक जवाफदेहितासंग सम्बन्धीत सुचना तथा समाचारहरु संग्रह गरेर राख्न ।</li>
                        <li>
                         र  मेरोरिपोर्टमा नागरिक पत्रकारको रुपमा थाहा पाउनुपर्ने उपयोगी सामग्रीहरु पनि राखिएकोले अध्ययनका लागि ती सामग्रीहरु उपयोग गर्न पनि मेरोरिपोर्टमा आवद्ध हुन सकिन्छ ।</li>
                     </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="jumbotron signin_form p-t-0">
                    <div class="social_signin">
                        <h3 class="heading3">Sign In with</h3>
                        <div class="row">
                            {{-- <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="#" class="social_signin_button_facebook" style="background-color: #3B5998; border: 1px solid #3B5998;">
                                    <div class="facebook_logo">
                                    </div>
                                    <div class="sign_up_with_facebook p-l-20">Facebook</div>
                                </a>    
                            </div> --}}
                            
                            {{-- <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="javascript:;" class="social_signin_button_google" style="background-color: #d34836; border: 1px solid #d34836;">
                                    <div class="google_logo">
                                    </div>
                                    <div class="sign_up_with_google p-l-20">Google</div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="start_option_divider m-t-20 m-b-10">
                        {{-- <hr class="start_hr">
                        <div class="or text-center">or</div>
                        <hr class="start_hr"> --}}
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label" for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required="required" />
                                @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                                {{-- <span class="help-block">Enter valid email address.</span> --}}
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="control-label" for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" name="password" placeholder="Password(at least 6 characters)" required="required">

                             @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                            {{-- <span class="help-block">Password you entered is incorrect.</span> --}}
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"  {{ old('remember') ? 'checked' : '' }}><strong>Keep me signed in</strong></label>
                        </div>
                        <button id="submit" type="submit" class="btn m-t-10 m-b-15">Sign In</button>
                        <div class="forgotpwd text-center">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                  Forgot Your Password?
                              </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
