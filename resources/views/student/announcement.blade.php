@extends('..layouts.portallay')
@section('status')
                <br/>
                <div><span>{{ $user->name }} | 
                    <form method="POST" action="{{ route('logout') }}" style="display:inline">
                        @csrf
                        <button type="submit" class="button_null">
                            {{ __('Logout') }}
                        </button>
                    </form>
                </span></div> 
@endsection

@section('intro_box')
                @include('..layouts.profile')
@endsection

@section('content')
                <article class="content_box">
                    @if ($data != '')
                    <div class="head">
                        <i class="fas fa-bullhorn" aria-hidden="true"></i><b>   Announcements</b>
                    </div>
                    <ul>
                    @foreach($data as $row)
                        <h3 style="color: #0c3b79;">{{ $row->title }}</h3>
                        <li>{{ $row->story }}</li>
                    @endforeach
                    </ul>
                    @else
                    <div class="head">
                        <span style="color:red;" class="capitalize">No Announcement Posted yet.</span>
                        <br>
                        <br>
                        <form action="{{ route('student.portal') }}" method="get">
                            <button type="submit" class="button2" style="background:green">&larr; Go Back</button>
                        </form>
                    </div>
                    @endif
                </article>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection