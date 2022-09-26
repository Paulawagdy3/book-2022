<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/diplaysearch1.css">  
    <link rel="stylesheet" href="../css/footer.css">  
    <link rel="stylesheet" href="../css/slider.css"> 
    <title>Document</title>
</head>
<body>
    <section class="header">
        <div class="header_back">
            <div class="user_info">
                <a href="login.php" class="btn a1"><span>log in</span></a>
                <a href="register.php" class="btn a1"><span>sign up</span></a>
            </div>
        
            <div class="name_site">
                <img src="name.png" alt="">
                <a>Market</a>
            </div>
        </div>
    </section>

    <section class="body">

        <div class="contanier">
            <div class="search">
                <input type="text">
                <a><i class="fas fa-search"></i></a>
                <button onclick="show()">search</button>
            </div>
        </div>

        <div class="alert" id="alert">
            <a>You Shoud Be Sin In Firest</a>
        </div>

        <div class="img_book">
            <!--image slider start-->
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <img src="img1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img3.jpg" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                    <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
                <!--manual navigation end-->
            </div>
            <!--image slider end-->
        </div>

    </section>

    <section class="footer">

        <div class="container1">
            <div class="footer_body">
                <div class="m2_footer">
                    <div class="logo">
                        <div class="name_hotel_m2">
                            <a>Book<span>/</span>Market</a>
                        </div>
                    </div>
                    <div class="text_fotter">
                        <p> The best way to understand this surprisingly complicated marketplace is to use information that is bias-free, independent, and up-to-date, and our intelligence is all three. </p>
                    </div>
                </div>

                <div class="m4_footer">
                    <div class="">
                        <h4>10 (78) 273 3563</h4>
                        <a href="#">info@Book/market.com</a>
                    </div>
                    <ul class="m4_footer_li">
                        <li><a href="#"><i class="fab fa-instagram"></i>instagram@Book/market.com</a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i>facebook@Book/kmarket.com</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>


</body>
</html>

<script type="text/javascript">

    var counter = 1;
    setInterval(function() {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 3) {
            counter = 1;
        }
    }, 5000);

    function show() {
        if (0 == 1) {

        } else {
            document.getElementById("alert").style.display = "block";
            return a = 1;
        }
    }

</script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>