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
                        <i class="fa fa-table" aria-hidden="true"></i><b> Timetable</b>
                    </div>
                    <table border="3">
                    @if ($data != '')
                    @foreach ($data as $row)
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
                    <button class="button2">Download
                        <i class="fas fa-download"></i>
                    </button>
                    <button class="button2">Print
                        <i class="fas fa-download"></i>
                    </button>
                </article>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection