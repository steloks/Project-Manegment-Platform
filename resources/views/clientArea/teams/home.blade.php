@extends('clientArea.layout')

@section('head-tags')
    <title>Example</title>
@endsection

@section('top-header')
    @include('clientArea.partials.top-header',['page'=>'team-home'])
@endsection

@section('content')
    <div class="team-home">
        <div class="container-fluid">

            <div class="left main-box">
                <div class="header">
                    <h1>Members</h1>
                    <strong>32</strong>
                </div>
                <div class="members">
                    <div class="member">
                        <img src="{{asset('images/Userpic.png')}}">
                        <div class="user-info">
                            <div>Conan Matusov</div>
                            <span>Team Lead</span>
                        </div>
                        <div class="task-info">
                            <div >829</div>
                            <span >TASKS</span>
                        </div>
                    </div>
                    <div class="member">
                        <img src="{{asset('images/Userpic.png')}}">
                        <div class="user-info">
                            <div>Conan Matusov</div>
                            <span>Team Lead</span>
                        </div>
                        <div class="task-info">
                            <div >829</div>
                            <span >TASKS</span>
                        </div>
                    </div>
                    <div class="member">
                        <img src="{{asset('images/Userpic.png')}}">
                        <div class="user-info">
                            <div>Conan Matusov</div>
                            <span>Team Lead</span>
                        </div>
                        <div class="task-info">
                            <div >829</div>
                            <span >TASKS</span>
                        </div>
                    </div>
                    <div class="member">
                        <img src="{{asset('images/Userpic.png')}}">
                        <div class="user-info">
                            <div>Conan Matusov</div>
                            <span>Team Lead</span>
                        </div>
                        <div class="task-info">
                            <div >829</div>
                            <span >TASKS</span>
                        </div>
                    </div>
                    <div class="member">
                        <img src="{{asset('images/Userpic.png')}}">
                        <div class="user-info">
                            <div>Conan Matusov</div>
                            <span>Team Lead</span>
                        </div>
                        <div class="task-info">
                            <div >829</div>
                            <span >TASKS</span>
                        </div>
                    </div>
                    <div class="member">
                        <img src="{{asset('images/Userpic.png')}}">
                        <div class="user-info">
                            <div>Conan Matusov</div>
                            <span>Team Lead</span>
                        </div>
                        <div class="task-info">
                            <div >829</div>
                            <span >TASKS</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="right main-box">
                <div class="header">
                    <img src="{{asset('images/img/Pic.jpg')}}">
                    <div class="info">
                            <span class="name">Davea Butler</span>
                            <button class="btn menu"><i class='bx bx-dots-horizontal-rounded'></i></button>
                            <div class="job">UX Researcher</div>
                            <div class="from">London, United Kingdom</div>

                    </div>
                </div>
                <div class="tasks-info">
                    <div class="closed-task">
                        <div class="info">
                            <div class="task-count">729</div>
                            <span class="task"> CLOSED TASK</span>
                        </div>
                        <img src="{{asset('images/img/Chart.jpg')}}">
                    </div>
                    <div class="open-task">
                        <div class="info">
                            <div class="task-count">13</div>
                            <span class="task">OPEN TASK</span>
                        </div>
                        <img src="{{asset('images/img/Chart.jpg')}}">
                    </div>
                </div>
                <div class="asigned-taks">
                    <h3>Asigned Taks</h3>
                    <span>2</span>
                    <div class="tasks">
                        <div class="task">
                            <div class="task-name">
                                <button class="btn"><i class='bx bx-check'></i></button>
                                <span class="name">
                            E-mail after registration so that I can confirm my address
                           </span>
                            </div>
                            <div class="task-to">
                                <img src="{{asset('images/Pic.jpg')}}" class="asign-img">
                                <span class="type">DEVELOPMENT</span>
                            </div>
                        </div>

                        <div class="task">
                            <div class="task-name">
                                <button class="btn"><i class='bx bx-check'></i></button>
                                <span class="name">
                            E-mail after registration so that I can confirm my address
                           </span>
                            </div>
                            <div class="task-to">
                                <img src="{{asset('images/Pic.jpg')}}" class="asign-img">
                                <span class="type">DEVELOPMENT</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="last-activity">
                    <h3>Last Activity</h3>
                    <div class="activities">
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

                    </div>
                </div>


            </div>


