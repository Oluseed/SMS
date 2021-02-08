                <form action="{{ route('student.portal') }}" method="get">
                    <button type="submit" class="button_null right" style="text-decoration:underline; font-size:16px">PORTAL HOME</button>
                </form>
                <h4><span class="capitalize">{{ $school->school_name }}</span> Student Portal. </h4>
                <div id="profile">
                    <img src="{{ asset('/../imgs/student.jpg') }}" alt="Student Picture" title="{{ $user->name }}"/>
                    <div>
                        <label>NAME: </label>
                        <span>{{ $user->name }}</span>
                        <br/>
                        <label>STUDENT ID: </label>
                        <span class="caps">{{ $user->regno }}</span>
                        <br/>
                        <label>TERM & SESSION: </label>
                        <span>First Term | 2020/2021</span>
                        <br/>
                        <label>CLASS: </label>
                        <span class="caps">{{ $user->class }}</span>
                    </div>
                </div>