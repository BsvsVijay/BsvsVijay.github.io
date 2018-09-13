<html>
<head>
<style>
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
    height:300px;
    background-color:white;
    border-radius:4px;
    text-align:center;
    padding:20px;
    position:relative;
}
#name,#email{
    width:50%;  
    display:block;
    margin:15px auto;
}
#submit{
    display:block;
    margin:15px auto;
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
    <input type="submit" value="Log In" id="login" name="login" onclick="show()">
        <div class="bg-model">
            <div class="model-content">
                <div class="close" onclick="">+</div>
                <img src="user.jpg" alt="" height="100" width="100">
                <form>
                    <input type="text" placeholder="Name" id="name">
                    <input type="text" placeholder="E-mail" id="email">
                    <input type="submit" value="Submit" id="submit">
                </form>
            </div>
        </div>
        <script>
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