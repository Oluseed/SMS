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

@section('content_queweek')
            <section class="content">
                <article class="content_box">
                    <div class="head">
                        <i class="far fa-question-circle" aria-hidden="true"></i><b>   Question Of The Week</b>
                        <aside class="right">{{ date($data->created_at) }}</aside>
                    </div>
                    <div>
                        <h3>{{ $data->subject }} -- {{ $data->class }}</h3>
                        <span>{{ $data->question }}</span>
                        <br/>
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