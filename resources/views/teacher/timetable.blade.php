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
                        <i class="fa fa-table" aria-hidden="true"></i><b>Post Timetable</b>
                    </div>
                    <ul class="ul1">
                        <form method="POST" action="#">
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
                                        <th>Time</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
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
                                        <th>Time</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
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
                                        <th>Time</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
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
                                        <th>Time</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
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
                                        <th>Time</th>
                                        <th>Subject</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"/>
                                        </td>
                                        <td>
                                            <input type="text"/>
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
                        @include('..layouts.timetable_buttons')
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
                        @include('..layouts.timetable_buttons')
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
                        @include('..layouts.timetable_buttons')
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
                        @include('..layouts.timetable_buttons')
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
                        @include('..layouts.timetable_buttons')
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
                        @include('..layouts.timetable_buttons')
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