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
                        <i class="far fa-question-circle" aria-hidden="true"></i><b>   Question Of The Week</b>
                        <aside class="right">10/07/2019</aside>
                    </div>
                    <form class="form_3">
                        <h3>Mathematics</h3>
                        <span>Mr Mike has a cement-producing firm worth of 20 million naira.Hypothetically,Draw a Credit and Debit transaction of Mr Mike's Company</span>
                        <br/>
                        <textarea placeholder="Type in your answer..."rows="8"></textarea>
                        <button class="button2" type="submit">Submit
                            <i class="far fa-paper-plane"></i>
                        </button>
                    </form>
                </article>

                <article class="content_box">
                    <div class="head">
                        <i class="far fa-question-circle" aria-hidden="true"></i><b>   Question Of The Week</b>
                        <aside class="right">10/01/2019</aside>
                    </div>
                    <form class="form_3">
                        <h3>Science</h3>
                        <span>Explain the Process of Digestion in Humans</span>
                        <br/>
                        <textarea placeholder="Type in your answer..."rows="8"></textarea>
                        <button class="button2" type="submit">Submit
                            <i class="far fa-paper-plane"></i>
                        </button>
                    </form>
                </article>

                <article class="content_box">
                    <div class="head">
                        <i class="far fa-question-circle" aria-hidden="true"></i><b>   Question Of The Week</b>
                        <aside class="right">20/07/2020</aside>
                    </div>
                    <form class="form_3">
                        <h3>History</h3>
                        <span>Discuss in not less than 200 words,the Effects of Alcoholism in Nigeria</span>
                        <br/>
                        <textarea placeholder="Type in your answer..."rows="8"></textarea>
                        <button class="button2" type="submit">Submit
                            <i class="far fa-paper-plane"></i>
                        </button>
                    </form>
                </article>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection