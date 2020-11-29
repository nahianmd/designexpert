@extends('layouts_land.master')

@section('title', "Home")

@section('head')

@endsection

@section('foot')
    <script>
        $(function(){
            var tags_check = $(":checkbox");
            $("#clear-history").click(function(e){
                e.preventDefault();
                tags_check.prop('checked', false);
            })
        })
    </script>
@endsection

@section('content')



{{-- ====================================
    Landing Page
======================================= --}}

<div class="container">
   <!--=============================================== NAVBAR ===========================================-->

    <nav class="navbar navbar-expand-lg site-header py-lg-4 py-xl-4 d-flex justify-content-between align-items-center bg-white menubar">

        <!-- Brand -->
        <span class="heading h5 d-md-block d-lg-block d-xl-block d-sm-none d-none ">
            CHOOSE #TAGS
        </span>


        <ul class="nav nav-pills border py-1 rounded" id="pills-tab" role="tablist">
            <li class="nav-item d-none d-sm-none d-md-block d-lg-block d-xl-block">
              <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Interests</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Tags</a>
            </li>
        </ul>

        <a href="" class="nav-link blue-link" id="clear-history">
            Clear History
        </a>
    </nav>
    <div class="row">
        <div class="col-md-9">
            <div class="tab-content mt-5" id="pills-tabContent">
        
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Posts</div>
        
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Interests</div>
        
                <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                    <span class="d-md-none d-lg-none d-xl-none d-sm-block d-block mb-4 ml-3">
                        <small style="color:red">CHOOSE</small>
                        <p class="h4 text-muted">#TAGS</p>
                    </span>
                    <div class="d-flex option-wrapper mb-4">
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#Music</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner"> 
                                <div class="name">#SportsClub</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#Love</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#PhotoOfTheDay</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#Cute</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#Summer</div>
                            </div>
                        </label>
                        
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner"> 
                                <div class="name">#DancingSouls</div>
                            </div>
                        </label>
                        
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#Fashion</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#Art</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner"> 
                                <div class="name">#Happy</div>
                            </div>
                        </label>
        
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner"> 
                                <div class="name">#SportsClub</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#Cute</div>
                            </div>
                        </label>
                        <label class="option-item">
                            <input type="checkbox" class="checkbox">
                            <div class="option-innner">
                                <div class="name">#PhotoOfTheDay</div>
                            </div>
                        </label>
                       
                        
        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5 pl-xl-5 pl-lg-5 pl-md-3 story-section">
            
            <label class="blue-text" for=""><small>Top Diamond Earners</small> </label>
            <a href="#">
                <div class="storybox rounded" 
                    style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('/images/background/1.jpg') no-repeat;
                            background-size: cover;
                            background-position: center center;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;">
                    <div class="story-body text-center d-flex">
                        <div class=""><img class="img-circle" src="images/avatars/law.jpg" alt="user"></div>
                        <div class="ml-2">
                            <p class="h4">Trafalgar Law</p>
                            <p>2 hours ago</p>
                        </div>
                        
                    </div>		  
                </div>
            </a>
            
            <a href="#">
                <div class="storybox rounded" 
                    style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('/images/background/2.jpg') no-repeat;
                            background-size: cover;
                            background-position: center center;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;">
                    <div class="story-body text-center d-flex">
                        <div class=""><img class="img-circle" src="images/avatars/law.jpg" alt="user"></div>
                        <div class="ml-2">
                            <p class="h4">Trafalgar Law</p>
                            <p>2 hours ago</p>
                        </div>
                        
                    </div>		  
                </div>
            </a>
            
            <a href="#">
                <div class="storybox rounded" 
                    style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('/images/background/3.jpeg') no-repeat;
                            background-size: cover;
                            background-position: center center;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;">
                    <div class="story-body text-center d-flex">
                        <div class=""><img class="img-circle" src="images/avatars/law.jpg" alt="user"></div>
                        <div class="ml-2">
                            <p class="h4">Trafalgar Law</p>
                            <p>2 hours ago</p>
                        </div>
                        
                    </div>		  
                </div>
            </a>
            
            
        </div>
    </div>
    
</div>



@endsection

