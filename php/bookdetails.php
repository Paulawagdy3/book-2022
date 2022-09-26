<?php 

session_start();
if ($_SESSION['Email']){

}else{
    header("Location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bookdetails.css">  
    <link rel="stylesheet" href="../css/footer.css">  
    <title>Document</title>
</head>
<body>

    <section class="header">
        <div class="header_back">
            <div class="user_info">
                <a href="#" class="btn a1">
                    <span>
                        <?php
                            echo $_SESSION["Name"];
                        ?>
                    </span>
                </a>
                <a href="logout.php" ><i style="color:#81C3D7" class="fas fa-sign-out-alt"></i></a>
            </div>
        
            <div class="name_site">
                <img src="name.png" alt="">
                <a>Market</a>
            </div>
        </div>
    </section>

    <section class="body_a1">
        <div class="container3">
            <div class="body_show">
                
                
                <?php 

                    $id=$_SESSION["id"];
                    $host = "localhost:3306";
                    $dbusername = "root";
                    $dbpassword = "";
                    $dbname = "bookmanagment1";
                    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                    $sql = "SELECT * FROM `Book` WHERE  id LIKE " .$id;
                    $result = $conn-> query($sql);
                    if ($result-> num_rows > 0) 
                    {
                        while ($row = $result-> fetch_assoc()) {
                        echo" 
                        <img src=". $row["img"] ." alt=''>
                        <ul>
                            <li>
                                <a>AuthorName :<span>". $row["AuthorName"] ."</span> </a>
                            </li>
                            <li>
                                <a>BookTitle : <span>". $row["BookTitle"] ."</span> </a>
                            </li>
                            <li>
                                <a>Publisher : <span>". $row["Publisher"] ."</span> </a>
                            </li>
                            <li>
                                <a>Keyword : <span>". $row["Keyword"] ."</span> </a>
                            </li>
                            <li>
                                <P>". $row["dis"] ."</P>
                            </li>
                        </ul>    
                            ";    
                        }
                    }   
                    else
                    {
                        echo"error";
                    }
                    $conn-> close();


                ?>
                
            </div>
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

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

