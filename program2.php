<html>
    <head>
        <title>my login page</title>
    </head>
    <body>
      
       <form name="frm" action="" method="post">
        <fieldset>
            <legend align=center>login</legend>
            <table border="1">
                <tr>
                    <td>User Id</td>
                    <td><input type="text" name="txt"/></td></tr>
                    <tr>
                        <td>Password</td><td><input type="password" name="txt1"/></td>
                </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="btn" value="login"/></td>
                
                </tr>
            </table>
        </fieldset>
          
        </form>
    </body>
</html>




<?php
if(isset($_REQUEST['btn'])){
    
    $uid=$_REQUEST['txt'];
    $pwd=$_REQUEST['txt1'];
      if(!empty($_REQUEST['txt']) && (!empty($_REQUEST['txt1']))){
          
      
    
        $link=mysqli_connect("localhost","id3065495_droneapp323","saurabhpiyush","id3065495_drone");
    $qry="select * from saurabh where user_name='$uid' and password='$pwd'";
    $resultset=mysqli_query($link,$qry);
        $row=mysqli_num_rows($resultset);
        if($row){
            echo "login successful...";
        }
    
        
        
        
        
         
    
      
        #echo "login successful";
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