@extends('clientArea.layout')

@section('head-tags')
    <title>Example</title>
@endsection

@section('top-header')
    @include('clientArea.partials.top-header',['page'=>'project-home'])
@endsection
@section('content')
    <div class="project-tasks">
        <div class="container-fluid">
            <div class="left main-box">
        <div class="backlog">
            <div class="header">
                <span>Backlog</span>
                <button class="btn">+ Add Task</button>
            </div>
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
            <div class="to-do">
                <div class="header">
                    <span>To Do</span>
                    <button class="btn">+ Add Task</button>
                </div>
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

    </div>


            <div class="right main-box">
                <div class="header">
                    <div class="info">
                        <div class="task">E-mail after registration so that</div>
                        <span>Added by Kristin A. yesterday at 12:41pm</span>
                    </div>
                    <div class="btn-holder">
                        <button class="btn"><i class='bx bx-check'></i></button>
                        <button class="btn"><i class='bx bx-dots-horizontal-rounded'></i></button>
                    </div>
                </div>
                <div class="task-for">
                    <div class="user-info">
                        <div class="bold">ASIGN</div>
                        <img src="{{asset('images/Oval.jpg')}}">
                        <span class="name">Linzell Bowman</span>
                    </div>
                    <div class="box-2">
                        <div class="bold">DUE TO</div>
                        <span class="date">Tue, Dec 25</span>
                    </div>
                    <div class="box-3">
                        <div class="bold">TAG</div>
                        <span>Marketing</span>
                    </div>
                </div>
                <div class="description">
                    <span>DESCRIPTION</span>
                    <p>Task Descriptions are used during project planning,
                        project execution and project control. During project planning the task
                        descriptions are used for scope planning and creating estimates. During project
                        execution the task description is used by those doing the activities to ensure they
                        are doing the work correctly.
                    </p>
                    <div class="uploads">
                        <div class="upload">
                            <img src="{{asset('images/Img.png')}}">
                            <div class="info">
                                <div>Redesign Brief 2019.pdf</div>
                                <div>
                                    <div class="size">159 KB</div>
                                    <button class="btn">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="upload">
                            <img src="{{asset('images/Img.png')}}">
                            <div class="info">
                                <div>Redesign Brief 2019.pdf</div>
                                <div>
                                    <div class="size">159 KB</div>
                                    <button class="btn">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="discussion">
                    <span class="title">DISCUSSION</span>
                    <form>
                        <img src="{{asset('images/Userpic.png')}}" class="user-image">
                        <input type="text" placeholder="Add new comment">
                        <button class="btn" type="submit"><i class='bx bx-plus'></i></button>
                    </form>
                    <div class="messages">
                        <div class="message">
                            <img src="{{asset('images/Oval.svg')}}">
                            <div class="user-info">
                                <div class="info">
                                    <span class="name">Helena Brauer,Designer</span>
                                    <span class="time">Yesterday at 12:37pm</span>
                                </div>
                                <div class="msg">
                                    During a project build, it is necessary to evaluate the product design and
                                    development against project requirements and outcomes
                                </div>
                            </div>
                        </div>
                        <div class="message">
                            <img src="{{asset('images/Oval.svg')}}">
                            <div class="user-info">
                                <div class="info">
                                    <span class="name">Helena Brauer,Designer</span>
                                    <span class="time">Yesterday at 12:37pm</span>
                                </div>
                                <div class="msg">
                                    During a project build, it is necessary to evaluate the product design and
                                    development against project requirements and outcomes
                                </div>
                            </div>
                        </div>
                        <div class="message">
                            <img src="{{asset('images/Oval.svg')}}">
                            <div class="user-info">
                                <div class="info">
                                    <span class="name">Helena Brauer,Designer</span>
                                    <span class="time">Yesterday at 12:37pm</span>
                                </div>
                                <div class="msg">
                                    During a project build, it is necessary to evaluate the product design and
                                    development against project requirements and outcomes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


{{--                    <div class="sec-2">--}}
{{--                        <h1>DISCUSSION</h1>--}}
{{--                        <div class="comment-form">--}}
{{--                            <img src="{{asset('images/Userpic.png')}}" class="user-image">--}}
{{--                            <form>--}}
{{--                                <div class="add-comment">--}}

{{--                                    <input type="text" placeholder="Add new comment">--}}
{{--                                    <button type="submit"><i class='bx bx-plus'></i></button>--}}
{{--                                </div>--}}

{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="comments">--}}
{{--                            <div class="comment">--}}
{{--                                <div class="user-img">--}}
{{--                                    <img src="{{asset('images/Oval.svg')}}">--}}
{{--                                </div>--}}
{{--                                <div class="user-info">--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="name">Helena Brauer,Designer</div>--}}
{{--                                        <div class="time">Yesterday at 12:37pm</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cmt">--}}
{{--                                        During a project build, it is necessary to evaluate the product design and--}}
{{--                                        development against project requirements and outcomes--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="comment">--}}
{{--                                <div class="user-img">--}}
{{--                                    <img src="{{asset('images/Oval.svg')}}">--}}
{{--                                </div>--}}
{{--                                <div class="user-info">--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="name">Helena Brauer,Designer</div>--}}
{{--                                        <div class="time">Yesterday at 12:37pm</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cmt">--}}
{{--                                        During a project build, it is necessary to evaluate the product design and--}}
{{--                                        development against project requirements and outcomes--}}
{{--                                    </div>--}}
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
