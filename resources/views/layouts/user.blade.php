<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <style>
    body {
      font-family: 'Kanit', sans-serif;
    }
    </style>
  </head>

  <body>
    <div class="flex justify-center p-2 items-center">
        <div class="w-[4rem] h-[4rem]">
            <img src="https://lh3.googleusercontent.com/drive-storage/ANtge_HIP_oEfSuqli-YJa3orbDfjYg5_flIck9hK6WhZ_1_vvSHRIWCAFRZ4IfQjo1cREIT_lYk2j1cCgVrSWEVd_HKRu0JS2iHqSrNirMdQQ=w1920-h945" alt="">
        </div>
        <nav class="w-5/6 ml-4">
            <ul class="flex gap-4 justify-center">
              <li class="hover:text-red-700">
                <a href="{{url('/')}}">หน้าหลัก</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{url('/report')}}">รายงานปัญหา</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{ url('/sugges') }}">หน้าเสนอเเนะ</a>
              </li>
              <li class="hover:text-red-700">
                <a href="{{url('/votepage')}}">หน้าโครงการ</a>
              </li>
              @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

          @else
            </ul>
        </nav>
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-black py-1 px-2 rounded-full hover:bg-white hover:text-rose-500 hover:border-2 border-rose-500" type="button">
            <i class="fa-regular fa-user"></i>
            {{ Auth::user()->name }}
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 border-2 border-black">
                <ul class="py-2" aria-labelledby="dropdownDefaultButton">
                  <li>
                    <a href="{{ url('profile') }}" class="block px-4 py-2 hover:dark:hover:bg-gray-600 dark:hover:text-white">โปรไฟล์</a>
                  </li>
                  @if (Auth::user()->user_type == 'admin')
                  <li>
                    <a href="{{ url('customer') }}" class="block px-4 py-2 hover:dark:hover:bg-gray-600 dark:hover:text-white">Admin</a>
                  </li>
                  @endif
                  <li>
                    <a href="{{ url('vote_chart') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">สรุปผลการโหวด</a>
                  </li>
                  <li>
                    <div class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        ออจากระบบ
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                  </li>
                </ul>
            </div>
            @endguest
    </div>
    @yield('title_img')
    @yield('title_content')
    @yield('content')

  </body>
</html>
