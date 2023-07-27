<?php
session_start();   
$sql = "SELECT * FROM user";
$result = $mysqli->query($sql);
$count=0;
$total=0;
$expire_name="";
 $date=date("Y-m-d");           
 $date = explode('-', $date);
            $y = $date[0];
            $m  = $date[1];
            $d  = $date[2];

function persian_date($date) {
    $fDate =   gregorian_to_jalali($date[0], $date[1], $date[2],"/");
    $date = date_create_from_format('Y/m/d', $fDate);
    $formattedDate = date_format($date, 'Y/m/d');
    return $formattedDate;
}

$Cdate= persian_date($date);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row['expire_date']==$Cdate){
        $expire_name=$row['fullname'];
        echo $expire_name;
    }
    $count=$count+1;
    $total=$total+$row['subscribe'];
  }
}    
else {
    echo $mysqli->error;
}

if(isset($_POST['submit'])){
    
    $picture=$_POST['picture'];
    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $meli_code=$_POST['meli_code'];
    $birth_date=$_POST['birth_date'];
    $join_date=$_POST['join_date'];
    $expire_date=$_POST['expire_date'];
    $subscribe=$_POST['subscribe'];

    $query1 = "SELECT * FROM user WHERE fullname='$fullname' AND meli_code='$meli_code'";
    if($result1 = $mysqli->query($query1)){
        if ($result1->num_rows > 0) {
            ?>
            <script>
            alert("کاربر قبلا ثبت شده است");
            </script>
            <?php
            header('location:dashboard.php');
        }
        else {
    $query = 'INSERT INTO user(picture, fullname, phone, meli_code, birth_date, join_date,expire_date,subscribe)';
    $query .= "VALUES('$picture','$fullname', '$phone', '$meli_code', '$birth_date','$join_date','$expire_date','$subscribe')";

    if($result = $mysqli->query($query)){
        if (mysqli_affected_rows($mysqli)) {
            ?>
            <script>
                alert("کاربر ثبت شد");
            </script>
            <?php
            header('location:dashboard.php');
        }
    }
    else {
        echo $mysqli->error;
    }
}
}
else {
    echo $mysqli->error;
}
}
else
{
    echo $mysqli->error;
}


?>