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
                    <form class="form_3">
  						<label>Student ID*</label>
  						<br/>
  						<input type="text" placeholder="Student ID"required/>
  						
  						<label>Title or Topic*</label>
  						<br/>
  						<input type="text" placeholder="" required/>
  						
  						<label>Message*</label>
  						<br/>
  						<textarea placeholder="Type in your message..."rows="8" required></textarea>
  						<br>
  						<button class="button2" type="submit">Send
  						    <i class="far fa-paper-plane"></i>
  						</button>
			        </form>
			    </section>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection