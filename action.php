<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'db_connect.php';
include 'function.php';
  if(isset($_POST['contact'])){
    $stmt=$conn->prepare("INSERT into contact_us(name,email,subject,message,send_at) values(:name,:email,:subject,:message,:send_at)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':subject',$subject);
    $stmt->bindParam(':message',$message);
    $stmt->bindParam(':send_at',$send_at);
    $name=get_safe_value($_POST['name']);
    $email=get_safe_value($_POST['email']);
    $subject=get_safe_value($_POST['subject']);
    $message=get_safe_value($_POST['message']);
    $send_at=date("Y-m-d H:i:s");
    $stmt->execute();
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->setFrom($email, $name);
$mail->addAddress("andrew.nomaan@gmail.com",$name);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = "<b>Name:</b>".$name."<br>"."<b>Email-id:</b>".$email."<br><br><div style='font-size:22px;margin-left:100px;'><b>".$message."</b></div>";
if($mail->send()) 
 {
  
?>
  <script>
    alert("Your message send successfully.Thank you");
    window.location="index.php";
  </script>
<?php
} 
         
  }
  if(isset($_POST['join_party'])){
      $email1=get_safe_value($_POST['email']);
      $phone1=get_safe_value($_POST['mobile']);
    $stmt1 = $conn->prepare("SELECT * FROM jointwithus where email='$email1' or phone='$phone1'");
    $stmt1->execute();
    if($stmt1->fetchColumn()>0){
        ?>
           <script>
               alert("This email or mobile no. already exist in our member list");
               window.location="jointwithus.php";
           </script>
        <?php
    }
    else{
    $stmt=$conn->prepare("INSERT into jointwithus(name,email,phone,state,city,district,constituency,created_at) values(:name,:email,:phone,:state,:city,:district,:constituency,:created_at)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':state',$state);
    $stmt->bindParam(':city',$city);
    $stmt->bindParam(':district',$district);
    $stmt->bindParam(':constituency',$constituency);
    $stmt->bindParam(':created_at',$created_at);
    $name=get_safe_value($_POST['name']);
    $email=get_safe_value($_POST['email']);
    $phone=get_safe_value($_POST['mobile']);
    $state=get_safe_value($_POST['state']);
    $city=get_safe_value($_POST['city']);
    $district=get_safe_value($_POST['district']);
    $constituency=get_safe_value($_POST['nirvachan']);
    $created_at=date("Y-m-d H:i:s");
    $stmt->execute();
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->setFrom($email, $name);
$mail->addAddress("andrew.nomaan@gmail.com",$name);
$mail->isHTML(true);
$mail->Subject = 'Party joining by someone';
$mail->Body = "<b>Name:</b>".$name."<br>"."<b>Email-id:</b>".$email."<br><br>
<b style='font-size:18px'>Name:
</b>".$name."<br>
<b style='font-size:18px'>Email:
</b>".$email."<br>
<b style='font-size:18px'>Phone:
</b>".$phone."<br>
<b style='font-size:18px'>State:
</b>".$state."<br>
<b style='font-size:18px'>City:
</b>".$city."<br>
<b style='font-size:18px'>District:
</b>".$district."<br>
<b style='font-size:18px'>Constituency:
</b>".$constituency."<br>";
if($mail->send()) 
 {
  
?>
  <script>
    alert("You are become party member successfully");
    window.location="jointwithus.php";
  </script>
<?php
} 
    }
    
         
  }
?>