@extends('layouts.schoollay')


@section('form')

                <!-- Session Status -->
                {{-- @props(session('status')) --}}

                @if (session('status'))
                    <div>
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Validation Errors -->
                {{-- @props(['errors']) --}}

                @if ($errors->any())
                    <div>
                        <div class="font-medium text-red-600">
                            {{ __('Whoops! Something went wrong.') }}
                        </div>

                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <img src="imgs/images(7).jpg" alt="Teachers Poster"/>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="teacher_id">Teacher ID</label>
                    <br/>
                    <input type="text" name="teacher_id" placeholder="UQE/SCI/999" required autofocus/>
                    <br/>
                    <br/>
                    <label for="password">Password</label>
                    <br/>
                    <input type="password" name="password" required/>
                    <br/>
                    <br/>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <br/>
                    <button type="submit">Login</button>
          		</form>
@endsection