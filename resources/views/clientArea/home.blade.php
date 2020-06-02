@extends('clientArea.layout')

@section('head-tags')
    <title>Example</title>
@endsection

@section('top-header')
    @include('clientArea.partials.top-header',['page'=>'home'])
@endsection

@section('content')
    <div class="page-logged">
        <div class="container-fluid">

            <div class="left">
                <div class="completed-tasks main-box">
                    <h1>Compleated Tasks</h1>
                    <div class="chart-info">
                        <div class="total">
                            372
                        </div>
                        <div class="chart-holder">
                            <img src="{{asset('images/img/Chart.png')}}">
                        </div>
                    </div>
                </div>

                <div class="work-statistics">
                    <div class="main-box">
                        <h1>Working Rate</h1>
                        <img src="{{asset('images/img/Chart.svg')}}">
                    </div>
                    <div class="main-box">
                        <h1>Performanse</h1>
                        <img src="{{asset('images/img/Chart.svg')}}">
                    </div>
                </div>

                <div class="today-tasks main-box">
                    <div class="header">
                        <div class="title">
                            Today Tasks
                        </div>
                        <div class="button-holder">
                            <button class="btn box-icon">
                                <i class="bx bx-plus"></i>
                                <span>Add Task</span>
                            </button>
                        </div>
                    </div>

                    <div class="content-holder">
                        <div class="item">
                            <div class="checkbox-holder">
                                <input type="checkbox"/>
                            </div>
                            <div class="content">
                                <div class="text">
                                    E-mail after registration so that I can confirm my address
                                </div>
                                <div class="user-holder s-warning">
                                    <img src="{{asset('images/Pic.jpg')}}">
                                    <span>Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="checkbox-holder">
                                <input type="checkbox"/>
                            </div>
                            <div class="content">
                                <div class="text">
                                    E-mail after registration so that I can confirm my address
                                </div>
                                <div class="user-holder s-processing">
                                    <img src="{{asset('images/Pic.jpg')}}">
                                    <span>Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="checkbox-holder">
                                <input type="checkbox"/>
                            </div>
                            <div class="content">
                                <div class="text">
                                    E-mail after registration so that I can confirm my address
                                </div>
                                <div class="user-holder s-processing">
                                    <img src="{{asset('images/Pic.jpg')}}">
                                    <span>Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="checkbox-holder">
                                <input type="checkbox"/>
                            </div>
                            <div class="content">
                                <div class="text">
                                    E-mail after registration so that I can confirm my address
                                </div>
                                <div class="user-holder s-processing">
                                    <img src="{{asset('images/Pic.jpg')}}">
                                    <span>Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="checkbox-holder">
                                <input type="checkbox"/>
                            </div>
                            <div class="content">
                                <div class="text">
                                    E-mail after registration so that I can confirm my address
                                </div>
                                <div class="user-holder s-processing">
                                    <img src="{{asset('images/Pic.jpg')}}">
                                    <span>Development</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="right main-box">
                <div class="actions main-box">
                    <h1>Today</h1>
                    <div class="content">
                        <div class="mark-action">
                            <div class="img">
                                <i class='bx bx-check'></i>
                            </div>
                            <div class="action">
                                Darika Samak mark as done Listing on Product Hunt so that we can reach as many potential
                                users
                            </div>
                            <div class="time">
                                8:40 PM
                            </div>
                        </div>

                        <div class="comment-action">
                            <div class="comment-info">
                                <div class="img">
                                    <i class='bx bx-check'></i>
                                </div>
                                <div class="action">
                                    Emilee Simchenko commented on Account for teams and personal in bottom style
                                </div>
                                <div class="time">
                                    8:40 PM
                                </div>
                            </div>
                            <div class="comment">
                                <div class="user-img">
                                    <img src="{{asset('images/Oval.svg')}}">
                                </div>
                                <div class="cmt">
                                    During a project build, it is necessary to evaluate the product design and
                                    development against project requirements and outcomes
                                </div>
                            </div>
                        </div>


                        <div class="upload-action">
                            <div class="upload-info">
                                <div class="img">
                                    <i class='bx bx-cloud-upload'></i>
                                </div>
                                <div class="action">
                                    Darika Samak uploaded 4 files on An option to search in curren
                                    t projects or in all projects
                                </div>
                                <div class="time">
                                    8:40 PM
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{asset('images/Image.jpg')}}">
                                <img src="{{asset('images/Image.jpg')}}">
                                <img src="{{asset('images/Image.jpg')}}">
                                <img src="{{asset('images/Image.jpg')}}">
                            </div>
                        </div>

                        <div class="upload-action">
                            <div class="upload-info">
                                <div class="img">
                                    <i class='bx bx-cloud-upload'></i>
                                </div>
                                <div class="action">
                                    Darika Samak uploaded 4 files on An option to search in curren
                                    t projects or in all projects
                                </div>
                                <div class="time">
                                    8:40 PM
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{asset('images/Image.jpg')}}">
                                <img src="{{asset('images/Image.jpg')}}">
                                <img src="{{asset('images/Image.jpg')}}">
                                <img src="{{asset('images/Image.jpg')}}">
                            </div>
                        </div>

                        <div class="mark-action">
                            <div class="img">
                                <i class='bx bx-check'></i>
                            </div>
                            <div class="action">
                                Darika Samak mark as done Listing on Product Hunt so that we can reach as many potential
                                users
                            </div>
                            <div class="time">
                                8:40 PM
                            </div>
                        </div>


                        <div class="comment-action">
                            <div class="comment-info">
                                <div class="img">
                                    <i class='bx bx-check'></i>
                                </div>
                                <div class="action">
                                    Emilee Simchenko commented on Account for teams and personal in bottom style
                                </div>
                                <div class="time">
                                    8:40 PM
                                </div>
                            </div>
                            <div class="comment">
                                <div class="user-img">
                                    <img src="{{asset('images/Oval.svg')}}">
                                </div>
                                <div class="cmt">
                                    During a project build, it is necessary to evaluate the product design and
                                    development against project requirements and outcomes
                                </div>
                            </div>
                        </div>


                        <div class="comment-action">
                            <div class="comment-info">
                                <div class="img">
                                    <i class='bx bx-check'></i>
                                </div>
                                <div class="action">
                                    Emilee Simchenko commented on Account for teams and personal in bottom style
                                </div>
                                <div class="time">
                                    8:40 PM
                                </div>
                            </div>
                            <div class="comment">
                                <div class="user-img">
                                    <img src="{{asset('images/Oval.svg')}}">
                                </div>
                                <div class="cmt">
                                    During a project build, it is necessary to evaluate the product design and
                                    development against project requirements and outcomes
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>

            {{--            <div class="row element">--}}
            {{--                <div class="col-6 leftcol">--}}
            {{--                    <div class="row first-row">--}}
            {{--                        <div class="col column">--}}
            {{--                            <div class="header">--}}
            {{--                                <h1>Compleated Tasks</h1>--}}
            {{--                            </div>--}}
            {{--                            <div class="sec">--}}
            {{--                                <div class="task-count">372</div>--}}
            {{--                                <div><img src="{{asset('images/img/Chart.png')}}"></div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                    </div>--}}

            {{--                    </div>--}}
            {{--                    <div class="row third-row">--}}
            {{--                        <div class="col column">--}}
            {{--                            <div class="header">--}}
            {{--                                <h1>Today Tasks</h1>--}}
            {{--                                <button>+ Add Task</button>--}}
            {{--                            </div>--}}
            {{--                            <div class="tasks">--}}
            {{--                                <div class="task">--}}
            {{--                                    <div class="task-name">--}}
            {{--                                        <button><i class='bx bx-check'></i></button>--}}
            {{--                                        <span class="name">E-mail after registration so that I can confirm my address</span>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="task-to">--}}
            {{--                                        <img src="{{asset('images/Pic.jpg')}}" class="asign-img">--}}
            {{--                                        <span class="type">Development</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}

            {{--                                <div class="task">--}}
            {{--                                    <div class="task-name">--}}
            {{--                                        <button><i class='bx bx-check'></i></button>--}}
            {{--                                        <span class="name">--}}
            {{--                                E-mail after registration so that I can confirm my address--}}
            {{--                            </span>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="task-to">--}}
            {{--                                        <img src="{{asset('images/Pic.jpg')}}" class="asign-img">--}}
            {{--                                        <span class="type">Development</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}

            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--                <div class="col-3 rightcol">--}}
            {{--                    <div class="header">--}}
            {{--                        <h1>Activity</h1>--}}
            {{--                    </div>--}}
            {{--                    <div class="actions">--}}
            {{--                        <h1>Today</h1>--}}
            {{--                        <div class="mark-action">--}}
            {{--                            <div class="img">--}}
            {{--                                <i class='bx bx-check'></i>--}}
            {{--                            </div>--}}
            {{--                            <div class="action">--}}
            {{--                                Darika Samak mark as done Listing on Product Hunt so that we can reach as many potential--}}
            {{--                                users--}}
            {{--                            </div>--}}
            {{--                            <div class="time">--}}
            {{--                                8:40 PM--}}
            {{--                            </div>--}}
            {{--                        </div>--}}


            {{--                        <div class="comment-action">--}}
            {{--                            <div class="comment-info">--}}
            {{--                                <div class="img">--}}
            {{--                                    <i class='bx bx-check'></i>--}}
            {{--                                </div>--}}
            {{--                                <div class="action">--}}
            {{--                                    Emilee Simchenko commented on Account for teams and personal in bottom style--}}
            {{--                                </div>--}}
            {{--                                <div class="time">--}}
            {{--                                    8:40 PM--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                        </div>--}}

            {{--                        <div class="upload-action">--}}
            {{--                            <div class="upload-info">--}}
            {{--                                <div class="img">--}}
            {{--                                    <i class='bx bx-cloud-upload'></i>--}}
            {{--                                </div>--}}
            {{--                                <div class="action">--}}
            {{--                                    Darika Samak uploaded 4 files on An option to search in curren--}}
            {{--                                    t projects or in all projects--}}
            {{--                                </div>--}}
            {{--                                <div class="time">--}}
            {{--                                    8:40 PM--}}
            {{--                                </div>--}}
            {{--                            </div>--}}


            {{--                            <div class="item">--}}
            {{--                                <img src="{{asset('images/Image.jpg')}}">--}}
            {{--                                <img src="{{asset('images/Image.jpg')}}">--}}
            {{--                                <img src="{{asset('images/Image.jpg')}}">--}}
            {{--                                <img src="{{asset('images/Image.jpg')}}">--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <h1>Yestarday</h1>--}}


            {{--                        <div class="upload-action">--}}
            {{--                            <div class="upload-info">--}}
            {{--                                <div class="img">--}}
            {{--                                    <i class='bx bx-cloud-upload'></i>--}}
            {{--                                </div>--}}
            {{--                                <div class="action">--}}
            {{--                                    Darika Samak uploaded 4 files on An option to search in curren--}}
            {{--                                    t projects or in all projects--}}
            {{--                                </div>--}}
            {{--                                <div class="time">--}}
            {{--                                    8:40 PM--}}
            {{--                                </div>--}}
            {{--                            </div>--}}


            {{--                            <div class="item">--}}
            {{--                                <img src="{{asset('images/Image.jpg')}}">--}}
            {{--                                <img src="{{asset('images/Image.jpg')}}">--}}
            {{--                                <img src="{{asset('images/Image.jpg')}}">--}}
            {{--                                <img src="{{asset('images/Image.jpg')}}">--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <div class="mark-action">--}}
            {{--                            <div class="img">--}}
            {{--                                <i class='bx bx-check'></i>--}}
            {{--                            </div>--}}
            {{--                            <div class="action">--}}
            {{--                                Darika Samak mark as done Listing on Product Hunt so that we can reach as many potential--}}
            {{--                                users--}}
            {{--                            </div>--}}
            {{--                            <div class="time">--}}
            {{--                                8:40 PM--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection

@section("extra-js")
    <script>
        $(function () {

        });
    </script>
@endsection
