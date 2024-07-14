@extends('layouts.user')

@section('content')
<div class="w-full h-screen bg-[url('https://i.ibb.co/hZpdbkY/248479853-2133515060137518-4885646735485668126-n.jpg')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
        <div>
            <h1 class="mt-10 text-center font-bold text-[30px] text-black">หัวข้อโครงการ</h1>
        </div>

    <div class="w-5/6 mx-auto mt-10">
        @if ($message = Session::get('success'))
        <div class="mb-6 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
              <div>
                <p>{{ $message }}</p>
              </div>
            </div>
          </div>
    @endif
    <div class="grid grid-cols-4 gap-4">
        @foreach ($votepages as $item)
        <div class="border-2 shaddow-inner p-4 rounded-lg drop-shadow-xl w-full bg-white text-black">
                <div class="text-[16px]">
                <h2>ชื่อหัวข้อ : {{ $item->topic_name }}</h2>
                </div>
                <div class="text-[16px]">
                <p>รายละเอียด : {{ $item->s_detail }}</p>
                </div>
                @if(Auth::user())
                <a href="{{ route('votepage.id', $item->id) }}" class="flex justify-end ">
                    <div class="mt-4 w-1/2 p-1 rounded hover:bg-green-500 bg-green-500">
                        <p class="text-center hover:text-white text-black ">ลงคะเเนนเสียง</p>
                    </div>
                    </a>
                    @else
                    <div class="mt-2 w-[230px] p-1 rounded hover:bg-red-500 bg-red-500 cursor-no-drop">
                        <p class="text-center hover:text-white text-black ">กรุณาเข้าสู่ระบบก่อนเข้าใช้งาน</p>
                    </div>
                @endif
        </div>
        @endforeach
    </div>
    </div>
    </div>
</div>
@endsection
