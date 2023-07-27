<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/output.css" rel="stylesheet">
    <title>صفحه ورود</title>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
                if (x.type === "password") {
                x.type ="text";
                } else {
                    x.type ="password";
                }
        }
    </script>
</head>
<body class="font-vazir font-normal">
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="items-center bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
            <div class="md:w-1/2 px-16 text-neutral-800">
                <h2 class="text-2xl">ورود</h2>
                <form action="./action/dashboardAction.php" method="POST" class="flex flex-col gap-4">
                    <input class="p-2 rounded-xl mt-8 " type="text" name="username" placeholder="نام کاربری">
                    <div class="relative">
                        <input id="myInput" class="p-2 rounded-xl w-full" type="password" name="password" placeholder="رمز عبور">
                        <svg onclick="myFunction()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 left-2 cursor-pointer -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </div>
                    <button class="bg-neutral-800 bg rounded-xl text-white py-2 hover:scale-105 duration-300" name="submit">ورود</button>
                </form>
                </div>
                <div class="md:block hidden  w-1/2 ">
                    <img class="rounded-2xl" src="../../img/gym.jpg" alt="">
                </div>
        </div>
    </section>
</body>
</html>