    <!DOCTYPE HTML>

    <html>
        <head>
            <title>Login</title>
            <link href="http://localhost/ccps/public/css/style.css" rel="stylesheet" type="text/css" >
        </head>

        <body class="body-home">

         <ul class="ul1">
           <li class="li1">
           <a class="li-a" href="/ccps/public/">Home</a></li>
           <li class="li1"><a class = "li-a"  href="/ccps/public/login">Login</a></li>
           <li class="li1"><a class = "li-a"  href="/ccps/public/register">Register</a></li>
        </ul>
           <div class="body-home">

                <div > 
                           <?php
                            //print_r($data);
                             if($data == "Thisusernameorpasswordisnotmatch" || $data=="YourRequestIsPending")
                              {
                                ?>
                                <div id="snackbar"><?php 
                                if($data == "Thisusernameorpasswordisnotmatch")
                                  {
                                    echo "Username or password is not match";
                                  }
                                  elseif($data == "YourRequestIsPending")
                                    {
                                      echo "You request is pending";
                                      //print_r($data);
                                    }?>
                                  
                                </div>
                                <?php
                               echo '<script>

                                 var x = document.getElementById("snackbar")
                                 x.className = "show";
                                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
                                 </script>';
                              }
                            ?> 
                            </div>

            <div class="div1">

                <div style="margin-left: 30px;font-size: 20px;">Login</div>
                <hr>
                <br>
                <form action ="login/login" method="POST">
                        
                        <div style="display: inline;">
                         <label for="user">Username</label>
                        <input type="text" id="user" name ="userName" required autofocus/>

                     
                   
                      
                        </div>

                        <div >
                         <label for="password">Password</label>
                        <input type="password" id="password" name ="password" required autofocus />
                        </div>
                    
                         <button type="submit" class="button-submit  button-radious-8 button-hover-blue">
                                        Login
                                    </button>
                    
                </form>


            </div>
            </div>
        </body>
    </html>
