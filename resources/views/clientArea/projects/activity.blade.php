@extends('clientArea.layout')

@section('head-tags')
    <title>Example</title>
@endsection

@section('top-header')
    @include('clientArea.partials.top-header',['page'=>'project-home'])
@endsection

@section('content')
    <div class="project-activity">
        <div class="container-fluid">
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

{{--            <div class="row element">--}}
{{--                <div class="col-7 colum">--}}
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
{{--                            <div class="comment">--}}
{{--                                <div class="user-img">--}}
{{--                                    <img src="{{asset('images/Oval.svg')}}">--}}
{{--                                </div>--}}
{{--                                <div class="cmt">--}}
{{--                                    During a project build, it is necessary to evaluate the product design and--}}
{{--                                    development against project requirements and outcomes--}}
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
