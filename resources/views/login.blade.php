<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
    <link rel="stylesheet" href="{{asset('css/login-signup.css')}}">
    <title>Facebook- log in or sign up</title>
    



</head>
<body style="background-color:#f0f2f5;">
    <div class="container">
        <div class="row">

          

            
             <div class="col-md-6" >
                 <div class="logo"  >
                   
                  <a href="/register"><img class="fb_logo _8ilh img" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Facebook" style="size: 50px ;"></a>
                <p style="font-size:30px;">Connect with friends and the world <br> around you on Facebook.</p>
            </div>
            </div>

             
             {{-- login form  starts--}}
             <div class="col-md-6  ">
                <div class=" form">
                 <div >
                    @if(session()->has('success'))
                    <div class="alert  alert-success">
                      <p>{{session('success')}}</p>
                    </div>
                    @endif
                 </div>
                    <form method="POST"  action="{{route('loginUser')}}" >
                        @csrf
                        <div class="form-group class1">
                            <input type="text" class="form-control name" placeholder="Email or Phone number" name='email'>
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                        </div>

                        <div class="form-group class2">
                            <input type="password" class="form-control password" placeholder="Password" name="password" >
                            <span class="text-danger">@error('password'){{$message}} @enderror</span>
                        </div> <br>
                        
                        <button class="btn btn-primary">Log In</button>
                        <div id="forget-pw">
                        <a href="">Forget Password?</a>
                        </div>  <hr>
                        <div class="submitbtn" >
                        {{-- <input type="submit" class=" btn mb-4 submit" value="Create new account" data-bs-toggle="modal" data-bs-target="#exampleModal" > --}}
                        <button type="button" class="btn submit " data-bs-toggle="modal" data-bs-target="#exampleModal">Create new account</button>
                       
                          

                    </div>
                    </form>



                {{-- modal of create account begin--}}
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                  
                         <div class="header">
                          <div class="first" >
                          <p >Sign Up <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></h4>
                          </div>
                          <p " id="shortpara">It’s quick and easy.</p>
                         </div><hr >
                  <form   action="{{route('registerUser')}}" method="POST">
                    @csrf              
                          <div class="modal-body">
                            <div class="body">
                              <div class="row">
                                                                      
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input class="form-control firstname" type="text" name="fname" placeholder="First Name" value="{{old('fname')}}" >
                                    <span class="text-danger small">@error('fname') {{$message}} @enderror</span>
                                  </div>
                                  
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input class="form-control lastname" type="text" name="lname" placeholder="last Name" value="{{old('lname')}}">
                                    <span class="text-danger small">@error('lname') {{$message}} @enderror</span><br>
                                    
                                  </div>
                                  
                                </div>     	
                    
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input class="form-control email" type="text" name="email" placeholder="Enter Your Email" value="{{old('email')}}">
                                    <span class="text-danger small">@error('email') {{$message}} @enderror</span> 
                                    <br>
                                  </div>
                                </div>
                    
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input class="form-control password" type="password" name="password" placeholder="Enter Password" >
                                    <span class="text-danger small">@error('password') {{$message}} @enderror</span>
                                  </div>
                                </div><br>
                    
                    
                                <p>Birthday <i class="fa-solid fa-circle-question fa-sm" style="color:gray;"></i></p>
                                <div class="col-md-4 month" >
                                  
                                    <select id="month" name="month"  value="{{old('month')}}"> 
                                      @php
                                      $date = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
                                      @endphp
                                      @for($i=0; $i<count($date);$i++)
                                        <option value="{{$date[$i]}}">{{$date[$i]}}</option>
                                      @endfor      
                                      
                                    </select>
                                    <span class="text-danger small">@error('month') {{$message}} @enderror</span>
                                </div>
                    
                                <div class="col-md-4 day" >
                                  <select id="days" name="day"  value="{{old('day')}}">   
                                    @for($i=1;$i<32;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                  </select>
                                  <span class="text-danger small">@error('day') {{$message}} @enderror</span>
                                </div>
                    
                                <div class="col-md-4 year">
                                  <select id="year" name='year'   value="{{old('year')}}" >   
                                    @for ($i=2022;$i>1990;$i--)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                  </select>
                                </div><br>
                    
                    
                                <p>Gender <i class="fa-solid fa-circle-question fa-sm" style="color:gray;"></i></p>
                                <div class="col-md-4 ">
                                  <div class="form-group Female">
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" id="female"   value="female" >
                                  </div>
                                  <span class="text-danger small">@error('gender') {{$message}} @enderror</span>
                                </div>
                    
                                <div class="col-md-4" >
                                  <div class="form-group male">
                                    <label for="male" >Male</label>
                                    <input type="radio" name="gender" id="male"   value="male" >
                                  </div>
                                  <span class="text-danger small">@error('gender') {{$message}} @enderror</span>
                                </div>
                    
                                <div class="col-md-4">
                                  <div class="form-group others">
                                    <label for="others" >Others</label>
                                    <input type="radio" name="gender" id="others"   value="others" >
                                  </div>
                                  <span class="text-danger small">@error('gender') {{$message}} @enderror</span>
                                </div>
                    
                    
                              </div>
                            </div>	
                          </div>
                          <p id="policies">By clicking Sign Up, you agree to our <a href="">Terms</a> , <a href="">Data Policy</a> and <a href="">Cookies Policy</a>. You may receive SMS Notifications from us and can opt out any time.</p>

                  
                        <button class="btn signup" type="submit" >sign up</button>

                        
                  </form> 

                        
                      </div>
                    </div>
                  </div>
                {{-- modal of create account ends--}}




                 </div> 
               
            </div>
            <div class="col-md-6 offset-md-6 mt-3 createpage"  >
                <a href="" class="createpage" >Create a Page </a>for a celebrity, brand or business.
             </div>
        </div>            
        </div>
   



    <footer class="footer ">
        <p >
        English (US)
       <a href="" id="nepali" style="color:black; text-decoration: none;"> नेपाली</a>
   
       <a href="" style="color:black;text-decoration: none;"> हिन्दी</a>
       <a href="" style="color:black;text-decoration: none;"> Français (France)</a>
        <a href="" style="color:black;text-decoration: none;"> Português (Brasil)</a>
       <a href="" style="color:black;text-decoration: none;">  日本語</a>
       <a href="" style="color:black;text-decoration: none;"> Français</a>
        <a href="" style="color:black;text-decoration: none;"> Deutsch</a>
       <a href="" style="color:black;text-decoration: none;">  Italiano</a>
        <a href="" style="color:black;text-decoration: none;"> العربية</a>
       <a href="" style="color:black;text-decoration: none;">  中文(简体)</a>
        Sign UpLog InMessengerFacebook LiteWatchPlacesGamesMarketplaceFacebook PayOculusPortalInstagramBulletinLocalFundraisersServicesVoting Information CenterGroupsAboutCreate AdCreate PageDevelopersCareersPrivacyCookiesAd choicesTermsHelpSettingsActivity log <br>
        Meta © 2022
    </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>