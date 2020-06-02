<div class="current-location">
    <div class="left">
        @if($page == 'team-home')
            <div class="name-loc">
                <h1>Dessingers</h1>
            </div>
            <div class="image-loc">
                <button><i class='bx bx-dots-horizontal-rounded'></i></button>
            </div>
            <div class="responsive-menu">
                <i class='bx bx-menu toggle'></i>
            </div>
        @elseif($page == 'home')
            <div class="name-loc">
                <h1>Home</h1>
            </div>
            <div class="image-loc">
                <button><i class='bx bx-dots-horizontal-rounded'></i></button>
            </div>
            <div class="responsive-menu">
                <i class='bx bx-menu toggle'></i>
            </div>
        @elseif($page == 'settings')
            <div class="name-loc">
                <h1>Profile Settings</h1>
            </div>
            <div class="responsive-menu">
                <i class='bx bx-menu toggle'></i>
            </div>
        @else
            <div class="image-loc">
                <img src="{{asset('images/Icon.png')}}" class="project-img">
            </div>
            <div class="name-loc">
                <h1>Website Redesign</h1>
            </div>
            <div class="responsive-menu">
                <i class='bx bx-menu toggle'></i>
            </div>
        @endif

    </div>
    <div class="right">
        <div>
            <img src="{{asset('images/Pic.png')}}" class="user-img">
        </div>
        <button class="share-btn">
            <img src="{{asset('images/Share Button.png')}}">
        </button>
        <button class="chat-btn">
            <img src="{{asset('images/Chat Button.png')}}">
        </button>


    </div>
</div>
@if($page != 'team-home' && $page != 'home' && $page != 'settings')
    <ul>
        <li><a href="{{ route('tasks') }}">Tasks</a></li>
        <li><a href="{{ route('activity') }}">Activity</a></li>
        <li><a href="{{ route('calendar') }}">Calendar</a></li>
        <li><a href="{{ route('files') }}">Files</a></li>
    </ul>
@endif
@if($page == 'settings')
    <ul>
        <li><a href="">Profile</a></li>
        <li><a href="">Accaunt</a></li>
        <li><a href="">Notification</a></li>
        <li><a href="">Apps</a></li>
    </ul>
@endif
