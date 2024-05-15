
<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "record";

$con = mysqli_connect($server , $username ,$password ,$db);

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['name']);
    $email =  mysqli_real_escape_string($con, $_POST['email']);
    $message =  mysqli_real_escape_string($con, $_POST['message']);
    
    $emailquery =" select * from persondata where email ='$email' ";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);
    
    if($emailcount){
        ?>
        <script>
        alert("email alredy exists...!");
        location.replace("index1.php");
        </script>    
        <?php
    }else{
        $insertquery = "insert into persondata(name, email, message)  
        values('$username','$email','$message')";

        $iquery = mysqli_query($con ,$insertquery);
        if($query){
            ?>
            <script>
             alert("Thank's for give me response.");
             location.replace("index1.php");
            </script>
            <?php
            
        }else{
            ?>
            <script>
             alert(" ...error...!");
             location.replace("index1.php");
            </script>
         <?php 
}
    }
        }
?>