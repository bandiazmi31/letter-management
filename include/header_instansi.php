<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            #logo {
            display: block;
            margin-bottom: 25px;
            margin-right: 15px;
        }
            img {
            /* border-radius: 50%; */
            margin: 0 auto;
            width: 142px;
            height: 80px;
        }
        </style>
    </head>

<?php
    //cek session
    if(!empty($_SESSION['admin'])){
        $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
        while($data = mysqli_fetch_array($query)){
            echo '
                <div class="col s12" id="header-instansi">
                    <div class="card blue white-text">
                        <div class="card-content">';
                            if(!empty($data['logo'])){
                                echo '<div class="circle left"><img id="logo" src="./upload/'.$data['logo'].'"/></div>';
                            } else {
                                echo '<div class="circle left"><img id="logo" src="./asset/img/logo.png"/></div>';
                            }

                            if(!empty($data['nama'])){
                                echo '<h5 class="ins">'.$data['nama'].'</h5>';
                            } else {
                                echo '<h5 class="ins">LPP RRI MATARAM</h5>';
                            }

                            if(!empty($data['alamat'])){
                                echo '<p class="almt">'.$data['alamat'].'</p>';
                            } else {
                                echo '<p class="almt">Jl. Langko No.83, Taman Sari, Kec. Ampenan, Kota Mataram, Nusa Tenggara Bar. 83114</p>';
                            }
                            echo '
                        </div>
                    </div>
                </div>';
        }
    } else {
        header("Location: ../");
        die();
    }
?>
</html>