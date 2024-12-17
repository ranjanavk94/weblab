<html>
    <body>
        <h1>Registration form</h1>
        <form action="" method="post">
        Username:<input type="text" name="username"><br><br>
        Email:<input type="email" name="email"><br><br>
        Password:<input type="password" name="pass"><br><br>
        Copnfirm password:<input type="password" name="cpass"><br><br>
        <input type="Submit" value="submit">      
    <?php
    if(empty($_POST['username'])||
    empty($_POST['pass'])||
    empty($_POST['email'])||
    empty($_POST['cpass']))
    {
        die("Please fill all required fields!");
    }
    if ($_POST['pass']!=$_POST['cpass'])
    {
        die('Password and confirm password should match.');
    }
    else{
        die("successfull");
    }
    ?>
      </form>
     </body>
</html>
