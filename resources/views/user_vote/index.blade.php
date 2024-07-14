
@extends('layouts.Admin')

@section('title')
หัวข้อโครงการ
@endsection


@section('content')
<div class="w-full h-screen bg-[url('https://i.ibb.co/hZpdbkY/248479853-2133515060137518-4885646735485668126-n.jpg')] bg-cover bg-center text-black">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
        <div>
            <h1 class="mt-10 text-center font-bold text-[25px]">หัวข้อโครงการ</h1>
        </div>
    <div class="w-5/6 mx-auto mt-20">
    <div class="grid grid-cols-4 gap-4">
        @foreach ($suggestions as $item)
        <a href="{{ route('result', $item->id) }}">
        <div class="border border-black shaddow-inner p-4 rounded-lg drop-shadow-lg w-full bg-white">
            <div class="text-[20px]">
                <h1>S.no : {{ $item->id }}</h1>
                <h2>Topic Name : {{ $item->topic_name }}</h2>
                <p>Detail : {{ $item->s_detail }}</p>
            </div>
        </div>
        </a>
        @endforeach
    </div>
    </div>
    </div>
</div>

@endsection
