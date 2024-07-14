@extends('layouts.user')

@section('content')
<div class="w-full h-screen bg-[url('https://i.ibb.co/hZpdbkY/248479853-2133515060137518-4885646735485668126-n.jpg')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
<div class="">
    <div class=" mt-[15rem]  p-4 w-1/3 mx-auto bg-white/75">
        <div class="">
            <div class="">
                <div class="text-center text-[30px] text-black">เข้าสู่ระบบ</div>
                <div class="flex justify-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mt-4 ">
                            <label for="email" class=" text-black">อีเมลผู้ใช้</label>

                            <div class="border-2 rounded-xl">
                                <input id="email" type="email" class="rounded p-1 text-gray-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class=" text-black">รหัสผ่าน</label>

                            <div class="border-2 rounded-xl">
                                <input id="password" type="password" class="rounded p-1 text-gray-500  @error('password') is-invalid @enderror " name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-black" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="hover:text-rose-500 text-black">
                                    เข้าสู่ระบบ
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="ml-10 hover:text-rose-500 text-black" href="{{ route('password.request') }}">
                                        ลืมรหัสผ่าน?
                                    </a>
                                @endif
                                <a href="{{ url('/register') }}"><div class="hover:text-rose-500 text-black"><h1>ลงทะเบียนผู้ใช้</h1></div></a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
