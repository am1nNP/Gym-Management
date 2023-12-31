<?php
include "./db.php";
include "./jdf.php";
include "./action/info.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/output.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../dist/jalalidatepicker.min.css" />
    <script type="text/javascript" src="../../dist/jalalidatepicker.min.js"></script>
    <title>داشبورد</title>
</head>
<body class="flex md:h-auto m-4">
    <div class="flex flex-col rounded-xl ml-2 bg-gray-900 md:w-1/6">
        <div class=" w-auto flex flex-col text-gray-300 text-3xl space-y-4">
            <button onclick="home()" class="text-blue-500 hover:bg-gray-700 rounded-lg cursor-pointer p-4">
                <a onclick="home()" href="#">
                    خانه
                </a>
            </button>
            <button onclick="signup()" class="hover:text-white hover:bg-gray-700 rounded-lg cursor-pointer p-4">
                ثبت نام
            </button>
            <button onclick="users_list()" class="hover:text-white hover:bg-gray-700 rounded-lg cursor-pointer p-4">
                کاربران
            </button>
      
            <button onclick="exit()" class="hover:text-red-500  rounded-lg cursor-pointer p-4">
                خروج
            </button>
        </div>
    </div>
    <div class="flex bg-gray-100 w-5/6 min-h-max:h-fit p-6 rounded-2xl">
        <div id="home" class="flex flex-wrap justify-evenly items-center w-full h-full bg-indigo-950 drop-shadow-lg p-4 rounded-lg">
            <div class="w-56 h-20 flex items-center justify-between bg-white p-2 font-extrabold ring-slate-900 ring-2">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-500 text-xs">کاربران</span>
                        <span class="text-xl "><?= $count; ?></span>
                    </div>
                    <span class="w-12 h-12 flex items-center justify-center rounded-full  bg-orange-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                      </svg>                      
                      </span>
                </div>
            <div class="w-56 h-20 flex items-center justify-between bg-white p-2 font-extrabold ring-slate-900 ring-2">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-500 text-xs">شهریه</span>
                        <span class="text-xl"><?= $total."T";?></span>
                    </div>
                    <span class="w-12 h-12 flex  items-center justify-center rounded-full  bg-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>                                                       
                      </span>
                </div>
        </div>
        <div id="signup" class="hidden w-full m-auto bg-gray-100 drop-shadow-lg p-4 rounded-lg">
            <form  class="flex flex-col items-center  justify-center drop-shadow-sm space-y-10" action="#" method="POST">
                <label for="">عکس را آپلود کنید</label>
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm" required name="picture" type="file">
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm" required name="fullname" type="text" placeholder="نام و نام خانوادگی را وارد نمایید">
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm" required name="phone" type="text" placeholder="شماره تلفن همراه را وارد نمایید">
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm" required name="meli_code" type="text" placeholder="شماره کد ملی را وارد نمایید">
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm" required data-jdp  name="birth_date" type="text" placeholder="  تاریخ تولد را وارد نمایید">
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm" required data-jdp  name="join_date" type="text" placeholder="تاریخ ثبت نام را وارد کنید">
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm" required data-jdp  name="expire_date" type="text" placeholder="تاریخ انقضا را وارد کنید">
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm" required  name="subscribe" type="text" placeholder="شهریه">
                <input class="rounded-lg focus-within: w-3/6 focus-within:outline-none  p-1 cursor-pointer hover:bg-gray-600 hover:text-white duration-150 hover:scale-105 bg-gray-800  text-gray-300 font-bold" name="submit" type="submit" value="ثبت اطلاعات">
            </form>
        </div>
        <div id="users_list" class="w-full flex flex-col hidden">
         <!-- component -->
        <section class="antialiased bg-gray-100 text-gray-600 px-4">
        <div class="flex flex-col h-full">
        <!-- Table -->
        <div class="w-full  bg-white drop-shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 w-full flex justify-between py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800 p-4">کاربران</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-right">ردیف</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">عکس</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">نام و نام خانوادگی</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">شماره تلفن</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">کدملی</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">تاریخ تولد</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">تاریخ ثبت نام</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">تاریخ انقضا </div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">شهریه پرداختی ثبت نام</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">حذف</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">ویرایش</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                        <?php
                            $rows = "SELECT * FROM user";
                            if($result2 = $mysqli->query($rows)){
                                if($result2->num_rows> 0){
                                    $index = 1;
                                    while ($row = $result2->fetch_assoc()){
                                    ?>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><?=$index++;?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="w-28 h-28 self-center"><img class="rounded-full w-28 h-28 object-cover" src="../../img/users/<?=$row['picture'];?>" alt=""></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><?= $row['fullname'];?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><?= $row['phone'];?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><?= $row['meli_code'];?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><?= $row['birth_date'];?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><?= $row['join_date'];?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center text-red-500"><?= $row['expire_date'];?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center font-semibold text-green-500"><?= $row['subscribe']."T";?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center hover:opacity-100 opacity-50 text-orange-500"><a href="./action/delete.php?id=<?=$row['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                      </svg>
                                      </a></div>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center  hover:opacity-100 opacity-50  text-indigo-500"><a href="./action/update.php?id=<?=$row['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                      </svg>                                      
                                      </a></div>
                                </td>
                            </tr>
                            <?php
                                    }
                                }
                                else{
                            ?>
                            <tr>
                                <td colspan="11">رکوردی یافت نشد</td>
                            </tr>
                            <?php 
                                }
                            }else{
                                echo $mysqli->error;
                            }
                        
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
       </div>
 </body>
</html>
<script>
jalaliDatepicker.startWatch();
function signup(){
document.getElementById("signup").style.display="block";
document.getElementById("users_list").style.display="none";
document.getElementById("home").style.display="none";
}

function users_list(){
    document.getElementById("signup").style.display="none";
    document.getElementById("home").style.display="none";
    document.getElementById("users_list").style.display="block"; 
}
function home(){
    document.getElementById("home").style.display="flex";
    document.getElementById("signup").style.display="none";
    document.getElementById("users_list").style.display="none"; 
}

function exit(){
    location.replace("./index.php")
}

</script>