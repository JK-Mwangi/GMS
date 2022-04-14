<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>New member registration form</h2>
                        <?php
                        include"../connect.php";
//if all values are correctly set in the form, fetch them and store them in the variables
                        if(isset($_POST["submit"])){
                            $fname=$_POST["fname"];
                            $lname=$_POST["lname"];
                            $pnumber=$_POST["pnumber"];
                            $email=$_POST["email"];
                            $gender=$_POST["gender"];
                            $age=$_POST["age"];
                            $password=$_POST["password"];
                            $cpassword=$_POST["cpassword"];

                            if($password!=$cpassword){
                                echo"<p style='color:red;'>";
                                echo"password missmatch";
                                echo"</p>";
                            }else{
                                $sql="SELECT * FROM `members` WHERE email='$email'";
                                $results=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_array($results);
                                if($row["email"]==$email){
                                    echo"<p style='color:red;'>";
                                    echo"email already exist!!";
                                    echo"</p>";
                                }else{
                                    $password=md5($password);
                                    $sql2="INSERT INTO `members`(`fname`, `lname`, `pnumber`, `email`, `gender`, `age`, `password`) 
                                    VALUES ('$fname','$lname','$pnumber','$email','$gender','$age','$password')";
                                  
                                    $result=mysqli_query($conn,$sql2);
                                    if($result){
                                        echo"<p style='color:green;'>";
                                    echo"registered successfully";
                                    echo"</p>";
                                    header("location:../login/login.php");
                                    }else{
                                        echo"Oops! something went wrong";
                                    }
                                }
                            }
                        }
                        

                        ?>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="fname" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">SecondName :</label>
                                <input type="text" name="lname" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Phone Number :</label>
                            <input type="tel" name="pnumber" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="male" id="male" >
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="female" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="others" id="others">
                                <label for="others">Others</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Age :</label>
                            <input type="text" name="age" id="age">
                        </div>                  
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password
                            " name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password :</label>
                            <input type="password" name="cpassword" id="cpassword">
                        </div>
                        <div class="form-submit">
                            <a href="../index.html"><i class="fa fa-home fa-2x"></i></a>
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input style="background-color:aqua" type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                        <div style="float:right; margin-top:10px; font-size:18px">
                            Already a member? <a href="../login/login.php">login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>