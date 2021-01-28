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
                    <div class="head">
                        <i class="fas fa-bullhorn" aria-hidden="true"></i><b>   Announcements</b>
                    </div>
                    <ul>
                        <li>Students are advised to stay in dormitories after the break.Any student found outside the class would be dealt with severely</li>
                        
                        <li>Students are hereby instructed to meet their Class Teachers for Registration</li>
                        
                        <li>Admission ongoing.......<br>For New Students,Exams stated on the 26th of January,2021 would commence.</li>
                        
                        <li>Textbooks are to be given by your Class Teacher(either in PDF or Hardcopy)</li>
                    </ul>
                </article>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>{{ $model_name }}
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection