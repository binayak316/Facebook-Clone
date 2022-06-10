@extends('layout.skeleton')

@section('title','Facebook')
    
{{-- @endsection --}}


@section('page-header')
{{-- header part starts --}}
<div class="header">
    <div class="header_left">
        <img src="images/fb-logo.png" alt="logo of facebook">
            <div class="header_input">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" placeholder="Search Facebook">
            </div> 
    </div>

    <div class="header_middle">
        <div class="header_option active">
            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="35" width="35"><path d="M17.5 23.979 21.25 23.979C21.386 23.979 21.5 23.864 21.5 23.729L21.5 13.979C21.5 13.427 21.949 12.979 22.5 12.979L24.33 12.979 14.017 4.046 3.672 12.979 5.5 12.979C6.052 12.979 6.5 13.427 6.5 13.979L6.5 23.729C6.5 23.864 6.615 23.979 6.75 23.979L10.5 23.979 10.5 17.729C10.5 17.04 11.061 16.479 11.75 16.479L16.25 16.479C16.939 16.479 17.5 17.04 17.5 17.729L17.5 23.979ZM21.25 25.479 17 25.479C16.448 25.479 16 25.031 16 24.479L16 18.327C16 18.135 15.844 17.979 15.652 17.979L12.348 17.979C12.156 17.979 12 18.135 12 18.327L12 24.479C12 25.031 11.552 25.479 11 25.479L6.75 25.479C5.784 25.479 5 24.695 5 23.729L5 14.479 3.069 14.479C2.567 14.479 2.079 14.215 1.868 13.759 1.63 13.245 1.757 12.658 2.175 12.29L13.001 2.912C13.248 2.675 13.608 2.527 13.989 2.521 14.392 2.527 14.753 2.675 15.027 2.937L25.821 12.286C25.823 12.288 25.824 12.289 25.825 12.29 26.244 12.658 26.371 13.245 26.133 13.759 25.921 14.215 25.434 14.479 24.931 14.479L23 14.479 23 23.729C23 24.695 22.217 25.479 21.25 25.479Z"></path></svg>
        </div>
        <div class="header_option">
            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="35" width="35"><path d="M10.5 4.5c-2.272 0-2.75 1.768-2.75 3.25C7.75 9.542 8.983 11 10.5 11s2.75-1.458 2.75-3.25c0-1.482-.478-3.25-2.75-3.25zm0 8c-2.344 0-4.25-2.131-4.25-4.75C6.25 4.776 7.839 3 10.5 3s4.25 1.776 4.25 4.75c0 2.619-1.906 4.75-4.25 4.75zm9.5-6c-1.41 0-2.125.841-2.125 2.5 0 1.378.953 2.5 2.125 2.5 1.172 0 2.125-1.122 2.125-2.5 0-1.659-.715-2.5-2.125-2.5zm0 6.5c-1.999 0-3.625-1.794-3.625-4 0-2.467 1.389-4 3.625-4 2.236 0 3.625 1.533 3.625 4 0 2.206-1.626 4-3.625 4zm4.622 8a.887.887 0 00.878-.894c0-2.54-2.043-4.606-4.555-4.606h-1.86c-.643 0-1.265.148-1.844.413a6.226 6.226 0 011.76 4.336V21h5.621zm-7.122.562v-1.313a4.755 4.755 0 00-4.749-4.749H8.25A4.755 4.755 0 003.5 20.249v1.313c0 .518.421.938.937.938h12.125c.517 0 .938-.42.938-.938zM20.945 14C24.285 14 27 16.739 27 20.106a2.388 2.388 0 01-2.378 2.394h-5.81a2.44 2.44 0 01-2.25 1.5H4.437A2.44 2.44 0 012 21.562v-1.313A6.256 6.256 0 018.25 14h4.501a6.2 6.2 0 013.218.902A5.932 5.932 0 0119.084 14h1.861z"></path></svg>
        </div>
        <div class="header_option">
            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="35" width="35"><path d="M17.5 23.75 21.75 23.75C22.164 23.75 22.5 23.414 22.5 23L22.5 14 22.531 14C22.364 13.917 22.206 13.815 22.061 13.694L21.66 13.359C21.567 13.283 21.433 13.283 21.34 13.36L21.176 13.497C20.591 13.983 19.855 14.25 19.095 14.25L18.869 14.25C18.114 14.25 17.382 13.987 16.8 13.506L16.616 13.354C16.523 13.278 16.39 13.278 16.298 13.354L16.113 13.507C15.53 13.987 14.798 14.25 14.044 14.25L13.907 14.25C13.162 14.25 12.439 13.994 11.861 13.525L11.645 13.35C11.552 13.275 11.419 13.276 11.328 13.352L11.155 13.497C10.57 13.984 9.834 14.25 9.074 14.25L8.896 14.25C8.143 14.25 7.414 13.989 6.832 13.511L6.638 13.351C6.545 13.275 6.413 13.275 6.32 13.351L5.849 13.739C5.726 13.84 5.592 13.928 5.452 14L5.5 14 5.5 23C5.5 23.414 5.836 23.75 6.25 23.75L10.5 23.75 10.5 17.5C10.5 16.81 11.06 16.25 11.75 16.25L16.25 16.25C16.94 16.25 17.5 16.81 17.5 17.5L17.5 23.75ZM3.673 8.75 24.327 8.75C24.3 8.66 24.271 8.571 24.238 8.483L23.087 5.355C22.823 4.688 22.178 4.25 21.461 4.25L6.54 4.25C5.822 4.25 5.177 4.688 4.919 5.338L3.762 8.483C3.729 8.571 3.7 8.66 3.673 8.75ZM24.5 10.25 3.5 10.25 3.5 12C3.5 12.414 3.836 12.75 4.25 12.75L4.421 12.75C4.595 12.75 4.763 12.69 4.897 12.58L5.368 12.193C6.013 11.662 6.945 11.662 7.59 12.193L7.784 12.352C8.097 12.609 8.49 12.75 8.896 12.75L9.074 12.75C9.483 12.75 9.88 12.607 10.194 12.345L10.368 12.2C11.01 11.665 11.941 11.659 12.589 12.185L12.805 12.359C13.117 12.612 13.506 12.75 13.907 12.75L14.044 12.75C14.45 12.75 14.844 12.608 15.158 12.35L15.343 12.197C15.989 11.663 16.924 11.663 17.571 12.197L17.755 12.35C18.068 12.608 18.462 12.75 18.869 12.75L19.095 12.75C19.504 12.75 19.901 12.606 20.216 12.344L20.38 12.208C21.028 11.666 21.972 11.666 22.62 12.207L23.022 12.542C23.183 12.676 23.387 12.75 23.598 12.75 24.097 12.75 24.5 12.347 24.5 11.85L24.5 10.25ZM24 14.217 24 23C24 24.243 22.993 25.25 21.75 25.25L6.25 25.25C5.007 25.25 4 24.243 4 23L4 14.236C2.875 14.112 2 13.158 2 12L2 9.951C2 9.272 2.12 8.6 2.354 7.964L3.518 4.802C4.01 3.563 5.207 2.75 6.54 2.75L21.461 2.75C22.793 2.75 23.99 3.563 24.488 4.819L25.646 7.964C25.88 8.6 26 9.272 26 9.951L26 11.85C26 13.039 25.135 14.026 24 14.217ZM16 23.75 16 17.75 12 17.75 12 23.75 16 23.75Z"></path></svg>
        </div>
        <div class="header_option">
            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="35" width="35"><path d="M23.5 9.5H10.25a.75.75 0 00-.75.75v7c0 .414.336.75.75.75H17v5.5H4.5v-19h19v5zm0 14h-5v-6.25a.75.75 0 00-.75-.75H11V11h12.5v12.5zm1.5.25V4.25C25 3.561 24.439 3 23.75 3H4.25C3.561 3 3 3.561 3 4.25v19.5c0 .689.561 1.25 1.25 1.25h19.5c.689 0 1.25-.561 1.25-1.25z"></path></svg>
        </div>
    </div>

    <div class="header_right" >
         <div class="header_info">
             <img class="user_avatar" src="images/profiles/{{ auth()->user()->Image}}" alt="profilepicture" style="border-radius: 50%; height:45px;width:45px;padding:5px;object-fit:cover;">
             <h6 style="text-transform: capitalize;"> <a href="{{route('profile')}}" style="color:black;text-decoration:none;">{{ auth()->user()->fname }} {{auth()->user()->lname}}</a> </h6>
             {{-- <h6>ram</h6> --}}
         </div>
         {{-- right sides icons --}}
        <div class="right_option">
          
            <svg style="margin-top:-5px;" fill="currentColor" viewBox="0 0 44 44" width="20" height="20" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c jnigpg78 odw8uiq3 "><circle cx="7" cy="7" r="6"></circle><circle cx="22" cy="7" r="6"></circle><circle cx="37" cy="7" r="6"></circle><circle cx="7" cy="22" r="6"></circle><circle cx="22" cy="22" r="6"></circle><circle cx="37" cy="22" r="6"></circle><circle cx="7" cy="37" r="6"></circle><circle cx="22" cy="37" r="6"></circle><circle cx="37" cy="37" r="6"></circle></svg>
        </div>
        <div class="right_option">
           
            <svg style="margin-top:-5px;" viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c" fill="currentColor" height="20" width="20"><path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z"></path></svg>
        </div>
        <div class="right_option">
            
            <svg style="margin-top:-5px;" viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c" fill="currentColor" height="20" width="20"><path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z"></path></svg>
        </div>
        <div class="right_option">
            <div class="logout_prompt">
               <span data-bs-toggle="modal" data-bs-target="#exampleModal"><svg  style="margin-top:-5px;" fill="currentColor" viewBox="0 0 20 20" width="20" height="20" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c jnigpg78 odw8uiq3"><path d="M10 14a1 1 0 0 1-.755-.349L5.329 9.182a1.367 1.367 0 0 1-.205-1.46A1.184 1.184 0 0 1 6.2 7h7.6a1.18 1.18 0 0 1 1.074.721 1.357 1.357 0 0 1-.2 1.457l-3.918 4.473A1 1 0 0 1 10 14z"></path></svg></span>
               
               
                {{-- logout modals starts from here --}}
                <div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}

                          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}

                          <div class="main_div">
                              <div class="div_for_image">
                                <img src="images/profiles/{{ auth()->user()->Image}}" alt="profile_photo" style="border-radius: 50%; height:45px;width:45px;padding:5px;object-fit:cover;">
                              </div>
                              <div class="div_for_name">
                                  <h6 style="text-transform: capitalize;"> <a href="{{route('profile')}}" style="color:black;text-decoration:none;">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</a></h6>
                                  <p>See your profile</p>
                                  
                              </div>

                          </div>
                        </div>
                        <div class="modal-body">
                            <div class="icons-body">
                                <span class="background_for_icons"><i class="fa-solid fa-gear fa-lg"></i></span>                                
                                    <h6 >Settings & Privacy</h6><i  class="fa-solid fa-angle-right fa-lg"style="margin-right: 5px;"></i>
                                  
                                                    
                            </div><br>

                            <div class="icons-body">

                                <span class="background_for_icons"><i class="fa-solid fa-circle-question fa-lg"></i></span>
                                <h6>Help & Support</h6><i class="fa-solid fa-angle-right fa-lg"  style="margin-right: 5px;"></i>
                            </div><br>

                            <div class="icons-body">
                                <span class="background_for_icons"><i class="fa-solid fa-moon fa-lg"></i></span> 
                                <h6>Display & Accessibility</h6><i class="fa-solid fa-angle-right fa-lg"  style="margin-right: 5px;"></i>
                            </div><br>

                            <div class="icons-body">
                                <span class="background_for_icons"><i class="fa-solid fa-circle-info fa-lg"></i></span>
                                <h6>Give Feedback</h6>
                            </div><br>

                            <div class="icons-body">
                                <span></span>
                                    {{-- <a href="/logout "><span class="background_for_icons"> <i class="fa-solid fa-right-from-bracket fa-lg"></i></span> --}}
                                   <span class="background_for_icons"> <i class="fa-solid fa-right-from-bracket fa-lg"></i></span>
                                <h6> <a href="/logout " style="text-decoration: none;color:black;'">Log Out</a></h6>
                            </div><br>
                            <small>Privacy  · Terms  · Advertising  · Ad Choices   · Cookies  · More .  Meta © 2022</small>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                {{-- logout modals ens from here --}}
            </div>
        </div>
    </div>
