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
                @include('..layouts.profile2')
@endsection

@section('content_queweek')
            <section class="content">
                <article class="content_box">
                    <div class="head">
                        <div style="color:green;font-size:15px">
                            {{ $message }}
                        </div>
                        <i class="fas fa-user" aria-hidden="true"></i><b>   Student Details</b>
                        <aside class="right">Registered on: {{ date($data->created_at) }}</aside>
                    </div>
                    <div class="form_4">
                        <label>Student Name:</label>
                        <span>{{ $data->name }}</span>
                        <br/>
                        <br/>
                        <label>Registration No:</label>
                        <span>{{ $data->regno }}</span>
                        <br/>
                        <br/>
                        <label>Account Password:</label>
                        <span>{{ $data->password }}</span>
                        <br/>
                        <br/>
                        <label>Gender:</label>
                        <span>{{ $data->gender }}</span>
                        <br/>
                        <br/>
                        <label>Student Email:</label>
                        <span>{{ $data->email }}</span>
                        <br/>
                        <br/>
                        @if($message !=  '')
                        <hr/>
                        <div style="color:red;font-size:13px">
                            Please note down the student registration number and account password for 
                            @if($data->gender == 'male')
                            him 
                            @else
                            her
                            @endif 
                            to login to the student portal.
                        </div>
                        <hr/>
                        @endif
                        <div>
                            You can also download a copy of this page with the button below. <br>
                            <a href="{{ route('teacher.student_details.show', ['id' => $data->id]) }}" class="button2" download="{{ $data->name }}  Details">Download
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </section>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection