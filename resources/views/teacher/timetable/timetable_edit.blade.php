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
                        <i class="fa fa-table" aria-hidden="true"></i><b> Update Timetable</b>
                    </div>
                    <ul class="ul1">
                        <form method="POST" action="{{ route('teacher.timetable.update', ['id' => $form[0]->id, 'class' => $user->class_teacher]) }}">
                            @csrf
                            @method('PUT')
                            <div class="day_box btn0">
                                <li>Set Periods
                                    <span class="i0">
                                        <i class="fas fa-angle-double-down right"></i>
                                    </span>
                                </li>
                            </div>
                            <div class="table_box table0">
                                <table border="3">
                                    <tr>
                                        <th>Period</th>
                                        <th>Time-Interval</th>
                                    </tr>
                                    <tr>
                                        <td>1<sup>st</sup> Period</td>
                                        <td>
                                            <input type="text" name="period1" value="{{ $form[0]->col1 }}" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="period2" value="{{ $form[0]->col2 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="period3" value="{{ $form[0]->col3 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period4" value="{{ $form[0]->col4 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period5" value="{{ $form[0]->col5 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period6" value="{{ $form[0]->col6 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period7" value="{{ $form[0]->col7 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period8" value="{{ $form[0]->col8 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period9" value="{{ $form[0]->col9 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period10" value="{{ $form[0]->col10 }}"/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="day_box btn1">
                                <li>Monday
                                    <span class="i1">
                                        <i class="fas fa-angle-double-down right"></i>
                                    </span>
                                </li>
                            </div>
                            <div class="table_box table1">
                                <table border="3">
                                    <tr>
                                        <th>Period</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>1<sup>st</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon1" value="{{ $form[1]->col1 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon2" value="{{ $form[1]->col2 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon3" value="{{ $form[1]->col3 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon4" value="{{ $form[1]->col4 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon5" value="{{ $form[1]->col5 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon6" value="{{ $form[1]->col6 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon7" value="{{ $form[1]->col7 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon8" value="{{ $form[1]->col8 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon9" value="{{ $form[1]->col9 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon10" value="{{ $form[1]->col10 }}"/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="day_box btn2">
                                <li>Tuesday
                                    <span class="i2">
                                        <i class="fas fa-angle-double-down right"></i>
                                    </span>
                                </li>
                            </div>
                            <div class="table_box table2">
                                <table border="3">
                                    <tr>
                                        <th>Period</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>1<sup>st</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue1" value="{{ $form[2]->col1 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue2" value="{{ $form[2]->col2 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue3" value="{{ $form[2]->col3 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue4" value="{{ $form[2]->col4 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue5" value="{{ $form[2]->col5 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue6" value="{{ $form[2]->col6 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue7" value="{{ $form[2]->col7 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue8" value="{{ $form[2]->col8 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue9" value="{{ $form[2]->col9 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue10" value="{{ $form[2]->col10 }}"/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="day_box btn3">
                                <li>Wednesday
                                    <span class="i3">
                                        <i class="fas fa-angle-double-down right"></i>
                                    </span>
                                </li>
                            </div>
                            <div class="table_box table3">
                                <table border="3">
                                    <tr>
                                        <th>Period</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>1<sup>st</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed1" value="{{ $form[3]->col1 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed2" value="{{ $form[3]->col2 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed3" value="{{ $form[3]->col3 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed4" value="{{ $form[3]->col4 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed5" value="{{ $form[3]->col5 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed6" value="{{ $form[3]->col6 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed7" value="{{ $form[3]->col7 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed8" value="{{ $form[3]->col8 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed9" value="{{ $form[3]->col9 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed10" value="{{ $form[3]->col10 }}"/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="day_box btn4">
                                <li>Thursday
                                    <span class="i4">
                                        <i class="fas fa-angle-double-down right"></i>
                                    </span>
                                </li>
                            </div>
                            <div class="table_box table4">
                                <table border="3">
                                    <tr>
                                        <th>Period</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>1<sup>st</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu1" value="{{ $form[4]->col1 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu2" value="{{ $form[4]->col2 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu3" value="{{ $form[4]->col3 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu4" value="{{ $form[4]->col4 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu5" value="{{ $form[4]->col5 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu6" value="{{ $form[4]->col6 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu7" value="{{ $form[4]->col7 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu8" value="{{ $form[4]->col8 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu9" value="{{ $form[4]->col9 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu10" value="{{ $form[4]->col10 }}"/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="day_box btn5">
                                <li>Friday
                                    <span class="i5">
                                        <i class="fas fa-angle-double-down right"></i>
                                    </span>
                                </li>
                            </div>
                            <div class="table_box table5">
                                <table border="3">
                                    <tr>
                                        <th>Period</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>1<sup>st</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri1" value="{{ $form[5]->col1 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri2" value="{{ $form[5]->col2 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri3" value="{{ $form[5]->col3 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri4" value="{{ $form[5]->col4 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri5" value="{{ $form[5]->col5 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri6" value="{{ $form[5]->col6 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri7" value="{{ $form[5]->col7 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri8" value="{{ $form[5]->col8 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri9" value="{{ $form[5]->col9 }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri10" value="{{ $form[5]->col10 }}"/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br/>
                            <br/>
                            <br/>
                            <button type="submit" class="button2">Post 
                                <i class="far fa-paper-plane"></i>
                            </button>
                        </form>
                    </ul>
                </article>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection