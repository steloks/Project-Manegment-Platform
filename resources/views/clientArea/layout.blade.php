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
        <h3 class="title">PROJECTS</h3>
        <i class='bx bx-search search'></i>
        <i class='bx bx-x close'></i>
    </div>
    <div class="user-section">
        <div class="user-info">
            <div class="user-img">
                <img src="{{asset('images/Userpic.png')}}" class="user-image">
            </div>
            <div class="user">
                <div class="username">{{Auth::user()->name}}</div>
                <div class="rank">Product Owner</div>
            </div>
            <div>
                <i id="user-button" class=' bx bx-menu'></i>
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
        <h3 class="title">MENU</h3>
        <div class="user-menu">
            <a href="#">Home</a>
            <a href="#">MyTask</a>
            <a href="#">Notification</a>
        </div>
    </div>

    <div class="project-section">
        <h3 class="title">PROJECTS</h3>
        <div class="project-list">
            <div class="item">
                <img src="{{asset('images/Icon.png')}}">
                <a href="{{ route('home') }}">Dashboard</a>
            </div>

            {{--            <div class="project">--}}
            {{--                <div>--}}
            {{--                    <img src="{{asset('images/Icon.png')}}" class="project-img">--}}
            {{--                </div>--}}
            {{--                <div class="project-name">--}}
            {{--                    <a href="{{ route('home') }}">Dashboard</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="project">--}}
            {{--                <div>--}}
            {{--                    <img src="{{asset('images/Icon.png')}}" class="project-img">--}}
            {{--                </div>--}}
            {{--                <div class="project-name">--}}
            {{--                    <a href="{{ route('home') }}">CRM System</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="project">--}}
            {{--                <div>--}}
            {{--                    <img src="{{asset('images/Icon.png')}}" class="project-img">--}}
            {{--                </div>--}}
            {{--                <div class="project-name">--}}
            {{--                    <a href="{{ route('home') }}">Website Redesign</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="project">--}}
            {{--                <div>--}}
            {{--                    <img src="{{asset('images/Icon.png')}}" class="project-img">--}}
            {{--                </div>--}}
            {{--                <div class="project-name">--}}
            {{--                    <a href="{{ route('home') }}">Comunication Tool</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@getbootstrap">+Add a Project
            </button>


            {{--            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>--}}

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Project name:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                    <label for="recipient-name" class="col-form-label">Type:</label>
                                    <input type="text" class="form-control" id="recipient-type">
                                    <button type="button" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="team-section">
        <h3 class="title">TEAMS</h3>

        <div class="team-list">
            <div class="item js-redirect" data-url="{{ route('home') }}">
                <div class="label">Desingers</div>
                <div class="images-holder">
                    <img src="{{asset('images/Icon.png')}}">
                    <img src="{{asset('images/Icon.png')}}">
                    <img src="{{asset('images/Icon.png')}}">
                    <img src="{{asset('images/Icon.png')}}">
                </div>
            </div>
        </div>


        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#newTeam"
                data-whatever="@getbootstrap">+Add a Team
        </button>


        <div class="modal fade" id="newTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Team name:</label>
                                <input type="text" class="form-control" id="recipient-name">

                                <button type="button" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


</div>
<div class="right-side">
    <div class="top-header">
        @yield('top-header')
    </div>
    <div class="page-content">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/clientArea.js') }}"></script>


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}


@yield("extra-js")
</body>
