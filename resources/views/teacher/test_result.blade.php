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
                    @if ($data != 'empty')
                    <div class="head">
                        <div style="color:red">{{ $message }}</div>
                        <i class="far fa-map" aria-hidden="true"></i><b>Post Test Results</b>
                    </div>
                    <ul class="ul1">
                        <form method="POST" action="{{ route('teacher.test_result') }}">
                            @csrf
                            <h3>Select the Student's name <i class="fas fa-angle-double-down right"></i></h3>
                            <input type="text" class="datalist-test" name="student_name" list="name" autocomplete="off" required/>
                            <datalist id="name">
                                @foreach ($data as $row)
                                    <option value="{{ $row->name }}">{{ $row->name }}</option>
                                @endforeach
                            </datalist>
                            <table border="1">
                                <tr>
                                    <th> S/N </th>
                                    <th>Subject</th>
                                    <th>1<sup>st</sup>Test Score</th>
                                    <th>2<sup>nd</sup> Test Score</th>
                                    <th>Total Score</th>
                                </tr>
                                
                                <tr>
                                    <td>1</td>
                                    <td><input type="text" name="row1a"/></td>
                                    <td><input type="number" name="row1b"/></td>
                                    <td><input type="number" name="row1c"/></td>
                                    <td><input type="number" name="row1d"/></td>
                                </tr>
                            
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" name="row2a"/></td>
                                    <td><input type="number" name="row2b"/></td>
                                    <td><input type="number" name="row2c"/></td>
                                    <td><input type="number" name="row2d"/></td>
                                </tr>
                  
                                <tr>
                                    <td>3</td>
                                    <td><input type="text" name="row3a"/></td>
                                    <td><input type="number" name="row3b"/></td>
                                    <td><input type="number" name="row3c"/></td>
                                    <td><input type="number" name="row3d"/></td>
                                </tr>
                  
                                <tr>
                                    <td>4</td>
                                    <td><input type="text" name="row4a"/></td>
                                    <td><input type="number" name="row4b"/></td>
                                    <td><input type="number" name="row4c"/></td>
                                    <td><input type="number" name="row4d"/></td>
                                </tr>
                            
                                <tr>
                                    <td>5</td>
                                    <td><input type="text" name="row5a"/></td>
                                    <td><input type="number" name="row5b"/></td>
                                    <td><input type="number" name="row5c"/></td>
                                    <td><input type="number" name="row5d"/></td>
                                </tr>
                            
                                <tr>
                                    <td>6</td>
                                    <td><input type="text" name="row6a"/></td>
                                    <td><input type="number" name="row6b"/></td>
                                    <td><input type="number" name="row6c"/></td>
                                    <td><input type="number" name="row6d"/></td>
                                </tr>
                            
                                <tr>
                                    <td>7</td>
                                    <td><input type="text" name="row7a"/></td>
                                    <td><input type="number" name="row7b"/></td>
                                    <td><input type="number" name="row7c"/></td>
                                    <td><input type="number" name="row7d"/></td>
                                </tr>
                  
                                <tr>
                                    <td>8</td>
                                    <td><input type="text" name="row8a"/></td>
                                    <td><input type="number" name="row8b"/></td>
                                    <td><input type="number" name="row8c"/></td>
                                    <td><input type="number" name="row8d"/></td>
                                </tr>
                  
                                <tr>
                                    <td>9</td>
                                    <td><input type="text" name="row9a"/></td>
                                    <td><input type="number" name="row9b"/></td>
                                    <td><input type="number" name="row9c"/></td>
                                    <td><input type="number" name="row9d"/></td>
                                </tr>
                  
                                <tr>
                                    <td>10</td>
                                    <td><input type="text" name="row10a"/></td>
                                    <td><input type="number" name="row10b"/></td>
                                    <td><input type="number" name="row10c"/></td>
                                    <td><input type="number" name="row10d"/></td>
                                </tr>
                            
                                <tr>
                                    <td>11</td>
                                    <td><input type="text" name="row11a"/></td>
                                    <td><input type="number" name="row11b"/></td>
                                    <td><input type="number" name="row11c"/></td>
                                    <td><input type="number" name="row11d"/></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td><input type="text" name="row12a"/></td>
                                    <td><input type="number" name="row12b"/></td>
                                    <td><input type="number" name="row12c"/></td>
                                    <td><input type="number" name="row12d"/></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td><input type="text" name="row13a"/></td>
                                    <td><input type="number" name="row13b"/></td>
                                    <td><input type="number" name="row13c"/></td>
                                    <td><input type="number" name="row13d"/></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td><input type="text" name="row14a"/></td>
                                    <td><input type="number" name="row14b"/></td>
                                    <td><input type="number" name="row14c"/></td>
                                    <td><input type="number" name="row14d"/></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td><input type="text" name="row15a"/></td>
                                    <td><input type="number" name="row15b"/></td>
                                    <td><input type="number" name="row15c"/></td>
                                    <td><input type="number" name="row15d"/></td>
                                </tr>
                            </table>
                            <button class="button3" style="margin-top:30px;" type="submit">Post Result
  						        <i class="far fa-paper-plane"></i>
  						    </button>
                        </form>
                    </ul>
                    @else
                    <div class="head">
                        <p><i class="far fa-map" aria-hidden="true"></i>Submit the student's result to the class teacher to post.</p>
                    </div>
                    @endif
                </article>
@endsection

@section('content_queweek')
            @if ($data2 != 'empty')
            @if ($data2 != null)
            <div class="intro_box">
                <h2 style="color:#0c3b79">The following student's result has been posted.</h2>
                <ul>
                    @foreach ($data2 as $row)
                    <li>
                        <h5>
                            <span style="color:#0c3b79">{{ $loop->iteration }}. </span> 
                            <a style="text-decoration:none" href="{{ route('teacher.test_result.show', ['id' => $row->name]) }}">{{ $row->name }}</a>
                        </h5>
                    </li>
                    @endforeach
                </ul>
            </div>
            @else
            <div class="intro_box">
                <h2 class="capitalize">No student result has been posted yet.</h2>
            </div>
            @endif
            <br/><br/>
            @endif
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection