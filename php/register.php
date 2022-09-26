<?php
    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "bookmanagment1";
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UT-8">
        <title>wrb log</title>
        <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
        <meta name="author" content="Vincent Garreau" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" media="screen" href="particles.js-master/demo/css/style.css">
        <link rel="stylesheet" href="../css/Registration.css">
    </head>

    <body>

        <!-- particles.js container -->
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

        <div class="page">
            <div class="card">
                <form method="post" action="" class="wrapper">
                    <div class="title">
                        Registration Form
                    </div>
                    <div class="form">
                        <div class="inputfield">
                            <label>Name</label>
                            <input type="text" name="Name" class="input">
                        </div>
                        <div class="inputfield">
                            <label>User Name</label>
                            <input type="text" name="UserName" class="input">
                        </div>
                        <div class="inputfield">
                            <label>Password</label>
                            <input type="password" name="password" class="input"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="inputfield">
                            <label>Password</label>
                            <input type="password" name="cpassword" class="input">
                        </div>
                        <div class="inputfield">
                            <label>Email Address</label>
                            <input type="text" name="email" class="input">
                        </div>
                        <div class="inputfield">
                            <label>User Level</label>
                            <input type="text" name="UserLevel" class="input">
                        </div>
                        <div class="inputfield">
                            <label>Phone Number</label>
                            <input type="number" name="Phone" class="input">
                        </div>
                        
                        <div class="inputfield">
                            <input type="submit" value="Register" name="Register" class="btn">
                        </div>
                    </div>
                    <a class="error">
    <?php
     $Name = filter_input(INPUT_POST, 'Name');
     $password = filter_input(INPUT_POST, 'password');
     $cpassword = filter_input(INPUT_POST, 'cpassword');
     $UserName = filter_input(INPUT_POST, 'UserName');
     $email = filter_input(INPUT_POST, 'email');
     $UserLevel = filter_input(INPUT_POST, 'UserLevel');
     $Phone = filter_input(INPUT_POST, 'Phone');

if (!empty($Name))
{  
    if (!empty($UserLevel))
    {
        if (!empty($password))
        {  
            if ($password==$cpassword)
            { 
                if (!empty($UserName))
                { 
                    if (!empty($email))
                    {  
                        if (!empty($Phone))
                        {
                           
                                
                                if (mysqli_connect_error())
                                {
                                    die('Connect Error ('. mysqli_connect_errno() .') '
                                    . mysqli_connect_error());
                                }
                                else
                                {
                                    $sql = "INSERT INTO user (Name,Email,PhoneNumber,UserName,Password,UserLevel)
                                                    values ('$Name','$email','$Phone','$UserName','$password','$UserName')";
                                        
                                    if ($conn->query($sql))
                                    {
                                        header('location:login.php') ;
                                    }
                                    else
                                    {
                                        echo "Error: ". $sql ."
                                        ". $conn->error;
                                    }
                                    $conn->close();
                                }
                           
                        }
                        else
                        {
                            echo "Phone should not be empty";
                            die();
                        }
                    }
                    else
                    {
                        echo "username should not be empty";
                        die();
                    }
                }

                else
                {
                    echo "Gender should not be empty";
                    die();
                }
            }

            else
            {
                echo "password not same";
                die();
            }    
        }
        else
        {
            echo "password should not be empty";
            die();
        }
    }
    else
    {
        echo "lastname should not be empty";
        die();
    }
}
else
{
    echo "firstname should not be empty";
    die();
}

?>
</a>
                </form>
            </div>
    </body>

    </html>
