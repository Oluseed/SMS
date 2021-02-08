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

@section('nav')
                <div>
                    <a href="{{ route('student.announcements') }}" class="nav_box left">
                        <i class="fas fa-bullhorn" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>ANNOUNCEMENTS</span>
                    </a>
                    <a href="{{ route('student.timetable') }}" class="nav_box right">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>TIMETABLE</span>
                    </a>
                    <a href="{{ route('student.test_result') }}" class="nav_box left">
                        <i class="fas fa-scroll" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>TEST RESULTS</span>
                    </a>
                    <a href="{{ route('student.exam_result') }}" class="nav_box right">
                        <i class="far fa-map" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>EXAM RESULTS</span>
                    </a>
                    <a href="{{ route('student.queWeek') }}" class="nav_box left">
                        <i class="far fa-question-circle" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>QUESTION OF THE WEEK</span>
                    </a>
                    <a href="{{ route('student.lesson_files') }}" class="nav_box right">
                        <i class="fas fa-folder-open" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>LESSON FILES</span>
                    </a>
                    <a href="{{ route('student.message') }}" class="nav_box left">
                        <i class="fas fa-comment-dots" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>MESSAGE BOX</span>
                    </a>
                    <a href="#" class="nav_box right">
                        <i class="fas fa-user-cog"></i>
                        <br/>
                        <br/>
                        <span>ACCOUNT SETTINGS</span>
                    </a>
                </div>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection