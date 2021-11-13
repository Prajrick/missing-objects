include "login_access.php"
<style>
    body {
    background-image: url("REVA BGP.jpg");
    background-color: #FF000000;
    background-repeat:  no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
   form{text-align: center;
} 

   .logo{
       display: inline-block;
   }

.my-button{
    width: 200px;
    height: 30px;
    font-size: 15px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color: rgb(33, 62, 223);
    color:white;
    border: 1px solid white;
    border-radius: 5px;
}


</style>










<div id="logo">
	 
 <html>
     <head></head>
         <body>
        </div> 
        <br>
        <div class="logo" ,postion: static;><img src="REVA logo-169_40px.png" width="300" height="100" ></div>
        <form name="regForm">
            
            <div style="background-image: url('REVA\ BGP.jpg');"></div>
            <div style = "position:absolute; left:550px; top:300px; background-color:rgba(0, 0, 0, 0.548);border-radius: 10px; width:450px; height:300px;">
            <p style="color:white;font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15pt; ">Welcome, Please login to continue.</p>
            <br>
            <label><input style=height:30px;border-radius:7px;font-size:14pt type="text" placeholder="Enter SRN No." ></label>
            <br>
            <br><label><input style=height:30px;border-radius:7px;font-size:14pt type="password" placeholder="Enter password"></label>
            <br>
            <br>
            <br>
            <button class="my-button"><a href="Main.php">Log In</a></button>
            </form>
         </body>
         </html>