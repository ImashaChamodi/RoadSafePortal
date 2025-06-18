<?php
    $name = "";
    $nameerr = "";

    $email = "";
    $emailerr = "";

    $message = "";
    $messageerr = "";

    $error = false;

    /* Check required fields */
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if($name == "")
        {
            $nameerr = "Field can't be empty.";
            $error = true;
        }
        else if(strlen($name) < 3)
        {
            $nameerr = "Name should be more than 2 characters.";
            $error = true;
        }
        else
        {
            $nameerr = "";
        }
   
        if($email == "")
        {
            $emailerr = "Field can't be empty.";
            $error = true;
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailerr = "Invalid email address.";
            $error = true;
        }
        else
        {
            $emailerr = "";
        }

        if($message == "")
        {
            $messageerr = "Field can't be empty.";
            $error = true;
        }
        else if(strlen($message) < 10)
        {
            $messageerr = "Message should be more than 9 characters.";
            $error = true;
        }
        else
        {
            $messageerr = "";
        }

        if($error == false)
        {
            $name = $name;
            $to = 'chanudinethma@gmail.co';
            $from = $email;
            $subject = 'Response';
            $body = 'Hello,<br/><br/>'.$message.'<br/><br/>Thanks, <br/>'.$name;
   
            echo "To: ".$to."<br/>From: ".$from."<br/>Subject: ".$subject."<br/><hr><br/>".$body;  
        }
    }
    if(!isset($_POST['submit']) || $error == true)
    

?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Form</title>



<style>

label {
    display:block;
    margin-top:30px;
    letter-spacing:2px;
}


form {
    margin:0 auto;
    width: 450px;
    background-color: aquamarine;
}


input, textarea {
    width:430px;
    height:25px;
    background:lightslategrey;
    padding:10px;
    margin-top:3px;
    color: #4A2A2B;
    border-radius:7px;
    border:1px solid green;
}


textarea {
    height:213px;

}


input:focus, textarea:focus {
    border:1px solid #97d6eb;
}


#submit {
    width:130px;
    height:40px;
    margin-top:20px;
    margin-bottom:20px;
    cursor:pointer;
    color:white;
    background-color: blue;
}
.h2{
  background: #DCF5FD;
  height: 30px;
  color: navy;
  
}
.div_form{
  background-color:aquamarine;
  width: 50%;
  margin: 40px auto;
}

#submit:hover {
    opacity:0.5;
}
</style>

</head>

<body>

<div class="div_form" >
    <h2 align="center" >
    CONTACT FORM
    </h2>

        <form method="post" action="#">
       
            <label>Name</label>
            <input name="name" placeholder="Enter Your name" value="<?php echo $name ?>" />
            <div style="color:red"><?php echo $nameerr ?></div>
                   
            <label>Email</label>
            <input name="email" type="email" value="<?php echo $email ?>" placeholder="Enter your email" />
            <div style="color:red"><?php echo $emailerr ?></div>

            <label>Message</label>
            <textarea name="message" placeholder="Type Your message"><?php echo $message ?></textarea>
            <div style="color:red"><?php echo $messageerr ?></div>

            <input id="submit" name="submit" type="submit" value="Submit" />
        </form>
</div>
</body>
</html>
<?php

include('nav.php');
?>