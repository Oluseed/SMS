@extends('layouts.mainlay')
@section('content')
            <div class="intro_box">
                <h4>Welcome to Student Management System.</h4>
                <p>This system has been developed with the sole purpose of providing an independently manageable and effective school management system, targeted at enhanced online learning.
                    <br/>
                    <br/>
                    Sign up with us today, let's take academics to the next level.
                </p>
            </div>
            
            <nav id="nav">
                <div>
                <a href="/select_school" class="nav_box left" title="Choose Your School">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <br/>
                    <br/>
                    <span>LOGIN</span>
                </a>
                <a href="#" class="nav_box right">
                    <i class="fa fa-external-link" aria-hidden="true"></i>
                    <br/>
                    <br/>
                    <span>SIGN UP</span>
                </a>
                </div>
            </nav>
@endsection