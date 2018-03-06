
<?php
if(isset($_REQUEST['txt']) && isset($_REQUEST['txt1'])){
    
    $uid=$_REQUEST['txt'];
    $pwd=$_REQUEST['txt1'];
      if((!empty($_REQUEST['txt'])) && (!empty($_REQUEST['txt1']))){
          
      
    
        $link=mysqli_connect("localhost","id3065495_droneapp323","saurabhpiyush","id3065495_drone");
    $qry="select * from saurabh where user_name='$uid' and password='$pwd'";
    $resultset=mysqli_query($link,$qry);
        $row=mysqli_num_rows($resultset);
        if($row){
            echo "login successful...";
        }
        //header("location:firstphp.php");
        else
        {
            echo "invalid id/password";
        }
    
      }
    
    else
    {
       echo "please fill ur name/password";
    }
}
?>