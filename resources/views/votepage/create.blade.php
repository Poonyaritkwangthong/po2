@extends('layouts.user')

@section('title')
Votepage
@endsection

@section('title_content')
<div class="w-full h-screen bg-[url('https://scontent.fbkk22-8.fna.fbcdn.net/v/t1.6435-9/133857525_1896428583846168_2080736520192577908_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=dd63ad&_nc_eui2=AeFsvf6uv8HsTRt1Z6PewWwyBfTh9sC6C5QF9OH2wLoLlDFs9g1tH6S1P4WGz3YipcHesz0mIMF2APm_R-7maxuO&_nc_ohc=lBm9PL8L2ogAX-LfSBo&_nc_ht=scontent.fbkk22-8.fna&oh=00_AfAYwaGZWz_n8vY9HYVHdRSh6GdgG08nxpu2SExkRAqpmg&oe=65FC2575')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
<div class="mt-10">
    <h1 class="text-center text-[30px] font-bold">หน้าลงคะเเนนโหวด</h1>
</div>
@endsection

@section('content')
<div class="border-2 w-[32rem] p-2 text-between mx-auto shadow-xl mt-10 bg-white">
    <div class="mt-2 text-[16px] text-black">
        <div>
           ชื่อหัวข้อ :
            {{ $suggestion->topic_name }}
        </div>
        <div>
            รายละเอียด :
            {{ $suggestion->s_detail }}
        </div>
    </div>
    <div class="flex justify-center mt-8 ">
        <form action="{{ route('votepage.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="gap-6">
            <input hidden type="text" name="suggestion_id" value={{ $suggestion->id }}>
            @error('suggestion_id')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            @foreach ($vote as $item)
            @if($item->id == 1 )
            <button name="vote_id" value="{{ $item->id }}" class="btn bg-green-500 ml-6 p-2 rounded hover:bg-white hover:text-green-500 border-2 border-green-500  " type="submit">เห็นด้วย</button>
            @else
            <button name="vote_id" value="{{ $item->id }}" class="btn bg-red-500 ml-6 p-2 rounded hover:bg-white hover:text-red-500 border-2 border-red-500  " type="submit">ไม่เห็นด้วย</button>
            @endif
            @endforeach
            @error('vote_id')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
        </div>
        </from>
    </div>
</div>
</div>
</div>

@endsection
