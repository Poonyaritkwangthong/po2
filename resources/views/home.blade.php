@extends('layouts.user')

@section('title')
Home Page
@endsection

@section('title_img')
<div class = "mt-2">
    <div class="h-80 bg-[url('https://i.ibb.co/5Wg84Vw/247395801-2133515363470821-3085529991713268643-n.jpg')] bg-cover bg-center">
        <div class="h-full w-full flex flex-col justify-center items-center backdrop-blur-sm">
            <h3 class="text-2xl text-white font-semibold">สวัสดี</h3>
            <h1 class="mt-5 text-center text-4xl text-white font-semibold drop-shadow-lg">ยินดีต้อนรับสู่
                <span class="text-yellow-300">หมู่บ้านทุ่งม่วง</span>
            </h1>
        </div>
    </div>
</div>
@endsection

@section('title_content')

<div>
<h1 class="mt-8 text-center font-bold text-[30px]">ข่าวประชาสัมพันธ์</h1>
</div>
@endsection

@section('content')
<div class="mt-8 w-5/6 mx-auto">


    <div id="default-carousel" class="relative w-full" data-carousel="slide">

        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-[40rem]">
            @foreach ($news as $new)
             <!-- Item 1 -->

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('/images/news/'.$new->n_img) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 aspect-ratio" alt="...">
                <div class="z-40 absolute w-full bg-white/50 bottom-10 p-4 border-t-4 border-b-4 border-black">
                    <div class="ml-[8rem]">
                    <h1 class="text-[25px] font-bold">ประชาสัมพันธ์</h1>
                    <h1 class="text-[18px] font-bold">เรื่อง : {{ $new->name_news }}</h1>
                    <h1 class="text-[18px] font-bold">รายละเอียด : {{ $new->n_detail }}</h1>
                    <h1 class="text-[18px] font-bold">ณ สถานที่ : {{ $new->n_location }}</h1>
                    <h1 class="text-[18px] font-bold">วันที่ : {{ $new->n_date }}</h1>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            @foreach ($news as $new)
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="{{ $new->name_news }}" data-carousel-slide-to="{{ $new->id }}"></button>
            @endforeach
        </div>

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

</div>
@endsection