{{--                <div class="col-6 rightcol">--}}
{{--                    <div class="header">--}}
{{--                        <div>--}}
{{--                            <img src="{{asset('images/img/Pic.jpg')}}">--}}
{{--                        </div>--}}
{{--                        <div class="info">--}}
{{--                            <div class="user-info">--}}
{{--                                <div class="name">Davea Butler</div>--}}
{{--                                <div>--}}
{{--                                    <button><i class='bx bx-dots-horizontal-rounded'></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="user-from">--}}
{{--                                <div class="job">UX Researcher</div>--}}
{{--                                <div class="from">London, United Kingdom</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <div class="sec-1">--}}
{{--                        <div class="left">--}}
{{--                            <div class="task-info">--}}
{{--                                <div class="task-count">729</div>--}}
{{--                                <div class="task"> CLOSED TASK</div>--}}
{{--                            </div>--}}
{{--                            <div class="graphic">--}}
{{--                                <img src="{{asset('images/img/Chart.jpg')}}">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="right">--}}
{{--                            <div class="task-info">--}}
{{--                                <div class="task-count">13</div>--}}
{{--                                <div class="task">OPEN TASK</div>--}}
{{--                            </div>--}}
{{--                            <div class="graphic">--}}
{{--                                <img src="{{asset('images/img/Chart.jpg')}}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="sec-2">--}}

{{--                        <div class="header">--}}
{{--                            <h1>Assigned Tasks</h1>--}}
{{--                            <strong>2</strong>--}}
{{--                        </div>--}}
{{--                        <div class="tasks">--}}
{{--                            <div class="task">--}}
{{--                                <button><i class='bx bx-check'></i></button>--}}
{{--                                <div class="task-info">--}}
{{--                                    <div class="task-name">An option to search in current projects or in all projects--}}
{{--                                    </div>--}}
{{--                                    <div class="task-type">DESIGN</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="task">--}}
{{--                                <button><i class='bx bx-check'></i></button>--}}
{{--                                <div class="task-info">--}}
{{--                                    <div class="task-name">An option to search in current projects or in all projects--}}
{{--                                    </div>--}}
{{--                                    <div class="task-type">DESIGN</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}


{{--                    <div class="sec-3">--}}
{{--                        <h1>Last Activity</h1>--}}
{{--                        <div class="actions">--}}
{{--                            <div class="upload-action">--}}
{{--                                <div class="upload-info">--}}
{{--                                    <div class="img">--}}
{{--                                        <i class='bx bx-cloud-upload'></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="action">--}}
{{--                                        Darika Samak uploaded 4 files on An option to search in curren--}}
{{--                                        t projects or in all projects--}}
{{--                                    </div>--}}
{{--                                    <div class="time">--}}
{{--                                        8:40 PM--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <div class="item">--}}
{{--                                    <img src="{{asset('images/Image.jpg')}}">--}}
{{--                                    <img src="{{asset('images/Image.jpg')}}">--}}
{{--                                    <img src="{{asset('images/Image.jpg')}}">--}}
{{--                                    <img src="{{asset('images/Image.jpg')}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="mark-action">--}}
{{--                                <div class="img">--}}
{{--                                    <i class='bx bx-check'></i>--}}
{{--                                </div>--}}
{{--                                <div class="action">--}}
{{--                                    Darika Samak mark as done Listing on Product Hunt so that we can reach as many--}}
{{--                                    potential users--}}
{{--                                </div>--}}
{{--                                <div class="time">--}}
{{--                                    8:40 PM--}}
{{--                                </div>--}}
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
