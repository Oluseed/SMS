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
                        <i class="far fa-map" aria-hidden="true"></i><b>   Exam Results</b>
                    </div>
                    <table border="1">
                        <tr>
                            <th> S/N </th>
                            <th>Subject</th>
                            <th>Test Score</th>
                            <th>Exam Score</th>
                            <th>Total</th>
                            <th>Grade</th>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>English</td>
                            <td>20</td>
                            <td>46</td>
                            <td>66</td>
                            <td>B</td>
                        </tr>
                    
                        <tr>
                            <td>2</td>
                            <td>Mathematics</td>
                            <td>25</td>
                            <td>26</td>
                            <td>51</td>
                            <td>C</td>
                        </tr>
          
                        <tr>
                            <td>3</td>
                            <td>Biology</td>
                            <td>28</td>
                            <td>56</td>
                            <td>84</td>
                            <td>A</td>
                        </tr>
          
                        <tr>
                            <td>4</td>
                            <td>Chemistry</td>
                            <td>19</td>
                            <td>52</td>
                            <td>71</td>
                            <td>A</td>
                        </tr>
                    
                        <tr>
                            <td>5</td>
                            <td>Physics</td>
                            <td>18</td>
                            <td>30</td>
                            <td>48</td>
                            <td>E</td>
                        </tr>
                    
                        <tr>
                            <td>6</td>
                            <td>Economics</td>
                            <td>25</td>
                            <td>25</td>
                            <td>50</td>
                            <td>C</td>
                        </tr>
                    
                        <tr>
                            <td>7</td>
                            <td>Geography</td>
                            <td>29</td>
                            <td>31</td>
                            <td>60</td>
                            <td>B</td>
                        </tr>
          
                        <tr>
                            <td>8</td>
                            <td>Civic Education</td>
                            <td>19</td>
                            <td>49</td>
                            <td>68</td>
                            <td>B</td>
                        </tr>
          
                        <tr>
                            <td>9</td>
                            <td>Agricultural Science</td>
                            <td>30</td>
                            <td>40</td>
                            <td>70</td>
                            <td>A</td>
                        </tr>
          
                        <tr>
                            <td>10</td>
                            <td>Computer Science</td>
                            <td>23</td>
                            <td>47</td>
                            <td>70</td>
                            <td>A</td>
                        </tr>
                    
                        <tr>
                            <td>11</td>
                            <td>Yoruba</td>
                            <td>15</td>
                            <td>25</td>
                            <td>40</td>
                            <td>E</td>
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