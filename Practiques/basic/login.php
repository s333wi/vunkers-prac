<?php
/**
 * Script Name: PHP Form Login Remember Functionality with Cookies
 * Source: www.TutorialsClass.com
 * */
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background-color: #333;
        }
        
        label{
            color:#fff;
        }
    </style>
    <body>

        <div class="row mt-3">
            <div class="col-md-4 mx-auto col-sm-11 col-xs-11">
                <div class='justify-content-center'>
                    <div class="col-md-12 col-xs-12">
                        <div class = "form-group">
                            <form action="cookies.php" method="post">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Username:</label>
                                            <input name="user" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <label>Password: </label> <input name="pass" type="password" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 mx-auto col-xs-6 mx-auto ">
                                        <input class='btn btn-warning btn-lg btn-block' type="submit" name='submit' value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

