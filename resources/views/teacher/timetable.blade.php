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
                @if ($user->class_teacher != '' && $show != 'true')
                <article class="content_box">
                    <div class="head">
                        <i class="fa fa-table" aria-hidden="true"></i><b>Post Timetable</b>
                    </div>
                    <ul class="ul1">
                        <form method="POST" action="{{ route('teacher.timetable') }}">
                            @csrf
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
                                            <input type="text" name="period1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="period2"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="period3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period4"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period5"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period6"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period7"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period8"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period9"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="period10"/>
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
                                            <input type="text" name="mon1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon2"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon4"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon5"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon6"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon7"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon8"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon9"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="mon10"/>
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
                                            <input type="text" name="tue1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue2"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue4"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue5"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue6"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue7"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue8"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue9"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="tue10"/>
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
                                            <input type="text" name="wed1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed2"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed4"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed5"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed6"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed7"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed8"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed9"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="wed10"/>
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
                                            <input type="text" name="thu1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu2"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu4"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu5"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu6"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu7"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu8"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu9"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="thu10"/>
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
                                            <input type="text" name="fri1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>nd</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri2"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>rd</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri4"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri5"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri6"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri7"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri8"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri9"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10<sup>th</sup> Period</td>
                                        <td>
                                            <input type="text" name="fri10"/>
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
                @endif
@endsection

