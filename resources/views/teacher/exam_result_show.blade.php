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
                        <i class="far fa-table" aria-hidden="true"></i><b>  Exam Results</b>
                        <br>
                        <br>
                        <span style="font-size:20px;font-weight:500">{{ $data->name }}</span>
                        <form method="POST" action="{{ url('/teacher/exam_result/'.$data->name.'/delete') }}" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="row_id" value="{{ $data->id }}" required/>
                            <button type="submit" class="button2" style="background:#9c0303ff;">Delete
                                <i class="far fa-trash-alt" aria-hidden="true"></i>
                            </button>
                        </form>
                        <form method="GET" action="{{ url('/teacher/exam_result/'.$data->id.'/edit') }}" style="display:inline">
                            <button type="submit" class="button2" style="background:#9b850bff;">Edit
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </form>
                        
                    </div>
                    <table border="1">
                        <tr>
                            <th> S/N </th>
                            <th>Subject</th>
                            <th>Test Score</th>
                            <th>Exam Score</th>
                            <th>Total Score</th>
                            <th>Grade</th>
                        </tr>
                        @if ($data != '')
                        @if ($data->sub1)
                        <tr>
                            <td>1</td>
                            @foreach (explode(',', $data->sub1) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub2)
                        <tr>
                            <td>2</td>
                            @foreach (explode(',', $data->sub2) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub3)
                        <tr>
                            <td>3</td>
                            @foreach (explode(',', $data->sub3) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub4)
                        <tr>
                            <td>4</td>
                            @foreach (explode(',', $data->sub4) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub5)
                        <tr>
                            <td>5</td>
                            @foreach (explode(',', $data->sub5) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub6)
                        <tr>
                            <td>6</td>
                            @foreach (explode(',', $data->sub6) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub7)
                        <tr>
                            <td>7</td>
                            @foreach (explode(',', $data->sub7) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub8)
                        <tr>
                            <td>8</td>
                            @foreach (explode(',', $data->sub8) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub9)
                        <tr>
                            <td>9</td>
                            @foreach (explode(',', $data->sub9) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub10)
                        <tr>
                            <td>10</td>
                            @foreach (explode(',', $data->sub10) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub11)
                        <tr>
                            <td>11</td>
                            @foreach (explode(',', $data->sub11) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub12)
                        <tr>
                            <td>12</td>
                            @foreach (explode(',', $data->sub12) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub13)
                        <tr>
                            <td>13</td>
                            @foreach (explode(',', $data->sub13) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub14)
                        <tr>
                            <td>14</td>
                            @foreach (explode(',', $data->sub14) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @if ($data->sub15)
                        <tr>
                            <td>15</td>
                            @foreach (explode(',', $data->sub15) as $row)
                            <td>{{ $row }}</td>
                            @endforeach
                        </tr>
                        @endif
                        @else
                        <tr>
                            <td colspan="5" style="color:red;" class="capitalize">This result has not been posted yet!!!</td>
                        </tr>
                        @endif
                    </table>
                    <a href="{{ route('teacher.test_result.show', ['id' => $data->name]) }}" class="button2" download="{{ $data->name }} test result">Download
                        <i class="fas fa-download"></i>
                    </a>
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

