<?php
if($_POST["subvot"]){
            if($_POST["pilih"]!=""){
                $hvot=mysql_query("select * from polling where aktif='A'");
                $dbhvot=mysql_fetch_assoc($hvot);
                if($_POST["pilih"]=="sb"){
                    $j=$dbhvot["sangat_baik"]+1;
                    mysql_query("update polling set sangat_baik='".$j."'");
                    }
                if($_POST["pilih"]=="b"){
                    $j=$dbhvot["baik"]+1;
                    mysql_query("update polling set baik='".$j."'");
                    }
                if($_POST["pilih"]=="s"){
                    $j=$dbhvot["sedang"]+1;
                    mysql_query("update polling set sedang='".$j."'");
                    }
                if($_POST["pilih"]=="br"){
                    $j=$dbhvot["buruk"]+1;
                    mysql_query("update polling set buruk='".$j."'");
                    }
                ?>
                <script>
                window.location="?menu=akun&submenu=profile";
                </script>
                <?php
                }
            }
?>