@section('content_queweek')
            <section class="content">
                <article class="content_box">
                    <div class="head">
                        <i class="fa fa-table" aria-hidden="true"></i><b>   Timetable</b>
                    </div>
                    <div class="class_box btn6">
                        <li>JSS 1
                            <span class="i6">
                                <i class="fas fa-angle-double-down right"></i>
                            </span>
                        </li>
                    </div>
                    <div class="table_box table6">
                        <table border="3">
                            @if ($jss1 != '')
                            @foreach ($jss1 as $row)
                            @if ($loop->first)
                            <tr>
                                <th>{{ $row->day }}</th>
                                <th>{{ $row->col1 }}</th>
                                <th>{{ $row->col2 }}</th>
                                <th>{{ $row->col3 }}</th>
                                <th>{{ $row->col4 }}</th>
                                <th>{{ $row->col5 }}</th>
                                <th>{{ $row->col6 }}</th>
                                <th>{{ $row->col7 }}</th>
                                <th>{{ $row->col8 }}</th>
                                <th>{{ $row->col9 }}</th>
                                <th>{{ $row->col10 }}</th>
                            </tr>
                            @else
                            <tr>
                                <td>{{ $row->day }}</td>
                                <td>{{ $row->col1 }}</td>
                                <td>{{ $row->col2 }}</td>
                                <td>{{ $row->col3 }}</td>
                                <td>{{ $row->col4 }}</td>
                                <td>{{ $row->col5 }}</td>
                                <td>{{ $row->col6 }}</td>
                                <td>{{ $row->col7 }}</td>
                                <td>{{ $row->col8 }}</td>
                                <td>{{ $row->col9 }}</td>
                                <td>{{ $row->col10 }}</td>
                            </tr>
                            @endif
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="10" style="color:red;" class="capitalize">This table has not been posted yet!!!</td>
                                </tr>
                            @endif
                        </table>
                        @if ($jss1 != '' && $user->class_teacher == 'jss 1')
                        @include('..layouts.timetable_buttons', ['id' => $jss1[0]->id, 'class' => 'jss 1'])
                        @endif
                    </div>
                    <br />
                    <br />
                    <div class="class_box btn7">
                        <li>JSS 2
                            <span class="i7">
                                <i class="fas fa-angle-double-down right"></i>
                            </span>
                        </li>
                    </div>
                    <div class="table_box table7">
                        <table border="3">
                            @if ($jss2 != '')
                            @foreach ($jss2 as $row)
                            @if ($loop->first)
                            <tr>
                                <th>{{ $row->day }}</th>
                                <th>{{ $row->col1 }}</th>
                                <th>{{ $row->col2 }}</th>
                                <th>{{ $row->col3 }}</th>
                                <th>{{ $row->col4 }}</th>
                                <th>{{ $row->col5 }}</th>
                                <th>{{ $row->col6 }}</th>
                                <th>{{ $row->col7 }}</th>
                                <th>{{ $row->col8 }}</th>
                                <th>{{ $row->col9 }}</th>
                                <th>{{ $row->col10 }}</th>
                            </tr>
                            @else
                            <tr>
                                <td>{{ $row->day }}</td>
                                <td>{{ $row->col1 }}</td>
                                <td>{{ $row->col2 }}</td>
                                <td>{{ $row->col3 }}</td>
                                <td>{{ $row->col4 }}</td>
                                <td>{{ $row->col5 }}</td>
                                <td>{{ $row->col6 }}</td>
                                <td>{{ $row->col7 }}</td>
                                <td>{{ $row->col8 }}</td>
                                <td>{{ $row->col9 }}</td>
                                <td>{{ $row->col10 }}</td>
                            </tr>
                            @endif
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="10" style="color:red;" class="capitalize">This table has not been posted yet!!!</td>
                                </tr>
                            @endif
                        </table>
                        @if ($jss2 != '' && $user->class_teacher == 'jss 2')
                        @include('..layouts.timetable_buttons', ['id' => $jss2[0]->id, 'class' => 'jss 2'])
                        @endif
                    </div>
                    <br />
                    <br />
                    <div class="class_box btn8">
                        <li>JSS 3
                            <span class="i8">
                                <i class="fas fa-angle-double-down right"></i>
                            </span>
                        </li>
                    </div>
                    <div class="table_box table8">
                        <table border="3">
                            @if ($jss3 != '')
                            @foreach ($jss3 as $row)
                            @if ($loop->first)
                            <tr>
                                <th>{{ $row->day }}</th>
                                <th>{{ $row->col1 }}</th>
                                <th>{{ $row->col2 }}</th>
                                <th>{{ $row->col3 }}</th>
                                <th>{{ $row->col4 }}</th>
                                <th>{{ $row->col5 }}</th>
                                <th>{{ $row->col6 }}</th>
                                <th>{{ $row->col7 }}</th>
                                <th>{{ $row->col8 }}</th>
                                <th>{{ $row->col9 }}</th>
                                <th>{{ $row->col10 }}</th>
                            </tr>
                            @else
                            <tr>
                                <td>{{ $row->day }}</td>
                                <td>{{ $row->col1 }}</td>
                                <td>{{ $row->col2 }}</td>
                                <td>{{ $row->col3 }}</td>
                                <td>{{ $row->col4 }}</td>
                                <td>{{ $row->col5 }}</td>
                                <td>{{ $row->col6 }}</td>
                                <td>{{ $row->col7 }}</td>
                                <td>{{ $row->col8 }}</td>
                                <td>{{ $row->col9 }}</td>
                                <td>{{ $row->col10 }}</td>
                            </tr>
                            @endif
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="10" style="color:red;" class="capitalize">This table has not been posted yet!!!</td>
                                </tr>
                            @endif
                        </table>
                        @if ($jss3 != '' && $user->class_teacher == 'jss 3')
                        @include('..layouts.timetable_buttons', ['id' => $jss3[0]->id, 'class' => 'jss 3'])
                        @endif
                    </div>
                    <br />
                    <br />
                    <div class="class_box btn9">
                        <li>SSS 1
                            <span class="i9">
                                <i class="fas fa-angle-double-down right"></i>
                            </span>
                        </li>
                    </div>
                    <div class="table_box table9">
                        <table border="3">
                            @if ($sss1 != '')
                            @foreach ($sss1 as $row)
                            @if ($loop->first)
                            <tr>
                                <th>{{ $row->day }}</th>
                                <th>{{ $row->col1 }}</th>
                                <th>{{ $row->col2 }}</th>
                                <th>{{ $row->col3 }}</th>
                                <th>{{ $row->col4 }}</th>
                                <th>{{ $row->col5 }}</th>
                                <th>{{ $row->col6 }}</th>
                                <th>{{ $row->col7 }}</th>
                                <th>{{ $row->col8 }}</th>
                                <th>{{ $row->col9 }}</th>
                                <th>{{ $row->col10 }}</th>
                            </tr>
                            @else
                            <tr>
                                <td>{{ $row->day }}</td>
                                <td>{{ $row->col1 }}</td>
                                <td>{{ $row->col2 }}</td>
                                <td>{{ $row->col3 }}</td>
                                <td>{{ $row->col4 }}</td>
                                <td>{{ $row->col5 }}</td>
                                <td>{{ $row->col6 }}</td>
                                <td>{{ $row->col7 }}</td>
                                <td>{{ $row->col8 }}</td>
                                <td>{{ $row->col9 }}</td>
                                <td>{{ $row->col10 }}</td>
                            </tr>
                            @endif
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="10" style="color:red;" class="capitalize">This table has not been posted yet!!!</td>
                                </tr>
                            @endif
                        </table>
                        @if ($sss1 != '' && $user->class_teacher == 'sss 1')
                        @include('..layouts.timetable_buttons', ['id' => $sss1[0]->id, 'class' => 'sss 1'])
                        @endif
                    </div>
                    <br />
                    <br />
                    <div class="class_box btn10">
                        <li>SSS 2
                            <span class="i10">
                                <i class="fas fa-angle-double-down right"></i>
                            </span>
                        </li>
                    </div>
                    <div class="table_box table10">
                        <table border="3">
                            @if ($sss2 != '')
                            @foreach ($sss2 as $row)
                            @if ($loop->first)
                            <tr>
                                <th>{{ $row->day }}</th>
                                <th>{{ $row->col1 }}</th>
                                <th>{{ $row->col2 }}</th>
                                <th>{{ $row->col3 }}</th>
                                <th>{{ $row->col4 }}</th>
                                <th>{{ $row->col5 }}</th>
                                <th>{{ $row->col6 }}</th>
                                <th>{{ $row->col7 }}</th>
                                <th>{{ $row->col8 }}</th>
                                <th>{{ $row->col9 }}</th>
                                <th>{{ $row->col10 }}</th>
                            </tr>
                            @else
                            <tr>
                                <td>{{ $row->day }}</td>
                                <td>{{ $row->col1 }}</td>
                                <td>{{ $row->col2 }}</td>
                                <td>{{ $row->col3 }}</td>
                                <td>{{ $row->col4 }}</td>
                                <td>{{ $row->col5 }}</td>
                                <td>{{ $row->col6 }}</td>
                                <td>{{ $row->col7 }}</td>
                                <td>{{ $row->col8 }}</td>
                                <td>{{ $row->col9 }}</td>
                                <td>{{ $row->col10 }}</td>
                            </tr>
                            @endif
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="10" style="color:red;" class="capitalize">This table has not been posted yet!!!</td>
                                </tr>
                            @endif
                        </table>
                        @if ($sss2 != '' && $user->class_teacher == 'sss 2')
                        @include('..layouts.timetable_buttons', ['id' => $sss2[0]->id, 'class' => 'sss 2'])
                        @endif
                    </div>
                    <br />
                    <br />
                    <div class="class_box btn11">
                        <li>SSS 3
                            <span class="i11">
                                <i class="fas fa-angle-double-down right"></i>
                            </span>
                        </li>
                    </div>
                    <div class="table_box table11">
                        <table border="3">
                            @if ($sss3 != '')
                            @foreach ($sss3 as $row)
                            @if ($loop->first)
                            <tr>
                                <th>{{ $row->day }}</th>
                                <th>{{ $row->col1 }}</th>
                                <th>{{ $row->col2 }}</th>
                                <th>{{ $row->col3 }}</th>
                                <th>{{ $row->col4 }}</th>
                                <th>{{ $row->col5 }}</th>
                                <th>{{ $row->col6 }}</th>
                                <th>{{ $row->col7 }}</th>
                                <th>{{ $row->col8 }}</th>
                                <th>{{ $row->col9 }}</th>
                                <th>{{ $row->col10 }}</th>
                            </tr>
                            @else
                            <tr>
                                <td>{{ $row->day }}</td>
                                <td>{{ $row->col1 }}</td>
                                <td>{{ $row->col2 }}</td>
                                <td>{{ $row->col3 }}</td>
                                <td>{{ $row->col4 }}</td>
                                <td>{{ $row->col5 }}</td>
                                <td>{{ $row->col6 }}</td>
                                <td>{{ $row->col7 }}</td>
                                <td>{{ $row->col8 }}</td>
                                <td>{{ $row->col9 }}</td>
                                <td>{{ $row->col10 }}</td>
                            </tr>
                            @endif
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="10" style="color:red;" class="capitalize">This table has not been posted yet!!!</td>
                                </tr>
                            @endif
                        </table>
                        @if ($sss3 != '' && $user->class_teacher == 'sss 3')
                        @include('..layouts.timetable_buttons', ['id' => $sss3[0]->id, 'class' => 'sss 3'])
                        @endif
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