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
                        <i class="fas fa-folder-open" aria-hidden="true"></i><b>   LESSON FILES</b>
                    </div>
                    <nav id="nav1">
						<span class="tablink current" onclick="openWave(event, 'files');">
							<span>All Files</span>
						</span>
						<span class="tablink" onclick="openWave(event, 'pictures');">
							<span>Pictures</span>
						</span>
						<span class="tablink" onclick="openWave(event, 'videos');">
							<span>Videos</span>
						</span>
				    </nav>
				    
				    <section id="files" class="content1" style="display: block;">
                        <img src="{{ asset('/../imgs/download.jpeg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
                        <img src="{{ asset('/../imgs/download.jpeg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
                        <img src="{{ asset('/../imgs/download.jpeg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
				    </section>
				    
				    <section id="pictures" class="content1">
				        <img src="{{ asset('/../imgs/images.jpg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
				        <img src="{{ asset('/../imgs/images.jpg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
				        <img src="{{ asset('/../imgs/images.jpg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
				    </section>
				    
				    <section id="videos" class="content1">
                        <img src="{{ asset('/../imgs/logo.jpg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
                        <img src="{{ asset('/../imgs/logo.jpg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
                        <img src="{{ asset('/../imgs/logo.jpg') }}" alt="Student Picture" title="Peter Parker" width="100%"/>
				    </section>
                </article>
                <script src="{{ asset('/../js/srms.js') }}">openWave();</script>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection