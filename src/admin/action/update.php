<?php
include "../db.php";
$id=$_GET["id"];
$picture="";
$fullname="";
$phone="";
$meli_code="";
$birth_date="";
$join_date="";
$expire_date="";
$res=mysqli_query($mysqli,"SELECT * FROM user WHERE id=$id");
while($row=mysqli_fetch_array($res)){
$picture=$row["picture"];
$fullname=$row["fullname"];
$phone=$row["phone"];
$meli_code=$row["meli_code"];
$birth_date=$row["birth_date"];
$join_date=$row["join_date"];
$expire_date=$row["expire_date"];
$subscribe=$row['subscribe'];
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../dist/output.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../../dist/jalalidatepicker.min.css" />
    <script type="text/javascript" src="../../../dist/jalalidatepicker.min.js"></script>
    <title>Document</title>
</head>
<body class="flex justify-center m-auto">

        <div class="m-10 w-1/2 bg-gray-100 drop-shadow-lg p-4 rounded-lg">
            <form  class="flex flex-col items-center gap-2 justify-center drop-shadow-sm" action="#" method="POST">
                <img class="w-1/6 h-1/6 rounded-full bg-slate-300 drop-shadow-lg " src="../../../img/users/<?=$picture;?>" alt="">
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm"  name="picture" type="file">
                <label for="">نام و نام خانوادگی</label>
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm"  name="fullname" type="text" value="<?=$fullname;?>">
                <label for="">شماره تلفن همراه</label>
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm"  name="phone" type="text" value="<?=$phone;?>">
                <label for="">کدملی</label>
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm"  name="meli_code" type="text" value="<?=$meli_code;?>">
                <label for="">تاریخ تولد</label>
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm"  data-jdp  name="birth_date" type="text" value="<?=$birth_date;?>">
                <label for="">تاریخ ثبت نام</label>
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm"  data-jdp  name="join_date" type="text" value="<?=$join_date;?>">
                <label for="">تاریخ انقضا</label>
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm"  data-jdp  name="expire_date" type="text" value="<?=$expire_date;?>">
                <label for="">شهریه</label>
                <input class="rounded-lg focus-within: w-4/6 focus-within:outline-none  p-1  ring-2 ring-black placeholder:text-sm"   name="subscribe" type="text" value="<?=$subscribe;?>">
                <input class="rounded-lg focus-within: w-3/6 focus-within:outline-none  p-1 mt-2 cursor-pointer hover:bg-gray-600 hover:text-white duration-150 hover:scale-105 bg-gray-800  text-gray-300 font-bold" name="submit" type="submit" value="ثبت اطلاعات">
            </form>
        </div>
</body>
</html>
<script>
    jalaliDatepicker.startWatch();
</script>
<?php
if(isset($_POST['submit'])){
    if($_POST['picture']!==""){
        mysqli_query($mysqli,"UPDATE user SET picture='$_POST[picture]',fullname='$_POST[fullname]',phone='$_POST[phone]',meli_code='$_POST[meli_code]',birth_date='$_POST[birth_date]'
        ,join_date='$_POST[join_date]',expire_date='$_POST[expire_date]',subscribe='$_POST[subscribe]' WHERE id=$id")or die(mysqli_error($mysqli));
        header('location:../dashboard.php');
    }
        else{
            mysqli_query($mysqli,"UPDATE user SET picture='$picture',fullname='$_POST[fullname]',phone='$_POST[phone]',meli_code='$_POST[meli_code]',birth_date='$_POST[birth_date]'
            ,join_date='$_POST[join_date]',expire_date='$_POST[expire_date]',subscribe='$_POST[subscribe]' WHERE id=$id")or die(mysqli_error($mysqli));
            header('location:../dashboard.php');
        }
}

?>