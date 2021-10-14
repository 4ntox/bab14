<?php

require_once ("koneksi.php");

//panggil query mysql
require ("query.php");

?>






<html>

    <head>

         <title>Input Form</title>

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
                <span class= "navbar-toggler-icon"></span>
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
    




        
        <div id= "form" class= "pt-5">

            <div class= "container">

                <div class= "row d-flex justify-content-center">
                    <div class= "col colom col-8 p-4 bg-light">
                        
                        <form method = "post" action = "result.php">

                            <div class = "form-group mb-2">

                                <label for="id_barang">Id Barang</label>
                                <input id= "id_barang" name= "id_barang" class="form-control" type="text" placeholder="Id Barang" />

                            </div>

                            <div class = "form-group mb-2">

                                <label for="nama_barang">Nama Barang</label>
                                <input id= "nama_barang" name= "nama_barang" class="form-control" type="text" placeholder="Nama Barang" />

                                
                            </div>

                            <div class = "form-group mb-2">

                                <label for="jenis">Jenis Barang</label>
                                <select class="form-control" id="jenis" name="jenis">
                                    <option value="">--Pilih Jenis Barang--</option>
                                    <?php foreach($dataJenis as $jenis) { ?>                                   
                                    <option value="<?php=$jenis["id"]?>"><?php=$jenis['nama'] ?></option>
                                    
                                </select>
                                
                                <label for="satuan">Satuan</label>
                                <select class="form-control" id="satuan" name="satuan">
                                    <option value="">--Pilih Satuan--</option>
                                    <?php foreach($dataSatuan as $satuan) { ?>
                                    <option value="<?php=$satuan["id"]?>"><?php=$satuan['nama'] ?></option>
                                    <?php } ?>
                                    
                                </select>

                            </div>



                            <div class = "form-group mb-2">

                                <label for="stok">Jumlah Stok</label>
                                <input id= "stok" name="stok" class="form-control" type="number" placeholder="Banyak Stok" />

                            </div>


                            <div class = "form-group mb-2">

                                <label>Ijin Pendukung Produk</label>

                                <div class="form-check">

                                    <input name= "ijinEdar" class= "form-check-input" type= "checkbox" value= "ijinEdar" id= "check1">
                                    <label class= "form-check-label" for= "check1">Berijin Edar</label>
                                </div>


                                <div class="form-check">

                                    <input name= "ijinBpom" class= "form-check-input" type= "checkbox" value= "ijinBpom" id= "check2">
                                    <label class= "form-check-label" for= "check2">Berijin BPOM</label>
                                </div>

                            </div>


                            <div class = "form-group mb-2">

                                <label>Status Ekspor</label>

                                <div class= "form-check">
                                    <input class= "form-check-input" type= "radio" name= "ekspor" id= "boleh" value= "boleh">
                                    <label class= "form-check-label" for= "boleh">Boleh diEkspor</label>
                                </div>

                                <div class= "form-check">
                                    <input class= "form-check-input" type= "radio" name= "ekspor" id= "tidak_boleh" value= "tidak_boleh">
                                    <label class= "form-check-label" for= "tidak_boleh">Tidak Boleh diEkspor</label>
                                </div>

                            </div>


                            <div class = "form-group mb-2">

                                <label for="distributor">Distributor detail</label>
                                <textarea class="form-control" id="distributor" name="distributor" rows="3"></textarea>

                            </div>


                            <input type= "submit" value= "send" class= "btn btn-primary">

                            
                        

                        </form>
                    </div>
                </div>
            </div>
        </div>





</body>

</html>