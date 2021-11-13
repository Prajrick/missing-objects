<!DOCTYPE html>
<html>
    <head>
        <title>
            main page
        </title>
        <style>
            *{
                box-sizing: border-box;
            }
            body{
                margin: 0;
                background-image: url("Reva BGP.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
            nav{
                background:#111031;
                width: 100% ;
                overflow: auto;
            }
            ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }
            ul li a{
                text-decoration: none;
                color: #fff;
                border: 1px solid transparent;
                transition: 0.6s ease;
            }
            nav a{
                width:120px;
                display:block;
                text-decoration: none;
                text-align: center;
                background: #111031;
                font-size: 20px;
                color: white;
                padding: 20px 10px;

            }
            nav a:hover{
                background-color: #fff;
                color: #000;
            }
            .container{
                max-width: 1200px;
                margin: auto;
                background:rgba(0, 0, 0, 0.5);
                overflow: auto;
                border-radius: 5px;
            }
            .gallery{
                margin: 5px;
                border: 1px solid black;
                float: left;
                width: 390px;
                border-radius: 5px;
            }
            .gallery img{
                width: 388px;
                height: 400px;
                border-radius: 5px;
            }
            .desc{
                padding: 15px;
                text-align: center;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><img src="REVA logo-169_40px.png" style="width: 200px ;height: 60px;float: left;"></li>
                <li><a style="float:right;border-radius: 5px;font-size: 20px;" href="addEdit.php">Found</a></li>
                <li><a href="Starting_page.php" style="float: right;border-radius: 5px;" >Log Out</a></li>
                <li><a style="float:right;border-radius: 5px;" href="Main.php" >Home</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="gallery">
                <img src="key.jpeg" width="388px" height="500px">
                    <div class="desc" style="color: #fff;"><a href="addEdit.php" style="color: #fff;">KEY</a></div>
            </div>
            <div class="gallery">
                <img src="umberlla.jpeg">
                    <div class="desc" style="color: #fff; "><a href="addEdit.php" style="color: #fff;">UMBERLLA</a></div>
            </div>
            <div class="gallery">
                <img src="bottle.jpeg">
                <div class="desc" style="color: #fff;" ><a href="addEdit.php" style="color: #fff;">BOTTLE</a></div>
            </div>
            <div class="gallery">
                <img src="watch.jpeg">
                <div class="desc" style="color: #fff;" ><a href="addEdit.php" style="color: #fff;">WATCH</a></div>
            </div>
            <div class="gallery">
                <img src="mobile.jpeg">
                <div class="desc" style="color: #fff;" ><a href="addEdit.php" style="color: #fff;">Mobile</a></div>
            </div>
            <div class="gallery">
                <img src="Id_card.jpeg">
                <div class="desc" style="color: #fff;" ><a href="addEdit.php" style="color: #fff;">ID CARD</a></div>
            </div>
            <div class="gallery">
                <img src="Wallet.jpeg">
                <div class="desc" style="color: #fff;" ><a href="addEdit.php" style="color: #fff;">Wallet</a></div>
            </div>
            <div class="gallery">
                <img src="Charger.jpeg">
                <div class="desc" style="color: #fff;" ><a href="addEdit.php" style="color: #fff;">Charger</a></div>
            </div>
            <div class="gallery">
                <img src="Earphones.jpeg">
                <div class="desc" style="color: #fff;" ><a href="addEdit.php" style="color: #fff;">Earphones</a></div>
            </div>
        </div>
    </body>
</html>