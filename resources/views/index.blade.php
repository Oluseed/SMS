@extends('layouts.mainlay')
@section('content')
            <br />
            <br />
            <div class="intro_box blue">
                <h4>Welcome to Student Management System.</h4>
                <p>A system centred on providing an independently manageable and effective school management system, targeted at enhanced online learning.
                </p>
            </div>
            <br />
            <br />
            <div class="article-container">
                <article class="article">
                    <h3>Brief History of Lagos State Educational System</h3>
                    <p>
                        <img src="{{ asset('imgs/images(14).jpeg') }}" alt="State Logo" />
                        Lagos State Government operates state schools.The education system is the 6-3-3-4 system, which is practised throughout the country (as well as by many other members of the Economic Community of West African States).
                    </p>
                    <br />
                    <br />
                    <br />
                        <p>
                        The levels are Primary, Junior Secondary School (JSS), Senior Secondary School (SSS), and university. All children are offered basic education, with special focus now on the first nine years. Lagos is home to various postsecondary schools, universities and other vocational institutions that are either operated by the government or private entities.
                        </p>
                </article>
                <figure class="">
                    <img src="{{ asset('imgs/governor.jpg') }}" alt="Governor Picture" height="auto"/>
                    <figcaption>
                        <h3 class="blue">Babajide Olusola Sanwo-Olu</h3>
                        <h3>Governor Of Lagos State</h3>
                    </figcaption>
                </figure>
                <figure class="">
                    <img src="{{ asset('imgs/minister.jpg') }}" alt="Commissioner Picture" height="auto"/>
                    <figcaption>
                        <h3 class="blue">Folashade Adefisayo</h3>
                        <h3>Lagos State Commissioner Of Education</h3>
                    </figcaption>
                </figure>
            </div>
            <div class="article-container-2">
                <article class="article box-b-1">
                    <div class="article-logo">
                        <i class="fas fa-home" style="color:#c409ff" aria-hidden="true"></i>
                    </div>
                    <h3>Select School</h3>
                    
                    <p class="links-content">
                        An online gateway where students can log into a school website to access important program information. Student portal contain information on subjects offered timetables, announcement, test and exam results, e.t.c. It also offer links to useful Web resources, such as lesson files and videos on various subjects.
                    </p>
                    <a class="home_buttons" href="{{ route('select.school') }}">Learn More <i class="fa fa-pencil-square-o"></i></a>
                </article>
                <article class="article box-b-2">
                    <div class="article-logo">
                        <i class="fa fa-pencil-square-o" style="color:#099400" aria-hidden="true"></i>
                    </div>
                    <h3>Student Login</h3>
                    
                    <p class="links-content">
                        An online gateway where students can log into a school website to access important program information. Student portal contain information on subjects offered timetables, announcement, test and exam results, e.t.c. It also offer links to useful Web resources, such as lesson files and videos on various subjects.
                    </p>
                    <a class="home_buttons" href="{{ route('login') }}">Learn More <i class="fa fa-pencil-square-o"></i></a>
                </article>
                <article class="article box-b-3">
                    <div class="article-logo">
                        <i class="fa f
                        fa-pencil-square-o" style="color:#009998" aria-hidden="true"></i>
                    </div>
                    <h3>Teacher Login</h3>
                    
                    <p class="links-content">
                        An online gateway where students can log into a school website to access important program information. Student portal contain information on subjects offered timetables, announcement, test and exam results, e.t.c. It also offer links to useful Web resources, such as lesson files and videos on various subjects.
                    </p>
                    <a class="home_buttons" href="{{ route('teacher.login') }}">Learn More <i class="fa fa-pencil-square-o"></i></a>
                </article>
                <article class="article box-b-4">
                    <div class="article-logo">
                        <i class="fas fa-users" style="color:#b80082ea" aria-hidden="true"></i>
                    </div>
                    <h3>Student Portal</h3>
                    
                    <p class="links-content">
                        An online gateway where students can log into a school website to access important program information. Student portal contain information on subjects offered timetables, announcement, test and exam results, e.t.c. It also offer links to useful Web resources, such as lesson files and videos on various subjects.
                    </p>
                    <a class="home_buttons" href="{{ route('student.portal') }}">Learn More <i class="fa fa-pencil-square-o"></i></a>
                </article>
                <article class="article box-b-5">
                    <div class="article-logo">
                        <i class="fas fa-users" style="color:#00ccff" aria-hidden="true"></i>
                    </div>
                    <h3>Teacher Portal</h3>
                    
                    <p class="links-content">
                        An online gateway where students can log into a school website to access important program information. Student portal contain information on subjects offered timetables, announcement, test and exam results, e.t.c. It also offer links to useful Web resources, such as lesson files and videos on various subjects.
                    </p>
                    <a class="home_buttons" href="{{ route('teacher.portal') }}">Learn More <i class="fa fa-pencil-square-o"></i></a>
                </article>
                <article class="article box-b-6">
                    <div class="article-logo">
                        <i class="fas fa-user" style="color:#ff5656" aria-hidden="true"></i>
                    </div>
                    <h3>Principal Portal</h3>
                    
                    <p class="links-content">
                        An online gateway where students can log into a school website to access important program information. Student portal contain information on subjects offered timetables, announcement, test and exam results, e.t.c. It also offer links to useful Web resources, such as lesson files and videos on various subjects.
                    </p>
                    <a class="home_buttons" href="#">Learn More <i class="fa fa-pencil-square-o"></i></a>
                </article>
                <article class="article box-b-7">
                    <div>
                        <h3>ABOUT US
                            <i class="fa fa-lightbulb-o right" aria-hidden="true"></i>
                        </h3>
                        <p>SMS is a management system that uses open source school management system for reducing daily routines of the school personnel that includes administrators,staff and teachers. 
                        </p>
                        <p>
                        This is done by providing the right features that enables these personnel to monitor different activities, upload many documents,produce reports and perform many other activities in a digital world, thus reducing many unnecessary workload and saving more time.
                        </p>
                        <img src="{{ asset('imgs/about_pics1.jpg') }}" alt="About picture" width="100%" height="auto"/>
                    </div>
                    <div>
                        <h3>What can this system do? 
                            <i class="fa fa-lightbulb-o right" aria-hidden="true"></i></h3>
                        <p>School management systems carry a number of advantages over traditional record keeping options. These include, but are not limited to:
                        </p>
                        <ul>
                            <li> &#10004;  Fully automated record keeping to improve teacher-parent engagement</li>
                            <br />
                            <li> &#10004; Improved record organization and transparency</li>
                            <br />
                            <li> &#10004;  Ability to pull reports at the individual, classroom, grade, and school-wide levels</li>
                            <br />
                            <li> &#10004;  Ability to send automated messages to groups of students at the classroom, grade, or school-wide levels</li>
                        </ul>
                        <img src="{{ asset('imgs/about_pics.jpg') }}" alt="About picture" width="100%" height="auto"/>
                    </div>
                </article>
            </div>
            <hr class="hr"/>
            <br />
            <br />
            <nav class="nav2">
                <span>External Links</span>
                <i class="fa fa-external-link"></i>
                <br />
                <br />
                <ul>
                    <a href="https://www.jamb.gov.ng/EfacilityLogin" target="_blank">
                        <li>
                            <img src="{{ asset('imgs/jamb.png') }}" alt="" />
                        </li>
                        <li>CHECK JAMB RESULT</li>
                        <li><i class="fa fa-credit-card"></i></li>
                    </a>
                    <a href="https://www.waecdirect.org" target="_blank">
                        <li>
                            <img src="{{ asset('imgs/waec.png') }}" alt="" />
                        </li>
                        <li>CHECK WAEC RESULT</li>
                        <li><i class="fa fa-credit-card"></i></li>
                    </a>
                    <a href="https://www.waecdirect.org" target="_blank">
                        <li>
                            <img src="{{ asset('imgs/waec.png') }}" alt="" />
                        </li>
                        <li>CHECK WAEC GCE RESULT</li>
                        <li><i class="fa fa-credit-card"></i></li>
                    </a>
                    <a href="http://www.mynecoexams.com/results/" target="_blank">
                        <li>
                            <img src="{{ asset('imgs/neco.png') }}" alt="" />
                        </li>
                        <li>CHECK NECO RESULT</li>
                        <li><i class="fa fa-credit-card"></i></li>
                    </a>
                    <a href="http://www.mynecoexams.com/results/" target="_blank">
                        <li>
                            <img src="{{ asset('imgs/neco.png') }}" alt="" />
                        </li>
                        <li>CHECK NECO GCE RESULT</li>
                        <li><i class="fa fa-credit-card"></i></li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="{{ asset('imgs/waec.png') }}" alt="" />
                        </li>
                        <li>CHECK JSCE RESULT</li>
                        <li><i class="fa fa-credit-card"></i></li>
                    </a>
                </ul>
            </nav>
            <hr class="hr"/>
@endsection