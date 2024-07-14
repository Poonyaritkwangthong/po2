@extends('layouts.user')

@section('title')
Sugges Page
@endsection

@section('content')
<div class="w-full h-screen bg-[url('https://i.ibb.co/hZpdbkY/248479853-2133515060137518-4885646735485668126-n.jpg')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
    <div class="my-4 mx-auto bg-[#7c7d7d]/90 p-4">
        <h1 class="text-[40px] font-heading font-bold ml-4">เสนอความต้องการออนไลน์ภายในหมู่บ้าน</h1>
        <div class="bg-[#e6a502] w-8/12 h-76 ml-4 p-2 rounded mt-4">
            <div>
                <h1 class="text-[30px] font-bold">กติกาในการเสนอ !</h1>
            </div>
            <div>
                <h2 class="text-[20px] font-bold mt-2">
                    1.ลงทะเบียนผู้ใช้</br>
                    2.เข้าสู่ระบบ</br>
                    3.เสนอหัวข้อ</br>
                    4.ทำการโหวด</br>
                    5.รอผลสรุปการโหวด</br>
                    6.ดำเนินโครงการตามผลโหวดที่ลูกบ้านทำการโหวด
                </h2>
            </div>
        </div>
        <a href="{{ route('sugges.create') }}">
        <div class="bg-[#e69100] flex items-center gap-4 p-2 my-4 ml-4 w-[18rem] h-12 hover:bg-[#dd5f22] rounded drop-shadow-xl">
            <div>
                <i class="text-2xl fa-regular fa-paper-plane"></i>
            </div>
            <div>
                <h2 class="text-[20px] font-bold">เสนอความต้องการออนไลน์</h2>
            </div>
        </div>
        </a>
        @if ($message = Session::get('success'))
            <div class="bg-[#3abd55]/90 p-2 text-[14px] rounded font-bold">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
</div>
</div>
@endsection
