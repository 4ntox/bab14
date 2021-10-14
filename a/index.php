<?php require ("query.php") ?>

<html>

    <head>

         <title>index</title>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" 
                    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
                    </script>

                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

                <link rel="stylesheet" href= "styles.css">

                

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
            <span class= "naavbar-toggler-icon"></span>
            </button>

            <!-- navbar collapse -->
            <div class= "collapse navbar-collapse" id= "navbarSupportedContent">

                <ul class= "navbar-nav ms-auto mb-2 mg-lg-0">
                    <li class= "nav-item">
                        <a class= "nav-link" aria-current= "page" href= "#">Daftar Barang</a>
                    </li>
                </ul>
            </div>


            
        </div>
        
    </nav>

        <div id= "Barang-list">
            
            <div class= "container">

                <div class= "row mb-4">

                    <div class= "col">

                        <h2>Daftar Barang</h2>

                    </div>

                    <div class= "col text-end">

                        <a class= "btn btn-primary" href= "#" role= "button">Tambah Barang</a>

                    </div>

                </div>
                
                <div class= "row">

                    <div class= "col">

                        <table class= "table">

                            <thead>

                                <tr>

                                <th scope= "col">#</th>
                                <th scope= "col">id_barang</th>
                                <th scope= "col">nama_barang</th>
                                <th scope= "col">jenis_barang</th>
                                <th scope= "col">satuan</th>
                                <th scope= "col">jumlah_stok</th>
                                                                     
                                </tr>

                            </thead>

                            <tbody>

                            <?php

                            $i = 1;

                                foreach ($result as $barang) {
                                    echo '<tr>
                                     <th scope= "row">' .$i++ . '</th>
                                     <td>' . $barang["id_barang"] . '</td>
                                     <td>' . $barang["nama_barang"] . '</td>
                                     <td>' . $barang["jenis"] . '</td>
                                     <td>' . $barang["satuan"] . '</td>
                                     <td>' . $barang["stok"] . '</td>
                                     
                                    
                                    </tr>';
                                    
                                }

                            ?>

                                <!-- <tr>

                                <th scope= "row">1</th>
                                <td>id_barang</td> 
                                <td>nama_barang</td>
                                <td>jenis_barang</td>
                                <td>satuan</td>
                                <td>jumlah_stok</td>
                                                                     
                                </tr> -->

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>


</body>

</html>