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
                        <tr>
                            <th>Date</th>
                            <th>8:00-9:00AM</th>
                            <th>9:00-10:00AM</th>
                            <th>10:00-11:00AM</th>
                            <th>11:00-12:00PM</th>
                            <th>12:00-1:00PM</th>
                            <th>1:00-2:00PM</th>
                            <th>2:00-3:00PM</th>
                        </tr>
                        
                        <tr>
                            <td>MON</td>
                            <td>BIO</td>
                            <td>CHM</td>
                            <td>MTH</td>
                            <td>PHY</td>
                            <td>COMP</td>
                            <td>GOV</td>
                            <td>EGL</td>
                        </tr>
                        
                        <tr>
                            <td>TUE</td>
                            <td>BIO</td>
                            <td>MTH</td>
                            <td>PHY</td>
                            <td>COM</td>
                            <td>ACC</td>
                            <td>LIT</td>
                            <td>AGR</td>
                        </tr>
                        
                        <tr>
                            <td>WED</td>
                            <td>YOR</td>
                            <td>CIV</td>
                            <td>GOV</td>
                            <td>ACC</td>
                            <td>CHM</td>
                            <td>BIO</td>
                            <td>MTH</td>
                        </tr>
                        
                        <tr>
                            <td>THU</td>
                            <td>EGL</td>
                            <td>MTH</td>
                            <td>ACC</td>
                            <td>LIT</td>
                            <td>CIV</td>
                            <td>COM</td>
                            <td>COMP</td>
                        </tr>
                        
                        <tr>
                            <td>FRI</td>
                            <td>PHY</td>
                            <td>LIT</td>
                            <td>MTH</td>
                            <td>GOV</td>
                            <td>GOV</td>
                            <td>HIS</td>
                            <td>CO</td>
                        </tr>
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
                <p>{{ $model_name }}
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection