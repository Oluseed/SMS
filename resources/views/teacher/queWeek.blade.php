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
                        <i class="fas fa-bullhorn" aria-hidden="true"></i><b> Post Question Of The Week</b>
                    </div>
                    @if ($form == '')
                    <form method="POST" action="{{ route('teacher.queWeek') }}" class="form_4" autocomplete="off">
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
                        <label for="subject">Subject*</label>
                        <br/>
                        <input type="text" name="subject" required/>
                        <br/>
                        <br/>
                        <label for="Story">Question*</label>
                        <br/>
                        <textarea name="question" rows="8" placeholder="Type your question..." required></textarea>
                        <button class="button3" type="submit">Post Question
  						    <i class="far fa-paper-plane"></i>
  						</button>
                    </form>
                    @else
                    <form method="POST" action="{{ route('teacher.queWeek.update', ['id' => $form->id]) }}" class="form_4" autocomplete="off">
                        @csrf
                        @method('PUT')
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
                        <label for="subject">Subject*</label>
                        <br/>
                        <input type="text" name="subject" value="{{ $form->subject }}" required/>
                        <br/>
                        <br/>
                        <label for="Story">Question*</label>
                        <br/>
                        <textarea name="question" rows="8" placeholder="Type your question..." required>{{ $form->question }}</textarea>
                        <button class="button3" type="submit">Post Question
  						    <i class="far fa-paper-plane"></i>
  						</button>
                    </form>
                    @endif
                </article>
@endsection

@section('content_queweek')
                <section class="content">
                    <article class="content_box">
                        @if ($data != '')
                        <div class="head">
                            <div style="color:red">{{ $message }}</div>
                            <i class="fas fa-bullhorn" aria-hidden="true"></i><b> Question Of The Week</b>
                        </div>
                        <ul>
                            @foreach($data as $row)
                            <h3 style="color: #0c3b79; display:inline">{{ $row->subject }}</h3>
                            @if ($user->name == $row->name)
                            <form method="POST" action="{{ route('teacher.queWeek.delete', ['id' => $row->id]) }}" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button4" style="background:#9c0303ff;">Delete
                                    <i class="far fa-trash-alt" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="GET" action="{{ route('teacher.queWeek.edit', ['id' => $row->id]) }}" style="display:inline">
                                <button type="submit" class="button4" style="background:#9b850bff;">Edit
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            @endif
                            <form method="GET" action="{{ route('teacher.queWeek.show', ['id' => $row->id]) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="button4" style="background:#0c3b79;">Open 
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <br>
                            <br>
                            <div class="right" style="display:block">From: 
                                <span class="capitalize" style="color:#0c3b79">{{ $row->name }}</span>
                            </div>
                            <br>
                            <li>{!! $row->question !!}</li>
                            @endforeach
                        </ul>
                        {{--$data->links()--}}
                        @else
                        <div class="head">
                            <span style="color:red;" class="capitalize">No Question Has Been Posted yet.</span>
                            <br>
                            <br>
                            <form action="{{ route('student.portal') }}" method="get">
                                <button type="submit" class="button2" style="background:green">&larr; Go Back</button>
                            </form>
                        </div>
                        @endif
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