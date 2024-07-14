@extends('layouts.user')

@section('title')
Report Page
@endsection

@section('content')
<div class="w-full h-screen bg-[url('https://i.ibb.co/hZpdbkY/248479853-2133515060137518-4885646735485668126-n.jpg')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
@if ($message = Session::get('success'))
<div class="bg-[#3abd55]/90 p-2 text-[14px] rounded font-bold">
    <p>{{ $message }}</p>
</div>
@endif
  <div class="my-4 mx-10 ">
        <h1 class="text-[60px] font-heading font-bold ml-10">เเจ้งปัญหาออนไลน์ในหมู่บ้าน</h1>
        <a href="{{ route('report.create') }}">
        <div class="bg-[#e69100] flex items-center gap-4 p-4 my-4 ml-4 w-1/4 hover:bg-[#dd5f22] rounded drop-shadow-xl">
            <div>
                <i class="text-2xl fa-regular fa-paper-plane"></i>
            </div>
            <div>
                <h2 class="text-[30px] font-bold">เเจ้งปัญหาออนไลน์</h2>
            </div>
        </div>
        </a>
        <div class="bg-[#31ad82] flex items-center gap-4 p-4 my-4 ml-4 w-1/4 rounded drop-shadow-xl">
            <div>
                <i class="text-2xl fa-solid fa-mobile-screen-button"></i>
            </div>
                 <div>
                    <h2 class="text-[30px] font-bold">โทร 089-250-4424</h2>
                </div>
            </div>
    </div>
  </div>
</div>
</div>


@endsection
