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
                        <i class="far fa-map" aria-hidden="true"></i><b>Post Test Results</b>
                    </div>
                    <ul class="ul1">
                        <form method="POST" action="{{ route('teacher.test_result') }}">
                            @csrf
                            <h3>Select the Student's name <i class="fas fa-angle-double-down right"></i></h3>
                            <input type="text" class="datalist-test" name="school_name" list="name" autocomplete="off" required/>
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
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                            
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                  
                                <tr>
                                    <td>3</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                  
                                <tr>
                                    <td>4</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                            
                                <tr>
                                    <td>5</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                            
                                <tr>
                                    <td>6</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                            
                                <tr>
                                    <td>7</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                  
                                <tr>
                                    <td>8</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                  
                                <tr>
                                    <td>9</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                  
                                <tr>
                                    <td>10</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                            
                                <tr>
                                    <td>11</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td><input type="text" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                    <td><input type="number" name=""/></td>
                                </tr>
                            </table>
                            <button class="button3" style="margin-top:30px;" type="submit">Post Result
  						        <i class="far fa-paper-plane"></i>
  						    </button>
                        </form>
                    </ul>
                </article>
@endsection

@section('content_queweek')
            <div class="intro_box">
                <h2>Select the student name you want to check</h2>
                
                <form method="POST" action="{{ route('teacher.test_result') }}" class="form_2" autocomplete="off">
                    @csrf
                    <input type="text" name="name" list="name" required/>
                    <datalist id="name">
                        @foreach ($data2 as $row)
                        <option value="{{ $row->name }}">{{ $row->name }}</option>
                        @endforeach
                    </datalist>
                    <br>
                    <br>
                    <button type="submit" class="button1">Check Result
                        <i class="far fa-paper-plane"></i>
                    </button>
                </form>
            </div>
            <br/><br/>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection