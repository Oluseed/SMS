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
                        <form method="POST" action="#">
                            <h3>Select the Student's name <i class="fas fa-angle-double-down right"></i></h3>
                            <input type="text" class="datalist-test" name="school_name" list="name" required/>
                            <datalist id="name">
                        		<option>Ace Model College</option>
                        		<option>Ankerfield Model College</option>
                        		<option>Burdersmouth Model College</option>
                        		<option>Paddington High School</option>
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
                        </form>
                    </ul>
          
         
                    <button class="button2">Download</button>
                    <button class="button2">Print</button>
          
                </article>
@endsection

@section('content_queweek')
                
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection