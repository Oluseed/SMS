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
                        <i class="fas fa-folder-open" aria-hidden="true"></i><b>   LESSON FILES</b>
                    </div>
                    
                    <h3>Nomenclature of Organic Compounds</h3>
          
                    <a href="#">
                        <img src="../imgs/download.jpeg" alt="Student Picture" title="Peter Parker" width="100%"/>
                    </a>
                </article>
@endsection

@section('bottom_box')
            <div class="intro_box">
                <p>{{ $model_name }}
                    If you have any problem with your portal, you can drop your complain or message your principal / headteacher at <a href="#" title="Contact / Complain">Contact Info</a>.
                </p>
            </div>
@endsection