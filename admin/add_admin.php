<?php include('partial/menu.php');  ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <form action="" method="POST">
            <table class="tbl-form">
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="full_name"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                    <input class="btn-primary"type="submit" name="submit" value="Add Admin">
                    </td>
                </tr>
            </table>
        </form>

    </div>

</div>
<?php include('partial/footer.php');  ?>


<?php
if(isset($_POST['submit'])){
    $fullname=$_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
$sql="INSERT INTO admin SET 
full_name='$fullname',
username='$username',
password='$password'
";


  $res=mysqli_query($con,$sql) or die(mysqli_error());
  
if($res==TRUE){
    echo "Data Inserted";
}
else {
    echo "error";
}

}


?>