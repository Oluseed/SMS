                <form action="{{ route('teacher.portal') }}" method="get">
                    <button type="submit" class="button_null right" style="text-decoration:underline; font-size:16px">PORTAL HOME</button>
                </form>
                <h4><span class="capitalize">{{ $school->school_name }}</span> Teacher Portal. </h4>
                <div id="profile">
                    <img src="{{ asset('/../imgs/student.jpg') }}" alt="Student Picture" title="{{ $user->name }}"/>
                    <div>
                        <label>NAME: </label>
                        <span>{{ $user->name }}</span>
                        <br/>
                        <label>TEACHER ID: </label>
                        <span class="caps">{{ $user->regno }}</span>
                        <br/>
                        <label>TERM & SESSION: </label>
                        <span>{{ $school->school_term }}</span>
                        <br/>
                        <label>CLASS TEACHER: </label>
                        <span class="caps">{{ $user->class_teacher }} @empty($user->class_teacher)General Teacher @endempty</span>
                    </div>
                </div>