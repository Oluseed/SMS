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
                    @if ($data != [])
                    <div class="head">
                        <i class="far fa-map" aria-hidden="true"></i><b>Edit Exam Result</b>
                    </div>
                    <ul class="ul1">
                        <form method="POST" action="{{ route('teacher.exam_result.update', ['name' => $data['name'], 'class' => $data['class']]) }}">
                            @csrf
                            @method('PUT')
                            <h3>{{ $data['name'] }}</h3>
                            <table border="1">
                                <tr>
                                    <th> S/N </th>
                                    <th>Subject</th>
                                    <th>Test Score</th>
                                    <th>Exam Score</th>
                                    <th>Total Score</th>
                                    <th>Grade</th>
                                </tr>
                                
                                <tr>
                                    <td>1</td>
                                    <td><input type="text" name="row1a" value="@isset($data['sub1'][0]){{ $data['sub1'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row1b" value="@isset($data['sub1'][1]){{ $data['sub1'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row1c" value="@isset($data['sub1'][2]){{ $data['sub1'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row1d" value="@isset($data['sub1'][3]){{ $data['sub1'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row1e" value="@isset($data['sub1'][4]){{ $data['sub1'][4] }}@endisset"/></td>
                                </tr>
                            
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" name="row2a" value="@isset($data['sub2'][0]){{ $data['sub2'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row2b" value="@isset($data['sub2'][1]){{ $data['sub2'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row2c" value="@isset($data['sub2'][2]){{ $data['sub2'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row2d" value="@isset($data['sub2'][3]){{ $data['sub2'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row2e" value="@isset($data['sub2'][4]){{ $data['sub2'][4] }}@endisset"/></td>
                                </tr>
                  
                                <tr>
                                    <td>3</td>
                                    <td><input type="text" name="row3a" value="@isset($data['sub3'][0]){{ $data['sub3'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row3b" value="@isset($data['sub3'][1]){{ $data['sub3'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row3c" value="@isset($data['sub3'][2]){{ $data['sub3'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row3d" value="@isset($data['sub3'][3]){{ $data['sub3'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row3e" value="@isset($data['sub3'][4]){{ $data['sub3'][4] }}@endisset"/></td>
                                </tr>
                  
                                <tr>
                                    <td>4</td>
                                    <td><input type="text" name="row4a" value="@isset($data['sub4'][0]){{ $data['sub4'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row4b" value="@isset($data['sub4'][1]){{ $data['sub4'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row4c" value="@isset($data['sub4'][2]){{ $data['sub4'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row4d" value="@isset($data['sub4'][3]){{ $data['sub4'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row4e" value="@isset($data['sub4'][4]){{ $data['sub4'][4] }}@endisset"/></td>
                                </tr>
                            
                                <tr>
                                    <td>5</td>
                                    <td><input type="text" name="row5a" value="@isset($data['sub5'][0]){{ $data['sub5'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row5b" value="@isset($data['sub5'][1]){{ $data['sub5'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row5c" value="@isset($data['sub5'][2]){{ $data['sub5'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row5d" value="@isset($data['sub5'][3]){{ $data['sub5'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row5e" value="@isset($data['sub5'][4]){{ $data['sub5'][4] }}@endisset"/></td>
                                </tr>
                            
                                <tr>
                                    <td>6</td>
                                    <td><input type="text" name="row6a" value="@isset($data['sub6'][0]){{ $data['sub6'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row6b" value="@isset($data['sub6'][1]){{ $data['sub6'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row6c" value="@isset($data['sub6'][2]){{ $data['sub6'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row6d" value="@isset($data['sub6'][3]){{ $data['sub6'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row6e" value="@isset($data['sub6'][4]){{ $data['sub6'][4] }}@endisset"/></td>
                                </tr>
                            
                                <tr>
                                    <td>7</td>
                                    <td><input type="text" name="row7a" value="@isset($data['sub7'][0]){{ $data['sub7'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row7b" value="@isset($data['sub7'][1]){{ $data['sub7'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row7c" value="@isset($data['sub7'][2]){{ $data['sub7'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row7d" value="@isset($data['sub7'][3]){{ $data['sub7'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row7e" value="@isset($data['sub7'][4]){{ $data['sub7'][4] }}@endisset"/></td>
                                </tr>
                  
                                <tr>
                                    <td>8</td>
                                    <td><input type="text" name="row8a" value="@isset($data['sub8'][0]){{ $data['sub8'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row8b" value="@isset($data['sub8'][1]){{ $data['sub8'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row8c" value="@isset($data['sub8'][2]){{ $data['sub8'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row8d" value="@isset($data['sub8'][3]){{ $data['sub8'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row8e" value="@isset($data['sub8'][4]){{ $data['sub8'][4] }}@endisset"/></td>
                                </tr>
                  
                                <tr>
                                    <td>9</td>
                                    <td><input type="text" name="row9a" value="@isset($data['sub9'][0]){{ $data['sub9'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row9b" value="@isset($data['sub9'][1]){{ $data['sub9'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row9c" value="@isset($data['sub9'][2]){{ $data['sub9'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row9d" value="@isset($data['sub9'][3]){{ $data['sub9'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row9e" value="@isset($data['sub9'][4]){{ $data['sub9'][4] }}@endisset"/></td>
                                </tr>
                  
                                <tr>
                                    <td>10</td>
                                    <td><input type="text" name="row10a" value="@isset($data['sub10'][0]){{ $data['sub10'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row10b" value="@isset($data['sub10'][1]){{ $data['sub10'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row10c" value="@isset($data['sub10'][2]){{ $data['sub10'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row10d" value="@isset($data['sub10'][3]){{ $data['sub10'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row10e" value="@isset($data['sub10'][4]){{ $data['sub10'][4] }}@endisset"/></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td><input type="text" name="row11a" value="@isset($data['sub11'][0]){{ $data['sub11'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row11b" value="@isset($data['sub11'][1]){{ $data['sub11'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row11c" value="@isset($data['sub11'][2]){{ $data['sub11'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row11d" value="@isset($data['sub11'][3]){{ $data['sub11'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row11e" value="@isset($data['sub11'][4]){{ $data['sub11'][4] }}@endisset"/></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td><input type="text" name="row12a" value="@isset($data['sub12'][0]){{ $data['sub12'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row12b" value="@isset($data['sub12'][1]){{ $data['sub12'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row12c" value="@isset($data['sub12'][2]){{ $data['sub12'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row12d" value="@isset($data['sub12'][3]){{ $data['sub12'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row12e" value="@isset($data['sub12'][4]){{ $data['sub12'][4] }}@endisset"/></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td><input type="text" name="row13a" value="@isset($data['sub13'][0]){{ $data['sub13'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row13b" value="@isset($data['sub13'][1]){{ $data['sub13'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row13c" value="@isset($data['sub13'][2]){{ $data['sub13'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row13d" value="@isset($data['sub13'][3]){{ $data['sub13'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row13e" value="@isset($data['sub13'][4]){{ $data['sub13'][4] }}@endisset"/></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td><input type="text" name="row14a" value="@isset($data['sub14'][0]){{ $data['sub14'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row14b" value="@isset($data['sub14'][1]){{ $data['sub14'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row14c" value="@isset($data['sub14'][2]){{ $data['sub14'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row14d" value="@isset($data['sub14'][3]){{ $data['sub14'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row14e" value="@isset($data['sub14'][4]){{ $data['sub14'][4] }}@endisset"/></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td><input type="text" name="row15a" value="@isset($data['sub15'][0]){{ $data['sub15'][0] }}@endisset"/></td>
                                    <td><input type="text" name="row15b" value="@isset($data['sub15'][1]){{ $data['sub15'][1] }}@endisset"/></td>
                                    <td><input type="text" name="row15c" value="@isset($data['sub15'][2]){{ $data['sub15'][2] }}@endisset"/></td>
                                    <td><input type="text" name="row15d" value="@isset($data['sub15'][3]){{ $data['sub15'][3] }}@endisset"/></td>
                                    <td><input type="text" name="row15e" value="@isset($data['sub15'][4]){{ $data['sub15'][4] }}@endisset"/></td>
                                </tr>
                            </table>
                            <button class="button3" style="margin-top:30px;" type="submit">Post Result
  						        <i class="far fa-paper-plane"></i>
  						    </button>
                        </form>
                    </ul>
                    @endif
                </article>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection