@extends('layouts.schoollay')
@section('form')
                <img src="imgs/images(7).jpg" alt="Students Poster"/>
                <form method="POST" action="student.html">
                    <label>Teacher ID</label>
                    <br/>
                    <input type="text" name="Username" placeholder="UQE/SCI/999" required/>
                    <br/>
                    <br/>
                    <label>Password</label>
                    <br/>
                    <input type="password" name="Password" required/>
                    <br/>
                    <button type="submit">Login <i class="far fa-paper-plane"></i></button>
          		</form>
@endsection