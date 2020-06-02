@extends('clientArea.layout')

@section('head-tags')
    <title>Example</title>
@endsection

@section('top-header')
    @include('clientArea.partials.top-header',['page'=>'project-home'])
@endsection

@section('content')
<div class="project-files">
<div class="container-fluid">
    <div class="main-table ">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Size</th>
                <th scope="col">Uploaded By</th>
                <th scope="col">Tag</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><img src="{{asset('images/Img.png')}}" class="user-img"></th>
                <td>Redesign Brief 2019.pdf</td>
                <td>111 KB</td>
                <td>
                    <img src="{{asset('images/Oval.jpg')}}" class="user-img">
                    <span>Matie Blooman</span>
                </td>
                <td>Marketing</td>
                <td>08 Jan 2019</td>
                <td>
                    <button class="action btn">Actions</button>
                    <button class="btn"><i class='bx bx-download'></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row"><img src="{{asset('images/Img.png')}}" class="user-img"></th>
                <td>Redesign Brief 2019.pdf</td>
                <td>111 KB</td>
                <td>
                    <img src="{{asset('images/Oval.jpg')}}" class="user-img">
                    <span>Matie Blooman</span>
                </td>
                <td>Marketing</td>
                <td>08 Jan 2019</td>
                <td>
                    <button class="action btn">Actions</button>
                    <button class="btn"><i class='bx bx-download'></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row"><img src="{{asset('images/Img.png')}}" class="user-img"></th>
                <td>Redesign Brief 2019.pdf</td>
                <td>111 KB</td>
                <td>
                    <img src="{{asset('images/Oval.jpg')}}" class="user-img">
                    <span>Matie Blooman</span>
                </td>
                <td>Marketing</td>
                <td>08 Jan 2019</td>
                <td>
                    <button class="action btn">Actions</button>
                    <button class="btn"><i class='bx bx-download'></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row"><img src="{{asset('images/Img.png')}}" class="user-img"></th>
                <td>Redesign Brief 2019.pdf</td>
                <td>111 KB</td>
                <td>
                    <img src="{{asset('images/Oval.jpg')}}" class="user-img">
                    <span>Matie Blooman</span>
                </td>
                <td>Marketing</td>
                <td>08 Jan 2019</td>
                <td>
                    <button class="action btn">Actions</button>
                    <button class="btn"><i class='bx bx-download'></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row"><img src="{{asset('images/Img.png')}}" class="user-img"></th>
                <td>Redesign Brief 2019.pdf</td>
                <td>111 KB</td>
                <td>
                    <img src="{{asset('images/Oval.jpg')}}" class="user-img">
                    <span>Matie Blooman</span>
                </td>
                <td>Marketing</td>
                <td>08 Jan 2019</td>
                <td>
                    <button class="action btn">Actions</button>
                    <button class="btn"><i class='bx bx-download'></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row"><img src="{{asset('images/Img.png')}}" class="user-img"></th>
                <td>Redesign Brief 2019.pdf</td>
                <td>111 KB</td>
                <td>
                    <img src="{{asset('images/Oval.jpg')}}" class="user-img">
                    <span>Matie Blooman</span>
                </td>
                <td>Marketing</td>
                <td>08 Jan 2019</td>
                <td>
                    <button class="action btn">Actions</button>
                    <button class="btn"><i class='bx bx-download'></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row"><img src="{{asset('images/Img.png')}}" class="user-img"></th>
                <td>Redesign Brief 2019.pdf</td>
                <td>111 KB</td>
                <td>
                    <img src="{{asset('images/Oval.jpg')}}" class="user-img">
                    <span>Matie Blooman</span>
                </td>
                <td>Marketing</td>
                <td>08 Jan 2019</td>
                <td>
                    <button class="action btn">Actions</button>
                    <button class="btn"><i class='bx bx-download'></i></button>
                </td>
            </tr>
            </tbody>
        </table>
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
