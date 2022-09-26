

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UT-8">
    <title>web login</title>
    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="author" content="Vincent Garreau" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="particles.js-master/demo/css/style.css">

    <link rel="stylesheet" href="../css/login1.css">
    <!--css page-->
</head>

<body>

<!-- start background-->
    <div id="particles-js"></div>

    <!-- scripts -->
    <script src="../particles.js-master/particles.js"></script>
    <script src="../particles.js-master/demo/js/app.js"></script>

    <!-- stats.js -->
    <script>
        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
    </script>
<!-- end background-->

<!--start body card-->

    <div class="page">
        <div class="card">
            <!--card-->
            <form class="wrapper" method="post">
          <div class="title">
            log in
          </div>
          <div class="form"   action="" method="POST">  
            <div class="inputfield">
              <label>Email Address</label>
              <input type="text" name="user" class="input">
            </div>  
            <div class="inputfield">
              <label>Password</label>
              <input type="password" name="pass" class="input">
            </div>  

            <div class="inputfield">
              <button type="submit" name="submit" class="btn">Login</button>
            </div>
            <a class="error">
          <?php  
          session_start();
            $conn = mysqli_connect("localhost:3306", "root", "", "bookmanagment1");

            if(isset($_POST["submit"]))
            {  
              if(!empty($_POST['user']) && !empty($_POST['pass'])) 
              {  
                $user=$_POST['user'];  
                $pass=$_POST['pass'];    
                $query=("SELECT * FROM user WHERE Email='$user' AND Password='$pass'");
                $numrows=mysqli_query($conn,$query);    
                
                if(mysqli_num_rows($numrows)==1)  
                { while ($res = mysqli_fetch_array($numrows)) {

                  $_SESSION['Name'] = $res["Name"];
                  $_SESSION['Email'] = $res["Email"];
                  header('location:diplaysearch.php') ;}
                } 
                else 
                {  
                  echo "Invalid username or password!";  
                }   
              } 
              else
              {  
                echo "All fields are required!";  
              }  
            }  
          ?> </a>
          </div>
        </form>
            <div class="Registration">
                    <a style="text-decoration: none;" href="register.php">make email</a>
            </div>
        </div>
    </div>
<!--end body card-->

</body>

</html>
