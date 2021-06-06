@extends('..layouts.portallay')
@section('status')
                <br/>
                <div><span>{{ $user->name }} | 
                    <form method="POST" action="{{ route('teacher.logout') }}" style="display:inline">
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

@section('content')
                <article class="content_box">
                    <div id="nav1">
                        <span class="tablink current" onclick="openWave(event, 'students-section');">
							<span><i class="fas fa-user" aria-hidden="true"></i> Students</span>
						</span>
						<span class="tablink" onclick="openWave(event, 'new-student');">
							<span><i class="fas fa-bullhorn" aria-hidden="true"></i> Add New Student</span>
						</span>
						<span class="tablink" onclick="openWave(event, 'others');">
							<span>Others</span>
						</span>
                    </div>
                    <section id="students-section" class="content1" style="display:block">
                        The students list will be placed here.
                    </section>

                    <section id="new-student" class="content1">
                        <div class="head">
                            <i class="fas fa-bullhorn" aria-hidden="true"></i><b> Add A New Student</b>
                        </div>
                        <x-auth-validation-errors style="color:#d83636;" :errors="$errors" />
                        <form method="POST" action="{{ route('teacher.student_details') }}" class="form_4" autocomplete="off">
                            @csrf
                            <label for="name"> Student Name*</label>
                            <br/>
                            <input type="text" name="name" placeholder="Surname First-name Other-name(s)" required/>
                            <br/>
                            <br/>
                            <label for="email"> Email*</label>
                            <br/>
                            <input type="email" name="email" placeholder="Insert email...." required/>
                            <br/>
                            <br/>
                            <label for="gender"> Gender*</label>
                            <br/>
                            <div id="radio">
                                <input type="radio" name="gender" value="male" required>
                                <span>Male</span>
                                <input type="radio" name="gender" value="female"required>
                                <span>Female</span>
                            </div>
                            <hr style="background:#0c3b79;padding:1px"/>
                            <label for="password">Password*</label>
                            <br/>
                            <input type="password" name="password" placeholder="Insert Student Account Password Here" required/>
                            <br/>
                            <br/>
                            <label for="password_confirmation">Confirm Password*</label>
                            <br/>
                            <input type="password" name="password_confirmation" placeholder="Insert Student Account Password Again" required/>
                            <br/>
                            <br/>
                            <button class="button3" type="submit">Add to Class
                                <i class="far fa-paper-plane"></i>
                            </button>
                        </form>
                    </section>

                    <section id="others" class="content1">
                        About the videos
                    </section>
                    
                </article>
                <script src="{{ asset('/../js/srms.js') }}">openWave();</script>
@endsection

@section('content_queweek')
                <section class="content">
                    <article class="content_box">
                        
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