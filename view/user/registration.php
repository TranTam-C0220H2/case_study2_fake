<style>
    .login-block {
        float: left;
        width: 100%;
        padding: 50px 0;
    }

    .banner-sec {
        background: url(https://static.pexels.com/photos/33972/pexels-photo.jpg) no-repeat left bottom;
        background-size: cover;
        min-height: 500px;
        border-radius: 0 10px 10px 0;
        padding: 0;
    }

    .container {
        background: #fff;
        border-radius: 10px;
        box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
    }

    .login-sec {
        padding: 50px 30px;
        position: relative;
    }

    .login-sec .copy-text {
        position: absolute;
        width: 80%;
        bottom: 20px;
        font-size: 13px;
        text-align: center;
    }

    .login-sec .copy-text i {
        color: #FEB58A;
    }

    .login-sec .copy-text a {
        color: #E36262;
    }

    .login-sec h2 {
        margin-bottom: 30px;
        font-weight: 800;
        font-size: 30px;
        color: #DE6262;
    }

    .login-sec h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FEB58A;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
        margin-left: auto;
        margin-right: auto
    }

    .btn-login {
        background: #DE6262;
        color: #fff;
        font-weight: 600;
    }

    .banner-text {
        width: 70%;
        position: absolute;
        bottom: 40px;
        padding-left: 20px;
    }

    .banner-text h2 {
        color: #DE6262;
        font-weight: 600;
    }

    .banner-text h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FFF;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
    }

    .banner-text p {
        color: #fff;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Registration Now</h2>
                <form class="login-form" method="post">
                    <div class="form-group">
                        <label for="exampleID" class="text-uppercase">ID</label>
                        <input type="text" class="form-control" placeholder="" name="id"
                               value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : '' ?>">
                        <?php
                        if (isset($_SESSION['id']) && $_SESSION['id'] == '') {
                            echo 'Id is malformed!';
                            unset($_SESSION['id']);
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Name</label>
                        <input type="text" class="form-control" placeholder="" name="name"
                               value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>">
                        <?php
                        if (isset($_SESSION['name']) && $_SESSION['name'] == '') {
                            echo 'Name is malformed!';
                            unset($_SESSION['name']);
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                        <input type="email" class="form-control" placeholder="" name="email"
                               value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>">
                        <?php
                        if (isset($_SESSION['email']) && $_SESSION['email'] == '') {
                            echo 'Email is malformed!';
                            unset($_SESSION['email']);
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone" class="text-uppercase">Phone</label>
                        <input type="text" class="form-control" placeholder="" name="phone"
                               value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : '' ?>">
                        <?php
                        if (isset($_SESSION['phone']) && $_SESSION['phone'] == '') {
                            echo 'Phone is malformed!';
                            unset($_SESSION['phone']);
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                        <input type="password" class="form-control" placeholder="" name="password"
                               value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : '' ?>">
                        <?php
                        if (isset($_SESSION['password']) && $_SESSION['password'] == '') {
                            echo 'Password is malformed!';
                            unset($_SESSION['password']);
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="" name="confirmPassword"
                               value="<?php echo isset($_SESSION['confirmPassword']) ? $_SESSION['confirmPassword'] : '' ?>">
                        <?php
                        if (isset($_SESSION['confirmPassword']) && $_SESSION['confirmPassword'] == '') {
                            echo 'ConfirmPassword is like Password!';
                            unset($_SESSION['confirmPassword']);
                        }
                        ?>
                    </div>
                    <div class="form-check">
                        <a href="index.php?pages=user" class="btn btn-login float-right">Cancel</a>
                        <button type="submit" class="btn btn-login float-right">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
</section>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>