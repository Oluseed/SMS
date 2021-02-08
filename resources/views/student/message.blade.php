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
                <section class="content_box">
                    <div class="head">
                        <i class="fas fa-comment-dots" aria-hidden="true"></i>
                        <b>   Messages</b>
                    </div>
                    <form method="POST" action="{{ route('student.message') }}" class="form_3">
                        @csrf
  						<label>Recipient</label>
  						<br/>
  						<select name="recipient" width="100%" placeholder="Select Recipient" required>
                            <option hidden disabled selected value> -- Select The Recipient -- </option>
                            <option value="class-teacher">Class Teacher</option>
                            <option value="Principal">Principal</option>  
                        </select>
                        <br>
                        <br>
  						<label>Title or Topic*</label>
  						<br/>
  						<input type="text" name="title" max="100" placeholder="" required/>
  						
  						<label>Message*</label>
  						<br/>
  						<textarea name="message" placeholder="Type in your message..."rows="8" required></textarea>
  						<br>
  						<button class="button2" type="submit">Send
  						    <i class="far fa-paper-plane"></i>
  						</button>
			        </form>
			    </section>
@endsection

@section('content_queweek')
            @if ($data != '')
            @foreach ($data as $question)
            <section class="content">
                <section class="content_box">
                    <div class="head">
                        <i class="fas fa-envelope" aria-hidden="true"></i><b> Inboxes</b>
                        <aside class="right">{{ $user->name }}</aside>
                    </div>
                    <ul>
                    @foreach($data as $row)
                        <h3 style="color: #0c3b79;">{{ $row->title }}</h3>
                        <li>{{ $row->message }}</li>
                    @endforeach
                    </ul>
                </section>
            </section>
            @endforeach
            @else
            <section class="content">
                <section class="content_box">
                    <div class="head">
                        <span style="color:red;" class="capitalize">oops, You don't have any message yet.</span>
                        <br>
                        <br>
                        <form action="{{ route('student.portal') }}" method="get">
                            <button type="submit" class="button2" style="background:green">&larr; Go Back</button>
                        </form>
                    </div>
                </section>
            </section>
            @endif
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection