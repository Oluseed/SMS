<h4><span>{{ $school->school_name }}</span> Student Portal. </h4>
                <div id="profile">
                    <img src="/../imgs/student.jpg" alt="Student Picture" title="Peter Parker"/>
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