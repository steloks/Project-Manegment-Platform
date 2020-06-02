<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8"/>
    <meta name='viewport' content='width=device-width'/>
    <link href="{{ asset('css/clientAreaLibraries.css?v='.filemtime(public_path("css/clientAreaLibraries.css"))) }}"
          rel="stylesheet">
    <link href="{{ asset('css/clientArea.css?v='.filemtime(public_path("css/clientArea.css"))) }}" rel="stylesheet">

    @yield('head-tags')
</head>

<body>
<div class="left-side">
    <div class="sec1">
        <i class='bx bx-shape-polygon'></i>
        <h1 class="title">PROJECTS</h1>
        <i class='bx bx-search'></i>
    </div>
      <div class="user-section">
        <div class="user-info">
            <div class="user-img">
                <img src="{{asset('images/Userpic.png')}}" class="user-image">
            </div>
            <div class="user">
                <div class="username">Emilee Simchenko</div>
                <div class="rank">Product Owner</div>
            </div>

            <div>
                <i id="user-button" class=' bx bx-menu' ></i>

            </div>
        </div>
        <div class="tasks">
            <div class="compleated-task">
                <div class="count">372</div>
                <div class="compl">Compleated Tasks</div>
            </div>
            <div class="open-task">
                <div class="count">11</div>
                <div class="open">Open Tasks</div>
            </div>
        </div>
      </div>


    <div class="menu-section">
        <h1>MENU</h1>
        <div class="user-menu">
           <div>
               <a href="#">Home</a>
           </div>
            <div>
                <a href="#">MyTask</a>
            </div>
            <div>
                <a href="#">Notification</a>
            </div>
        </div>
    </div>

    <div class="project-section">
        <h1>PROJECTS</h1>
        <div class="project-list">
            <div class="project">
                <div >
                    <img src="{{asset('images/Icon.png')}}" class="project-img">
                </div>
                <div class="project-name" >
                    <a href="{{ route('home') }}">Dashboard</a>
                </div>
            </div>
            <div class="project">
                <div>
                    <img src="{{asset('images/Icon.png')}}" class="project-img">
                </div>
                <div class="project-name">
                    <a href="{{ route('home') }}">CRM System</a>
                </div>
            </div>
            <div class="project">
                <div >
                    <img src="{{asset('images/Icon.png')}}" class="project-img">
                </div>
                <div class="project-name" >
                    <a href="{{ route('home') }}">Website Redesign</a>
                </div>
            </div>
            <div class="project">
                <div >
                    <img src="{{asset('images/Icon.png')}}" class="project-img">
                </div>
                <div class="project-name" >
                    <a href="{{ route('home') }}">Comunication Tool</a>
                </div>
            </div>
            <button type="button" class="btn btn-link">+Add a Project</button>

        </div>
    </div>

    <div class="team-section">
        <h1>TEAMS</h1>
        <div class="team">
            <div class="team-name" >
                <a href="#">Desingers</a>
            </div>
            <div class="teamimg" >
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
            </div>
        </div>
        <div class="team">
            <div class="team-name" >
                <a href="#">Backend</a>
            </div>
            <div class="teamimg" >
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
            </div>
        </div>
        <div class="team">
            <div class="team-name" >
                <a href="#">Frontend</a>
            </div>
            <div class="teamimg" >
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
                <img src="{{asset('images/Icon.png')}}" class="team-img">
            </div>
        </div>
        <button type="button" class="btn btn-link">+Add a Team</button>

        </div>
    </div>



</div>
<div class="right-side">
    <div class="top-header">
        <div class="current-location">
            <div class="left">
                <div class="name-loc">
                    <h1>Dessingers</h1>
                </div>
                <div class="image-loc">
                    <button><i class='bx bx-dots-horizontal-rounded' ></i></button>
                </div>
            </div>
            <div class="right">
                <div>
                    <img src="{{asset('images/Pic.png')}}" class="user-img">
                    <img src="{{asset('images/Pic.png')}}" class="user-img">
                    <img src="{{asset('images/Pic.png')}}" class="user-img">
                </div>
                <button class="share-btn">
                    <img src="{{asset('images/Share Button.png')}}" >
                </button>
                <button class="chat-btn">
                    <img src="{{asset('images/Chat Button.png')}}" >
                </button>
            </div>
        </div>


    </div>
    <div class="page-content">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/clientArea.js') }}"></script>


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}

@yield("extra-js")
</body>
