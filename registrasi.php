<?php

require_once ("koneksi.php");

?>


<html>

    <head>

         <title>Register Petugas</title>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" 
                    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
                    </script>

                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

                <link rel="stylesheet" href= "model.css">

                

    </head>



<body>


    <!-- header -->
    <nav class = "navbar navbar-expand-lg navbar-light">
            
        <div class="container-fluid">

            <!-- navbar brand -->
            <a class = "navbar-brand" href="#">
                <img src="bets.png" />
            </a>
            
            <!-- navbar toggler -->
            <button class = "navbar-toggler" type="button" data-bs-toggle ="collapse" data-bs-target = "#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class= "navbar-toggler-icon"></span>
            </button>

            <!-- navbar collapse -->
            <div class= "collapse navbar-collapse" id= "navbarSupportedContent">

                <ul class= "navbar-nav ms-auto mb-2 mg-lg-0">
                    <li class= "nav-item">
                        <a class= "nav-link" aria-current= "page" href= "#">Data Petugas</a>
                    </li>
                </ul>
            </div>


            
        </div>
        
    </nav>


    <div id= "form" class= "pt-5">

            <div class= "container">

                <div class= "row d-flex justify-content-center">
                    <div class= "col colom col-8 p-4 bg-light">
                        
                        <form method = "POST" action = "action_register.php">

                            <div class = "form-group mb-2">

                                <label for="name">Nama Lengkap</label>
                                <input id= "name" name= "name" class="form-control" type="text" placeholder="Nama Lengkap" required>

                            </div>

                            <div class = "form-group mb-2">

                                <label for="email">E-mail</label>
                                <input id= "email" name= "email" class="form-control" type="email" placeholder="E-mail" required>

                                
                            </div>

                            <div class = "form-group mb-2">

                                <label for="password">Password</label>
                                <input id= "password" name= "password" class="form-control" type="password" placeholder="Password" required>

                                
                            </div>

                            <div class = "form-group mb-2">

                                <label for="re-password">Konfirmasi Password</label>
                                <input id= "re-password" name= "re-password" class="form-control" type="password" placeholder="Ulangi Password" required>

                                
                            </div>

                            <input type= "submit" name = "submit" value= "send" class= "btn btn-primary">

                        </form>    

                    </div>
                </div> 
            </div>   
    </div>


</body>

</html>