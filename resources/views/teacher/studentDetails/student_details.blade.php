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
                    <div class="head">
                        <i class="fas fa-bullhorn" aria-hidden="true"></i><b> Post Announcements</b>
                    </div>
                    <form method="POST" action="{{ route('teacher.announcement') }}" class="form_4" autocomplete="off">
                        @csrf
                        <label for="class"> Select Class*</label>
                        <br/>
                        <select name="class" required>
                            <option hidden disabled selected value> -- Select The Recipient -- </option>
                            <option value="jss 1">JSS 1</option>
                            <option value="jss 2">JSS 2</option>
                            <option value="jss 3">JSS 3</option>
                            <option value="sss 1">SSS 1</option>
                            <option value="sss 2">SSS 2</option>
                            <option value="sss 3">SSS 3</option>
                        </select>
                        <br/>
                        <br/>
                        <label for="title">Title*</label>
                        <br/>
                        <input type="text" name="title" placeholder="Type your headline here..." required/>
                        <br/>
                        <br/>
                        <label for="Story">Story*</label>
                        <br/>
                        <textarea name="story" rows="8" placeholder="Type your message..." required></textarea>
                        <button class="button3" type="submit">Post Announcement
  						    <i class="far fa-paper-plane"></i>
  						</button>
                    </form>
                </article>
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