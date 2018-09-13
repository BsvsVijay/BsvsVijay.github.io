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

.box
{
    width:100%;
    padding:10px 15px;
    margin-top:200px;
    color:white;
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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box" style="background-color:rgba(0,150,0,.5);">
                    Total Product<span style="float:right">0</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box" style="background-color:rgba(0,0,150,.5);">
                    Total Orders<span style="float:right">0</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box" style="background-color:rgba(150,0,0,.5);">
                    Low Stock<span style="float:right">0</span>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-4">
            <p style="text-align:center; padding:15px; font-size:72px; color:white; background-color:rgb(0,150,0);" id="date"></p>
                <script>
                    var x = new Date();
                    document.getElementById('date').innerHTML = x.getDay();
                </script>
            </div>
            <div class="col-md-8">
                
            </div>
        </div>
    </div>

    </body>

    </html>