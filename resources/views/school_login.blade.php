@extends('layouts.mainlay')
@section('content')
<br>
<br>
            <div class="intro_box">
                <h4>Welcome to Student Management System.</h4>
                <p>
                    Select your respective school below
                    <br/>
                    <br/>
                    If you can't find your registered school here, contact us at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
            <br>
            
            <div class="intro_box">
                <h2>Select Your School</h2>
                
                <form method="POST" action="{{ route('select.school') }}" class="form_2" autocomplete="off">
                    @csrf
                    <input type="text" name="school_name" list="name" required/>
                    <datalist id="name">
                    @foreach ($schools as $school)
                        <option value="{{ $school->school_name }}">{{ $school->school_name }}</option>
                    @endforeach
                    </datalist>
                    <br>
                    <br>
                    <button type="submit" class="button1">Enter <i class="far fa-paper-plane"></i></button>
                </form>
            </div>
            <br/><br/>
@endsection