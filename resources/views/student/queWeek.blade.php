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
            @if ($data != '')
            @foreach ($data as $question)
            <section class="content">
                <article class="content_box">
                    <div class="head">
                        <i class="far fa-question-circle" aria-hidden="true"></i><b>   Question Of The Week</b>
                        <aside class="right">{{ date($question->created_at) }}</aside>
                    </div>
                    <form class="form_3" method="POST" action="{{ route('student.queWeek') }}">
                        @csrf
                        <h3>{{ $question->subject }}</h3>
                        <span>{{ $question->question }}</span>
                        <br/>
                        <input type="hidden" name="question_id" value="{{ $question->id }}">
                        <textarea name="answer" placeholder="Type in your answer..."rows="8" required></textarea>
                        <button class="button2" type="submit">Submit
                            <i class="far fa-paper-plane"></i>
                        </button>
                    </form>
                </article>
            </section>
            @endforeach
            @else
            <section class="content">
                <article class="content_box">
                    <div class="head">
                        <span style="color:red;" class="capitalize">No Question Posted yet.</span>
                        <br>
                        <br>
                        <form action="{{ route('student.portal') }}" method="get">
                            <button type="submit" class="button2" style="background:green">&larr; Go Back</button>
                        </form>
                    </div>
                </article>
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