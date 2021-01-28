@extends('layouts.schoollay')
@section('intro_box')
                <h4>Welcome to <span>{{ $school->school_name }}</span> Student Management System.</h4>
                <p>
                    You can login to your respective portal below as a student or as teacher.
                    <br/>
                    <br/>
                    If you have any problem signing in, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
@endsection
            
@section('nav')
                <div>
                    <a href="{{ url('/student_login') }}" class="nav_box left">
                        <i class="fas fa-users" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>STUDENT PORTAL</span>
                    </a>
                    <a href="{{ url('/teacher_login') }}" class="nav_box right">
                        <i class="fas fa-user" aria-hidden="true"></i>
                        <br/>
                        <br/>
                        <span>TEACHER PORTAL</span>
                    </a>
                </div>
@endsection