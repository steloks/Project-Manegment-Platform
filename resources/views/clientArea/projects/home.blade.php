@extends('clientArea.layout')

@section('head-tags')
    <title>Example</title>
@endsection

@section('top-header')
    @include('clientArea.partials.top-header',['page'=>'project-home'])
@endsection

@section('content')
    <div class="project-home">
        <div class="container-fluid">
            <div class="left main-box">
               <div class="header">
                  <div class="title"><span>Threads</span></div>
                   <div>
                       <button class="btn">New chat</button>
                   </div>
               </div>
                <div class="search">
                    <button class="src btn">
                        <i class='bx bx-search-alt-2'></i>
                        Search
                    </button>
                    <input type="search">
                </div>
                <div class="channels">
                    <div class="title">
                        Channels
                    </div>
                    <div class="message">
                        <div class="notifications">
                            <span>3</span>
                        </div>
                        <div class="chat-info">
                            <div class="chat-name">
                                    #other
                            </div>
                            <div class="user-img">
                                <img src="{{asset('images/Pic.svg')}}">
                                <img src="{{asset('images/Pic.svg')}}">
                                <img src="{{asset('images/Pic.svg')}}">
                            </div>
                            <div class="time">
                                23min ago
                            </div>
                        </div>
                        <div class="last-message">
                            Software quality assurance activity in which one or several humans…
                        </div>
                    </div>
                </div>
            <div class="direct-messages">
                <div class="title">
                    Direct Messages
                </div>
                <div class="messages">
                    <div class="message">
                        <div class="message-info">
                            <div>
                                <img src="{{asset('images/Status.svg')}}">
                            </div>
                            <div>
                                <img src="{{asset('images/Pic.svg')}}">
                            </div>
                            <div class="username">
                                Azah Anyeni
                            </div>
                            <div class="time">3h ago</div>
                        </div>
                        <div class="msg">
                            E-mail after registration so that I can confirm my address
                        </div>
                    </div>
                    <div class="message">
                        <div class="message-info">
                            <div>
                                <img src="{{asset('images/Status.svg')}}">
                            </div>
                            <div>
                                <img src="{{asset('images/Pic.svg')}}">
                            </div>
                            <div class="username">
                                Azah Anyeni
                            </div>
                            <div class="time">3h ago</div>
                        </div>
                        <div class="msg">
                            E-mail after registration so that I can confirm my address
                        </div>
                    </div>
                    <div class="message">
                        <div class="message-info">
                            <div>
                                <img src="{{asset('images/Status.svg')}}">
                            </div>
                            <div>
                                <img src="{{asset('images/Pic.svg')}}">
                            </div>
                            <div class="username">
                                Azah Anyeni
                            </div>
                            <div class="time">3h ago</div>
                        </div>
                        <div class="msg">
                            E-mail after registration so that I can confirm my address
                        </div>
                    </div>
                    <div class="message">
                        <div class="message-info">
                            <div>
                                <img src="{{asset('images/Status.svg')}}">
                            </div>
                            <div>
                                <img src="{{asset('images/Pic.svg')}}">
                            </div>
                            <div class="username">
                                Azah Anyeni
                            </div>
                            <div class="time">3h ago</div>
                        </div>
                        <div class="msg">
                            E-mail after registration so that I can confirm my address
                        </div>
                    </div>
                </div>

               </div>
            </div>

            <div class="right main-box">
                <div class="header">
                    <div class="chat-name">#other</div>
                    <div class="menu"><i class='bx bx-dots-horizontal-rounded'></i></div>
                </div>
                <div class="user-img">
                    <img src="{{asset('images/Pic.svg')}}">
                    <img src="{{asset('images/Pic.svg')}}">
                    <img src="{{asset('images/Pic.svg')}}">
                    <button class="btn btn-plus"><i class='bx bx-plus'></i></button>
                </div>
                <div class="chat">
                    <div class="title">Yestarday</div>
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
                    <div class="title">Today</div>
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
                <div class="new-message">
                    <form>
                        <div class="add-msg">
                            <img src="{{asset('images/Userpic.png')}}" class="user-image">
                            <button class="btn btn-sm" type="submit"><i class='bx bx-plus'></i></button>
                            <input  type="search">
                        </div>
                    </form>
                </div>

            </div>
        </div>


    </div>
@endsection

@section("extra-js")
    <script>
        $(function () {

        });
    </script>
@endsection