</div>
@endsection
{{-- header part ends --}}



{{-- body starts --}}
@section('page-body')
<div class="main-body">
    {{-- sidebar starts --}}
    <div class="sidebar" >
        <div class="sidebarRow">
            <img class="user_avatar" src="images/profiles/{{ auth()->user()->Image}}" alt="profilepicture" style="border-radius: 50%; height:45px;width:45px;object-fit:cover;">
            <h4 style="text-transform: capitalize;">  <a href="{{route('profile')}}" style="color:black;text-decoration:none;">{{ auth()->user()->fname}} {{ auth()->user()->lname }}</a></h4>
        </div>
        <div class="sidebarRow">
            <img class="hu5pjgll bixrwtb6 icons" src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/S0U5ECzYUSu.png" style="height:36px;width:36px" alt="">
            <h4>Friends</h4>
        </div>
        <div class="sidebarRow">
            <img class="hu5pjgll bixrwtb6 icons" src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/PrjLkDYpYbH.png" style="height:36px;width:36px" alt="">
            <h4>Groups</h4>
        </div>
        <div class="sidebarRow">
            <img class="hu5pjgll bixrwtb6 icons" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/lVijPkTeN-r.png" style="height:36px;width:36px" alt="">
            <h4>Saved</h4>
        </div>
        <div class="sidebarRow">
            <img class="hu5pjgll bixrwtb6 icons" src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/D2y-jJ2C_hO.png" style="height:36px;width:36px" alt="">
            <h4>MarketPlace</h4>
        </div>
        <div class="sidebarRow">
            <img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/duk32h44Y31.png" style="height:36px;width:36px" alt="">            <h4>Watch</h4>
        </div>
        <div class="sidebarRow">
            <img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/he-BkogidIc.png" style="height:36px;width:36px" alt="">            <h4>Memories</h4>
        </div>
        <div class="sidebarRow">
            <svg fill="currentColor" viewBox="0 0 16 16" width="2em" height="2em" class="  a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c jnigpg78 odw8uiq3"><g fill-rule="evenodd" transform="translate(-448 -544)"><path fill-rule="nonzero" d="M452.707 549.293a1 1 0 0 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L456 552.586l-3.293-3.293z"></path></g></svg>
            <h4>See more</h4>
        </div>
    </div>
    
    {{-- sidebar ends --}}

    {{-- middle section news feed starts --}}
    <div class="feed" style="overflow-y:scroll;overflow-x:hidden;overflow-y:hidden;">
        <div class="storyReel">
            <label id="creatingstory" class="story_creator"  data-bs-toggle="modal" data-bs-target="#create_personal_story" style="background-image:url('images/profiles/{{ auth()->user()->Image}}');">
                {{-- this modal will be at last of the page --}}
                <svg fill="currentColor"   data-bs-toggle="modal" data-bs-target="#create_personal_story"        viewBox="0 0 20 20" width="2em" height="2em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 ljqsnud1 jnigpg78 odw8uiq3"><g fill-rule="evenodd" transform="translate(-446 -350)"><g fill-rule="nonzero"><path d="M95 201.5h13a1 1 0 1 0 0-2H95a1 1 0 1 0 0 2z" transform="translate(354.5 159.5)"></path><path d="M102.5 207v-13a1 1 0 1 0-2 0v13a1 1 0 1 0 2 0z" transform="translate(354.5 159.5)"></path></g></g></svg>  
               <p>create story</p>           
            </label>   
            <div class="Right_subsection">

                <div class="second_right_subsection" id="box">
                            {{-- story starts --}}
                            @foreach($stories as $story)
                        <div style="background-image: url('images/stories/{{$story->storyImg}}')" class="story" id="Div1">
                            <img class="user_avatar story_avatar" src="images/profiles/{{$story->user->Image}}" alt="first story" style="border-radius: 50%;border:4px solid #166ada ;height:40px;width:40px;">
                            {{-- <img class="user_avatar story_avatar" src="images/p.jpg" alt="first story" style="border-radius: 50%;border:4px solid #166ada ;height:40px;width:40px;"> --}}
                            <h6>{{$story->user->fname}} {{$story->user->lname}}</h6>
                        </div>
                        @endforeach
                        {{-- story ends --}}                       
                </div>
                <div class="nav">
                    <div class="next" onclick="moveNext()">
                        <svg  id="left" fill="currentColor" viewBox="0 0 20 20" width="2.5em" height="2.5em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh rgmg9uty b73ngqbp"><path d="M7.8 4.53 13.273 10 7.8 15.47a.75.75 0 0 0 1.061 1.06l6-6a.751.751 0 0 0 0-1.06l-6-6A.75.75 0 0 0 7.8 4.53z"></path></svg>
                    </div>
                    <div class="pre" onclick="movePrev()">
                        <svg  id="right" fill="currentColor" viewBox="0 0 20 20" width="2.5em" height="2.5em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh rgmg9uty b73ngqbp"><path d="M12.2 4.53 6.727 10l5.47 5.47a.75.75 0 0 1-1.061 1.06l-6-6a.751.751 0 0 1 0-1.06l6-6A.75.75 0 1 1 12.2 4.53z"></path></svg>
                    </div>
                </div>  
            </div>
        </div> 
        {{-- message sender starts --}}
        <div class="messageSender">
            <div class="messageSender_top">
                <img class="user_avatar " src="images/profiles/{{ auth()->user()->Image}}" alt="first story" style="border-radius: 50%; height:45px;width:45px;object-fit:cover;">
                    {{-- writing a post  modals starts from here --}}
                   <!-- Button trigger modal -->
                   <button type="button" class="btn post_modal" data-bs-toggle="modal" data-bs-target="#exampleModal_post">
                   What's on your mind, {{auth()->user()->fname}}?                    
                  </button>
                  @if(session()->has('prompt'))
                   <div class=" alert-success" >
                      <small>{{session('prompt')}}</small> 
                   </div>
                   @endif
                <!-- Modal -->
                        <!-- Modal -->
                        <form action="{{route('PostCreate')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="modal fade" id="exampleModal_post" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:200px;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" >Create Post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                        <div class="modal-body">
                                            <div class="modal-body1">
                                                <div class="image_of_profile">
                                                    <img src="images/profiles/{{ auth()->user()->Image}}" alt="photo of mine" height="40" width="40" style="object-fit: cover;">
                                                </div>
                        
                                                <div class="profile_name">
                                                    <h6 style="text-transform: capitalize;">{{auth()->user()->fname}} {{auth()->user()->lname}}</h6>
                                                    <button  class="btn btn-sm " disabled ><i class="fa-solid fa-earth-americas"></i> Public <i class="fa-solid fa-angle-down"></i></button>
                                                </div>
                                            </div>
                                            <div class="textarea">
                                            <textarea name="TextPost" id="" cols="55" rows="5" placeholder="What's on your mind, {{auth()->user()->fname}}?"></textarea>
                                            </div>
                                            {{-- this area is for photo preview  starts--}}
                                            <div  id="post_image_preview" style="height:200px;width:200px;margin-bottom: 40px;">
                                                {{-- <img src="images/post/{{ auth()->user()->Img}}" alt="post preview image" style="height: 100%;width: 100%;margin-left: 13%;"> --}}
                                            </div>    
                                              {{-- this area is for photo preview ends --}}
                                            <div class="inputs">
                                                <div class="addYourPost">
                                                    <h6>Add to your post</h6>
                                                </div>
                                                <div class="logosharu">
                                                    <div class="ok1">                                                       
                                                        <label for="select_post_preview_image"><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/gFS7G2Hd9KE.png&quot;); background-position: 0px -183px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i></label>
                                                        <input type="file" id="select_post_preview_image" name="inputimage" style="display:none;">
                                                    </div>
                                                    <div class="ok1">
                                                        <span><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/gFS7G2Hd9KE.png&quot;); background-position: 0px -158px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i></span>
                                                    </div>
                                                    <div class="ok1">
                                                        <span><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/gFS7G2Hd9KE.png&quot;); background-position: 0px -133px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i></span>
                                                    </div>
                                                    <div class="ok1">
                                                        <span><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yE/r/HyeXO0sd7uk.png&quot;); background-position: 0px -225px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i></span>
                                                    </div>
                                                    <div class="ok1">
                                                        <span><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/IUYFS2LyvHB.png&quot;); background-position: 0px -100px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i></span>
                                                    </div>
                                                    <div class="ok1">
                                                        <span><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/gFS7G2Hd9KE.png&quot;); background-position: 0px -108px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn  btn-primary">Post</button>
                                        </div>                                    
                                </div>
                                </div>
                            </div>

                        </form>
            </div>
            {{-- writing a post  modals ends from here --}}
            <div class="messageSender_bottom">
                <div class="messageSender_option">
                    <svg  style="color:red;" fill="currentColor" viewBox="0 0 24 24" width="20" height="20" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 fxtw5amg rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="M113.029 2.514c-.363-.088-.746.014-1.048.234l-2.57 1.88a.999.999 0 0 0-.411.807v8.13a1 1 0 0 0 .41.808l2.602 1.901c.219.16.477.242.737.242.253 0 .508-.077.732-.235.34-.239.519-.65.519-1.065V3.735a1.25 1.25 0 0 0-.971-1.22m-20.15 6.563c.1-.146 2.475-3.578 5.87-3.578 3.396 0 5.771 3.432 5.87 3.578a.749.749 0 0 1 0 .844c-.099.146-2.474 3.578-5.87 3.578-3.395 0-5.77-3.432-5.87-3.578a.749.749 0 0 1 0-.844zM103.75 19a3.754 3.754 0 0 0 3.75-3.75V3.75A3.754 3.754 0 0 0 103.75 0h-10A3.754 3.754 0 0 0 90 3.75v11.5A3.754 3.754 0 0 0 93.75 19h10z" transform="translate(354 158.5)"></path><path d="M98.75 12c1.379 0 2.5-1.121 2.5-2.5S100.129 7 98.75 7a2.503 2.503 0 0 0-2.5 2.5c0 1.379 1.121 2.5 2.5 2.5" transform="translate(354 158.5)"></path></g></g></svg>
                    <h3>Live video</h3>
                </div>
                <div class="messageSender_option">
                    <svg  style="color:rgb(22, 187, 22);"fill="currentColor" viewBox="0 0 24 24" width="20" height="20" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 j58f7537 rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="m96.968 22.425-.648.057a2.692 2.692 0 0 1-1.978-.625 2.69 2.69 0 0 1-.96-1.84L92.01 4.32a2.702 2.702 0 0 1 .79-2.156c.47-.472 1.111-.731 1.774-.79l2.58-.225a.498.498 0 0 1 .507.675 4.189 4.189 0 0 0-.251 1.11L96.017 18.85a4.206 4.206 0 0 0 .977 3.091s.459.364-.026.485m8.524-16.327a1.75 1.75 0 1 1-3.485.305 1.75 1.75 0 0 1 3.485-.305m5.85 3.011a.797.797 0 0 0-1.129-.093l-3.733 3.195a.545.545 0 0 0-.062.765l.837.993a.75.75 0 1 1-1.147.966l-2.502-2.981a.797.797 0 0 0-1.096-.12L99 14.5l-.5 4.25c-.06.674.326 2.19 1 2.25l11.916 1.166c.325.026 1-.039 1.25-.25.252-.21.89-.842.917-1.166l.833-8.084-3.073-3.557z" transform="translate(352 156.5)"></path><path fill-rule="nonzero" d="m111.61 22.963-11.604-1.015a2.77 2.77 0 0 1-2.512-2.995L98.88 3.09A2.77 2.77 0 0 1 101.876.58l11.603 1.015a2.77 2.77 0 0 1 2.513 2.994l-1.388 15.862a2.77 2.77 0 0 1-2.994 2.513zm.13-1.494.082.004a1.27 1.27 0 0 0 1.287-1.154l1.388-15.862a1.27 1.27 0 0 0-1.148-1.37l-11.604-1.014a1.27 1.27 0 0 0-1.37 1.15l-1.387 15.86a1.27 1.27 0 0 0 1.149 1.37l11.603 1.016z" transform="translate(352 156.5)"></path></g></g></svg>
                    <h3>Photo/video</h3>
                </div>
                <div class="messageSender_option">
                    <svg  style="color:rgb(222, 222, 103);" fill="currentColor" viewBox="0 0 24 24" width="20" height="20" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 mu8pnim0 rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="M107.285 13c.49 0 .841.476.712.957-.623 2.324-2.837 4.043-5.473 4.043-2.636 0-4.85-1.719-5.473-4.043-.13-.48.222-.957.712-.957h9.522z" transform="translate(353.5 156.5)"></path><path fill-rule="nonzero" d="M114.024 11.5c0 6.351-5.149 11.5-11.5 11.5s-11.5-5.149-11.5-11.5S96.173 0 102.524 0s11.5 5.149 11.5 11.5zm-2 0a9.5 9.5 0 1 0-19 0 9.5 9.5 0 0 0 19 0z" transform="translate(353.5 156.5)"></path><path d="M99.524 8.5c0 .829-.56 1.5-1.25 1.5s-1.25-.671-1.25-1.5.56-1.5 1.25-1.5 1.25.671 1.25 1.5m8.5 0c0 .829-.56 1.5-1.25 1.5s-1.25-.671-1.25-1.5.56-1.5 1.25-1.5 1.25.671 1.25 1.5m-.739 4.5h-9.522c-.49 0-.841.476-.712.957.623 2.324 2.837 4.043 5.473 4.043 2.636 0 4.85-1.719 5.473-4.043.13-.48-.222-.957-.712-.957m-2.165 2c-.667.624-1.592 1-2.596 1a3.799 3.799 0 0 1-2.596-1h5.192" transform="translate(353.5 156.5)"></path></g></g></svg>
                    <h3>Feeling/activiy</h3>
                </div>
            </div>
        </div>
        {{-- message sender ends --}}
        {{-- create room starts  --}}
        <div class="create_room">
            <div class="logos_room" >
                <div class="yetti_logo">
                <span><i style="color:blueviolet" class="fa-solid fa-video"></i></span>
                <h6>Create room</h6>
                </div>
                <div style="display:flex;" class="inside_images">

                    <img src="images/pp.jpg" alt=""style="border-radius: 50%; height:45px;width:45px;border:4px solid #166ada">
                    <img src="images/mardi.jpg" alt=""style="border-radius: 50%; height:45px;width:45px;border:4px solid #166ada">
                    <img src="images/p2.jpg" alt=""style="border-radius: 50%; height:45px;width:45px;border:4px solid #166ada">
                    <img src="images/p3.jpg" alt=""style="border-radius: 50%; height:45px;width:45px;">
                    <img src="images/flag.jpg" alt=""style="border-radius: 50%; height:45px;width:45px;">
                      
                </div>
            </div>


        </div>
        {{-- create room ends  --}}


        {{-- post starts --}}
        @foreach($posts as $post)
        <div class="post" id="refresh-section">
            <div class="post_top">
                <img class="user_avatar post_avatar " src="images/profiles/{{$post->user->Image}}" alt="post" <img src="images/pp.jpg" alt=""style="border-radius: 50%;border:4px solid #166ada; height:55px;width:55px;object-fit:cover;">
                <div class="post_topInfo">
                    {{-- <h5>Binayak Pokhrel</h5> --}}
                    <h5>{{$post->user->fname}} {{$post->user->lname}}</h5>
                    
                    <p>{{$post->created_at->diffForHumans()}}<span aria-hidden="true"> · </span> <svg fill="currentColor" viewBox="0 0 16 16" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh cyypbtt7 fwizqjfa" title="Shared with Public"><title>Shared with Public</title><g fill-rule="evenodd" transform="translate(-448 -544)"><g><path d="M109.5 408.5c0 3.23-2.04 5.983-4.903 7.036l.07-.036c1.167-1 1.814-2.967 2-3.834.214-1 .303-1.3-.5-1.96-.31-.253-.677-.196-1.04-.476-.246-.19-.356-.59-.606-.73-.594-.337-1.107.11-1.954.223a2.666 2.666 0 0 1-1.15-.123c-.007 0-.007 0-.013-.004l-.083-.03c-.164-.082-.077-.206.006-.36h-.006c.086-.17.086-.376-.05-.529-.19-.214-.54-.214-.804-.224-.106-.003-.21 0-.313.004l-.003-.004c-.04 0-.084.004-.124.004h-.037c-.323.007-.666-.034-.893-.314-.263-.353-.29-.733.097-1.09.28-.26.863-.8 1.807-.22.603.37 1.166.667 1.666.5.33-.11.48-.303.094-.87a1.128 1.128 0 0 1-.214-.73c.067-.776.687-.84 1.164-1.2.466-.356.68-.943.546-1.457-.106-.413-.51-.873-1.28-1.01a7.49 7.49 0 0 1 6.524 7.434" transform="translate(354 143.5)"></path><path d="M104.107 415.696A7.498 7.498 0 0 1 94.5 408.5a7.48 7.48 0 0 1 3.407-6.283 5.474 5.474 0 0 0-1.653 2.334c-.753 2.217-.217 4.075 2.29 4.075.833 0 1.4.561 1.333 2.375-.013.403.52 1.78 2.45 1.89.7.04 1.184 1.053 1.33 1.74.06.29.127.65.257.97a.174.174 0 0 0 .193.096" transform="translate(354 143.5)"></path><path fill-rule="nonzero" d="M110 408.5a8 8 0 1 1-16 0 8 8 0 0 1 16 0zm-1 0a7 7 0 1 0-14 0 7 7 0 0 0 14 0z" transform="translate(354 143.5)"></path></g></g></svg></p>
                </div>
            </div>
            <div class="post_bottom">
                <p>{{$post->body}}</p>
            </div>
            <div class="post_image">
                <img src="images/post/{{$post->Img}}" alt="">
            </div>
            <div class="like_share_comment">
                <div class="reacts" style="display: flex;width: 100%;">
                    <img  class="j1lvzwm4 img1" height="18" role="presentation" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e" width="18">
                    <img class="j1lvzwm4 img2" height="18" role="presentation" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='10.25%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FEEA70'/%3e%3cstop offset='100%25' stop-color='%23F69B30'/%3e%3c/linearGradient%3e%3clinearGradient id='d' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23472315'/%3e%3cstop offset='100%25' stop-color='%238B3A0E'/%3e%3c/linearGradient%3e%3clinearGradient id='e' x1='50%25' x2='50%25' y1='0%25' y2='81.902%25'%3e%3cstop offset='0%25' stop-color='%23FC607C'/%3e%3cstop offset='100%25' stop-color='%23D91F3A'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.921365489 0 0 0 0 0.460682745 0 0 0 0 0 0 0 0 0.35 0'/%3e%3c/filter%3e%3cpath id='b' d='M16 8A8 8 0 110 8a8 8 0 0116 0'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='url(%23d)' d='M3 8.008C3 10.023 4.006 14 8 14c3.993 0 5-3.977 5-5.992C13 7.849 11.39 7 8 7c-3.39 0-5 .849-5 1.008'/%3e%3cpath fill='url(%23e)' d='M4.541 12.5c.804.995 1.907 1.5 3.469 1.5 1.563 0 2.655-.505 3.459-1.5-.551-.588-1.599-1.5-3.459-1.5s-2.917.912-3.469 1.5'/%3e%3cpath fill='%232A3755' d='M6.213 4.144c.263.188.502.455.41.788-.071.254-.194.369-.422.371-.78.011-1.708.255-2.506.612-.065.029-.197.088-.332.085-.124-.003-.251-.058-.327-.237-.067-.157-.073-.388.276-.598.545-.33 1.257-.48 1.909-.604a7.077 7.077 0 00-1.315-.768c-.427-.194-.38-.457-.323-.6.127-.317.609-.196 1.078.026a9 9 0 011.552.925zm3.577 0a8.953 8.953 0 011.55-.925c.47-.222.95-.343 1.078-.026.057.143.104.406-.323.6a7.029 7.029 0 00-1.313.768c.65.123 1.363.274 1.907.604.349.21.342.44.276.598-.077.18-.203.234-.327.237-.135.003-.267-.056-.332-.085-.797-.357-1.725-.6-2.504-.612-.228-.002-.351-.117-.422-.37-.091-.333.147-.6.41-.788z'/%3e%3c/g%3e%3c/svg%3e" width="18">
                    <img class="j1lvzwm4 img3" height="18" role="presentation" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FF6680'/%3e%3cstop offset='100%25' stop-color='%23E61739'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/%3e%3c/g%3e%3c/svg%3e" width="18">
                    &nbsp;&nbsp; <p class="forlikes">  {{ $post->likes()->count() ?:0 }} </p> &nbsp;likes              
                             
                </div>
                <div class="comment_share">
                    <p>40 comments</p>
                    <p> 10 shares</p>
                </div>
                
            </div>
           
            <hr class="post_hr">
            <div class="post_options">
                <div class="post_option" >
                    {{-- <form class="like" action="{{route('likePost')}}" method="POST" id="like_post_form"> --}}
                        {{-- @csrf --}}
                        <input type="number" class="likeOn" id="likeOn" style="display: none;" name="likeOn" value="{{$post->id}}">
                        <button class="likeBtn" id="likeBtn" type="submit">
                            <span><i class="fa fa-thumbs-up " style="font-size:24px;color:{{Auth::user()->like()->where('post_id',$post->id)->count() > 0 ? 'blue': '' }}"> </i></span>
                            {{-- <span id="totalLikes"></span> --}}
                           <span style="color:gray;">Like</span>
                        </button>
                    {{-- </form> --}}
                </div> 

                   

                <div class="post_option">
                    <span><i class="fa-regular fa-message fa-xl"></i></span>
                    <p>comment</p>
                </div> 
                <div class="post_option">
                    <span><i class="fa fa-share-alt fa-xl"></i></span>
                    <p>Like</p>
                </div> 
            </div>
        </div>

        @endforeach
    </div>
    {{-- middle section news feed ends --}}

    <div class="rightside_post">
        <div class="friendlist">
            <h6>Birthdays</h6>
            <div class="wish" >
                <span><i style="color:skyblue;" class="fa-solid fa-gift"></i></span>
                <p><strong>Mark Zuckerberg's</strong> birthday is today</p>
             </div> <hr style="color: gray">
             
        </div>
        <div class="contacts">
            
            <div class="contact">
                <img src="images/17500.jpg" alt="" height="53" width="50" style="border:4px solid #166ada"><h5>Ram Thapa </h5>
            </div> <br>
            <div class="contact">
                <img src="images/pp.jpg" alt="" height="53" width="50" style="border:4px solid #166ada"><h5>आविष्कार थापा </h5>
            </div> <br>
            <div class="contact">
                <img src="images/p.jpg" alt="" height="53" width="50" style="border:4px solid #166ada"><h5>Ram bahadur chettri</h5>
            </div> <br>
              <div class="contact">
                <img src="images/17500.jpg" alt="" height="53" width="50"><h5>Jerry Thapa</h5>
            </div> <br>
            <div class="contact">
                <img src="images/3.jpg" alt="" height="53" width="50" style="border:4px solid #166ada"><h5>krishna prasad katuwal </h5>
            </div> <br>
            <div class="contact">
                <img src="images/p3.jpg" alt="" height="53" width="50" style="border:4px solid #166ada"><h5>Rajesh Hamal</h5>
            </div> <br>
            <div class="contact">
                <img src="images/17500.jpg" alt="" height="53" width="50" style="border:4px solid #166ada"><h5>आशिम थापा </h5>
            </div> <br> 
            <div class="contact">
                <span><svg fill="currentColor" viewBox="0 0 16 16" width="3em" height="3em" clacdss="  a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c jnigpg78 odw8uiq3"><g fill-rule="evenodd" transform="translate(-448 -544)"><path fill-rule="nonzero" d="M452.707 549.293a1 1 0 0 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L456 552.586l-3.293-3.293z"></path></g></svg> &nbsp; See More </span>
            </div> <br> 

             <hr style="margin-top:-8px;">  

       </div>
    </div>
