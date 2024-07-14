@extends('layouts.user')

@section('content')
<div class="w-full h-screen bg-[url('https://i.ibb.co/hZpdbkY/248479853-2133515060137518-4885646735485668126-n.jpg')] bg-cover bg-center">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
<div class="w-1/3 mx-auto border-2 mt-[15rem] bg-gray-200/90 p-4 border-black shadow-xl">
    <div class="">
        <div class="">
            <div class="">
                <div class="text-center text-[30px] mt-4 font-bold">ลงทะเบียนเข้าใช้งาน</div>

                <div class="mt-4 flex justify-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="">
                            <label for="name" class="font-bold">ชื่อ</label>

                            <div class="">
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="email" class="font-bold">อีเมล</label>

                            <div class="">
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class="font-bold">รหัสผ่าน</label>

                            <div class="">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password-confirm" class="font-bold">ยืนยันรหัสผ่าน</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mt-2 h-[20px] w-[120px] p-2 mb-8 rounded-xl">
                            <div class="bg-white text-center">
                                <button type="submit" class="text-red-500 hover:text-black ">
                                    สมัครสมาชิก
                                </button>
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
