@extends('clientArea.layout')

@section('head-tags')
    <title>Example</title>
@endsection

@section('top-header')
    @include('clientArea.partials.top-header',['page'=>'settings'])
@endsection

@section('content')
    <div class="profile-settings">
        <div class="content main-box">
            <img src="{{asset('images/Userpic.png')}}">
            <form method="post">
                <div class="name">Name</div>
                <input type="text" name="name">
                <div class="name">Role</div>
                <input type="text" name="role">
                <div class="name">About</div>
                <input type="text" name="about" class="about">
                <div>
                    <button type="submit" class="btn">Update Profile</button>
                </div>

            </form>

        </div>

    </div>
@endsection

@section("extra-js")
    <script>
        $(function () {

        });
    </script>
@endsection
