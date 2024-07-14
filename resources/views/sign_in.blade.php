<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
	    <style>
            body {
                font-family: 'Kanit', sans-serif;
            }
        </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full h-screen bg-[url('https://i.ibb.co/hZpdbkY/248479853-2133515060137518-4885646735485668126-n.jpg')] bg-cover bg-center text-white">
        <div class="w-full h-full flex flex-col backdrop-blur-sm">
	<div class="form-group margin ">
        <form class="w-1/3 mx-auto mt-[10rem] border-2 p-4 shadow-xl rounded-xl bg-white text-black" method="POST" action="{{ route('login') }}">
            <center><label><h2 class="text-2xl font-bold mt-2">หน้าเข้าสู่ระบบ</h2></h2></label></center>
            <label for="exampleInputEmail1" class="mt-2 text-white">รหัสผู้ใช้</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="mailuid" placeholder="Username/Email..."><br>
            <label for="exampleInputPassword1" class="mt-2 text-white">รหัสผ่าน</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password..."><br>
            <div class="flex item-center gap-4 justify-content-end text-white">
                <button type="submit" class="border-2 p-2 rounded hover:bg-white hover:text-black" name="login-submit">Login</button>
                <a href="{{ url('/sign_up') }}"><div class="border-2 p-3 rounded hover:bg-white hover:text-black"><h1>ลงทะเบียนผู้ใช้</h1></div></a>
            </div>
        </form>
    </div>
	<div>
		<a href="{{ url('/home') }}">home</a>
	</div>
</div>
</div>
</body>
</html>