</div>


{{-- modal of the sotries starts --}}

<form action="{{route('story')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="create_personal_story" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" id="modal_content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Create Story</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="main_body">
                <div class="body" id="story_preview">
                    {{-- <img src="images/p.jpg" alt="storyphoto"> --}}
        
                </div>
                <div class="body" id="status_preview">
                    <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh rgmg9uty b73ngqbp"><path d="M7.8 4.53 13.273 10 7.8 15.47a.75.75 0 0 0 1.061 1.06l6-6a.751.751 0 0 0 0-1.06l-6-6A.75.75 0 0 0 7.8 4.53z"></path></svg>
                    <p>Create a text story</p>
        
                </div>
            </div>
            <div class="modals_footer">
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">preview the photo</button> --}}
                <label for="story" class="btn btn-info" style="color:white;">View Image</label>
                <input type="file" name="uploadTheStory" id="story"  style="display: none;">
    
    
                <button type="submit" class="btn btn-primary">Upload the photo</button>
            </div>
          </div>
        </div>
      </div>
</form>

{{-- modal of the sotries ends --}}


{{-- script for like button starts --}}


<script type="text/javascript">

$(document).ready(function(){
    $('.likeBtn').click(function(e){
        e.preventDefault();
        // var likeOn = $('.likeOn').val();
        var likeOn = $(this).parent().find('.likeOn').val();
        // alert(likeOn);
        var this_ = $(this);
       
        $.ajax
        ({
            // alert(likeOn);
            type:"GET",
            url: "{{route('likePost')}}",
            data :{
                "_token": "{{ csrf_token() }}",
                "likeOn": likeOn,
            },

            success :function(data){
                console.log(data)
                this_.parent().parent().parent().find('.forlikes').html(data.likes);

                if(data.message == "liked"){
                    this_.parent().find('.fa-thumbs-up').css('color','blue');

                }else{
                    this_.parent().find('.fa-thumbs-up').css('color','black');


                }
                
            }
        });
    });
});













