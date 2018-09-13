@@ -0,0 +1,246 @@
<?php
$usernameErr="Name";
$passErr="Password";
$emailErr="Email-ID";
$servername = "localhost";
$username="root";
$password="";
$dbname="sms";
$connect = mysqli_connect($servername,$username,$password,$dbname);
    if(isset($_POST['register']))
    {
        if(empty($_POST['username']))
        {
            $usernameErr = "Please Enter the Username";
        }
        else{
            $username = $_POST['username'];
            if(!preg_match("/^[a-zA-Z]*$/",$username))
            {
                $usernameErr = "Username does not contain any special symbols";
            }
        }
        if(empty($_POST['email']))
        {
            $emailErr = "Please Enter the Email-ID";
        }
        else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $emailErr = "Invalid Email";
            }
        }
        if(empty($_POST['password']))
        {
            $passErr = "Please Enter the Email-ID";
        }
        else{
            $password = $_POST['password'];
            if(!preg_match("/^[a-z0-9A-Z]*$/",$password))
            {
                $passErr = "Password must not contain any special characters";
            }
        }
        if(!empty($username)&&!empty($email)&&!empty($password))
        {
        $sql = "INSERT INTO registeration(username,email,pass) VALUES ('$username','$email','$password')";
        mysqli_query($connect,$sql);
        header("location:dashboard.php");
        }
}

?>

<html>
<head>
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome-free-5.1.0-web\css\all.css">
<style>
.nav{
    width:100%;
    box-sizing:border-box;
    background:rgb(240,240,240);
    box-shadow:0px 0px 88px rgb(0,0,0,.7);
    position:fixed;
}
.menu{
    float:left;
    margin-left:50px;
    padding:20px 20px;
}
.menu:hover{
    background:silver;
    cursor:pointer;
}
a{
    text-decoration:none;
    color:black;
}
a:hover{
    text-decoration:none;
    color:black;
}
#back{
    opacity:1;
}
.button{
    padding:10px 20px;
    border-radius:15px;
    background:dodgerblue;
    border:none;
    outline:none;
    position:absolute;
    color:white;
    top:60%;
    left:50%;
    transform:translate(-50%,-50%);
    box-shadow:0 0 88px rgb(0,0,0,.7);
}
       
.bg-model{
    width: 100%;
    height : 100%;
    background-color:rgba(0,0,0,0.7);
    position:absolute;
    top:0;
    display:flex;
    justify-content:center;
    align-items:center;
    display:none;
}        
.model-content{
    width:500px;
    height:400px;
    background-color:white;
    border-radius:4px;
    text-align:center;
    padding:20px;
    position:relative;
}
#name,#email,#pass{
    width:60%;  
    display:block;
    margin:15px auto;
    border-radius:15px;
    padding:10px 20px;
    outline:none;
    border:solid 1px black;
}
#submit{
    display:block;
    margin:15px auto;
    padding:10px 20px;
    border-radius:15px;
    background:dodgerblue;
    border:none;
    outline:none;
    color:white;
    box-shadow:0 0 88px rgb(0,0,0,.7);
}
.close{
    position: absolute;
    top: 0;
    right:14px;
    font-size:42px;
    transform:rotate(45deg);
    cursor:pointer;
}
.icons{
    position:absolute;
    left:80px;
    font-size:20px;
}
</style>
</head>
<body>
    <div class="nav">
    <div class="container">
        <div class="menu">
            <a href="#">Home</a>
        </div>
        <div class="menu">
            <a href="dashboard.php">Dashboard</a>
        </div>
        <div class="menu">
            <a href="Brand.php">Brand</a>
        </div>
        <div class="menu">
            <a href="category.php">Category</a>
        </div>
        <div class="menu">
            <a href="product.php">Product</a>
        </div>
        <div class="menu">
            <a href="orders.php">Orders</a>
        </div>
        <div class="menu">
            <a href="report.php">Report</a>
        </div>
        <div class="menu">
            <a href="login.php">login</a>
        </div>
    </div>
    </div>
    <br><br><br><br><br>
    <img src="back.jpg" style="position:absolute" id="back"height="600px" width="100%">
    <input type="submit" value="Log in" class="button" id="reg" onclick="show()">
    <div class="container">
    </div>
        <div class="bg-model">
            <div class="model-content">
                <div class="close" onclick="">+</div>
                <img src="user.jpg" alt="" height="100" width="100">
                <form name="form1" action="home.php" method="post">
                    <i class="fa fa-user icons" sytle="top:160px;"></i><input type="text" placeholder="<?php echo $usernameErr;?>" id="name" name="username" onblur="errorname()">
                    <i class="fa fa-envelope icons" sytle="top:210px;"></i><input type="text" placeholder="<?php echo $emailErr;?>" id="email" name="email" onblur="erroremail()">
                    <i class="fa fa-key icons" style="top:260px"></i><input type="password" placeholder="<?php echo $passErr;?>" id="pass" name="password" onblur="errorpass()">
                    <input type="submit" value="Log in" id="submit" name="register">
                </form>
            </div>
        </div>
 <script>
 function errorname(){
var x = document.forms["form1"]["name"].value;
if(x == "")
{
        window.alert("Username should not be empty");
        return false;
}
else{
   return true;
}
}
function erroremail(){
var x = document.forms["form1"]["name"].value;
if(x == "")
{
        window.alert("Email should not be empty");
        return false;
}
else{
   return true;
}
}
function errorpass(){
var x = document.forms["form1"]["name"].value;
if(x == "")
{
        window.alert("Password should not be empty");
        return false;
}
else{
   return true;
}
}
function show()
{
    document.querySelector('.bg-model').style.display="flex";
}
document.querySelector('.close').addEventListener("click",function(){
document.querySelector('.bg-model').style.display="none";
});

</script>
</body>
</html>