@extends('layouts.user')

@section('title')
hellooo
@endsection

@section('content')
<div class="w-full h-screen bg-[url('https://scontent.fbkk22-8.fna.fbcdn.net/v/t1.6435-9/133857525_1896428583846168_2080736520192577908_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=dd63ad&_nc_eui2=AeFsvf6uv8HsTRt1Z6PewWwyBfTh9sC6C5QF9OH2wLoLlDFs9g1tH6S1P4WGz3YipcHesz0mIMF2APm_R-7maxuO&_nc_ohc=lBm9PL8L2ogAX-LfSBo&_nc_ht=scontent.fbkk22-8.fna&oh=00_AfAYwaGZWz_n8vY9HYVHdRSh6GdgG08nxpu2SExkRAqpmg&oe=65FC2575')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
<div class="w-1/3 mx-auto mt-[8rem] border-2 p-4 bg-white/75 text-black shadow-xl">
    <div class="mt-5">
        <h1 class="text-center text-[30px]">โปรไฟล์</h1>
    </div>
    @foreach ($profile as $item )
        <div class="">
            <div class="">
                <img class="w-[10rem] h-[10rem] mx-auto border-2 border-black rounded-full mt-5" src="{{ $item->c_img }}" alt="">
            </div>
            <div class="text-center mt-5 text-[20px] p-2">
                <h1>รหัสผู้ใช้ : {{ $item->user_id }}</h1>
                <div class="flex justify-center">
                    <h1>ชื่อ : {{ $item->f_name }}</h1>
                    <h2 class="ml-4">นามสกุล : {{ $item->l_name }}</h2>
                </div>
            <h3>เบอร์โทรศัพท์ : {{ $item->phone_n }}</h3>
            </div>
        </div>
    @endforeach
</div>
</div>
</div>
@endsection