// $(function () {
        //     $('#like_post_form').submit(function (e) {
        //         e.preventDefault()  // prevent the form from 'submitting'

        //         var url = e.target.action  // get the target
        //         var formData = $(this).serialize() // get form data
        //         $.post(url, formData, function (response) { // send; response.data will be what is returned
        //             alert('report sent');
        //         });
        //     });
        // });




// $('#like_post_form').on('submit', function(e){
//     e.preventDefault();
//     $.ajax({
//         type:"post"
//                       url: "{{route('likePost')}}"
//                       data: $("like_post_form").serialize(),
//                       success:function(response){

//                       },
//                       error:function(error){
//                         console.log(error)
//                         alert("not send");
//                       }



//     });
// });
   









// jQuery(document).ready(function(){
//             jQuery('#likeBtn').click(function(e){
//                e.preventDefault();
//                $.ajaxSetup({
//                   headers: {
//                       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//                   }
//               });
//                jQuery.ajax({
//                   url: "{{ route( 'likePost' )}}",
//                   method: 'post',
//                 //   data: {
//                 //      name: jQuery('#name').val(),
//                 //      type: jQuery('#type').val(),
//                 //      price: jQuery('#price').val()
//                 //   },
//                   success: function(result){
//                      console.log(result);
//                   }});
//                });
//             });
// $(document).ready(function(){
//     $(document).on('click',' .post ', function(){
//         $.ajax({
//             url:{{ route('likePost')}},
//             method:POST,
//             dataType:'php',
//             success: function(response){
//                 $(#likeOn).html(response);
//             }
//         });

//     });
// });













// function refreshDiv(){
//     $('#refresh-section').load(location.href + " #refresh-section ");









</script>
{{-- script for like button ends --}}





<script>
    function previewImages() {
    var preview = document.querySelector('#post_image_preview');
    
    if (this.files) {
    [].forEach.call(this.files, readAndPreview);
    }
    
    function readAndPreview(file) {
    
    // Make sure `file.name` matches our extensions criteria
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
    return alert(file.name + " is not an image");
    } // else...
    
    var reader = new FileReader();
    
    reader.addEventListener("load", function() {
    var image = new Image();
    image.height = 100;
    image.title  = file.name;
    image.src    = this.result;
    preview.appendChild(image);
    });
    
    reader.readAsDataURL(file);
    }
    }
    document.querySelector('#select_post_preview_image').addEventListener("change", previewImages);
</script>

<script src="/js/storySlider.js"></script>

<script src="/js/storypreview.js"></script>

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


@endsection
{{-- body ends --}}

{{-- @section('script')
@endsection --}}


