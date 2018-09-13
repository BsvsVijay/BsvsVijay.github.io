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
.effect{
    padding:20px 20px;
    box-sizing:border-box;
    border-left:1px solid black;
    float:left;
}
.effect1{
    padding:20px 20px;
    box-sizing:border-box;
    float:left;
}
.button{
    padding:20px;
    text-align:right;
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
</style>
</head>
<body>
    <div class="nav">
    <div class="container">
        <div class="menu">
            <a href="home.php">Home</a>
        </div>
        <div class="menu">
            <a href="#">Dashboard</a>
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
    <br><br><br><br>
    <div class="container" style="background-color:rgb(240,240,240);"> 
        <div class="effect"><a href="home.php">Home</a></div>
        <div class="effect"><a href="#">Brand</a></div>
    </div>
    <br>
    <div class="container" style="background-color:lightgray">
        <div class="effect1">Manage Brand</div>
    </div>
    <div class="container">
        <div class="button" >
            <input type="submit" value="Add Brand" id="reg" onclick = "show()">
        </div>
        <div style="font-family:arial black">
            Show<select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>Entries<span style="float:right">Search:<input type="text"></span>
            <br><br><br>
            <table class="table table-responsive">
                <tr>
                    <th width="40%">Brand Name</th>
                    <th width="30%">Status</th>
                    <th width="30%">Options</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="bg-model">
            <div class="model-content">
                <div class="close" onclick="">+</div>
                <img src="user.jpg" alt="" height="100" width="100">
                <form name="form1" action="brand.php" method="post">
                    <input type="text" placeholder="Brandname" id="name" name="username" onblur="errorname()">
                        <select name="brand" value="--SELECT--" id="name">
                            <option value="">--SELECT--</option>
                            <option value="available">AVAILABLE</option>
                            <option value="not available">NOT AVAILABLE</option>
                        </select>        
                    <input type="submit" value="Save Changes" id="submit" name="register">
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