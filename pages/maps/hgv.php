var flightPlanCoordinates = [

    <?php 
        
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'analisis';
        

        $aw   = "kampus";
        $ak   ="Puskesmas Janti";
        $node_aw ="";

        if($aw == "kampus"){

            $aw = "1";

        }
        elseif($aw == "kos"){
            
            $aw = "1";
                        
        }
        elseif($aw == "polsek"){
            
            $aw = "1";
                        
        }
        if($ak == "Puskesmas Janti"){
            
            $ak = "p04";
            $node_aw  = "A";          
        }
        elseif($ak == "Klinik RN Klayatan"){
            
            $ak = "k16";
            $node_aw  = "A1";          
        }
        elseif($ak == "Rumah Sakit Islam Aisyiyah"){
            
            $ak = "rs06";
            $node_aw  = "A2";          
        }


        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        $query = mysqli_query($conn,"SELECT * from a_star where id_awal = '$aw' and id_lakes = '$ak' and node_awal = '$node_aw' order by fn limit 1");
        $data  = mysqli_fetch_array($query);
        
        $node = $data['node_awal'];
        
        $query3 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
        $data3  = mysqli_fetch_array($query3);
        
        $lat = $data3['lat'];
        $lon = $data3['lng']; 
        
        do{
        
            echo"{lat: $lat, lng: $lon},";
        
        $query2 = mysqli_query($conn,"SELECT * from a_star where id_awal = '$aw' and id_lakes = '$ak' and node_awal = '$node' order by fn limit 1");
        $data2  = mysqli_fetch_array($query2);
        
        $node  = $data2['node_tujuan'];
        
        $query4 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
        $data4  = mysqli_fetch_array($query4);
        
        $lat = $data4['lat'];
        $lon = $data4['lng']; 
        
        }while($node .= "");   
                  
?>
                
                   
        ];

        var tempat = [


    <?php 
        
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'analisis';
        
        $aw   ="kampus";
        $ak   ="Puskesmas Janti";
        $node_aw ="";

        if($aw == "kampus"){

            $aw = "1";

        }
        elseif($aw == "kos"){
            
            $aw = "1";
                        
        }
        elseif($aw == "polsek"){
            
            $aw = "1";
                        
        }
        if($ak == "Puskesmas Janti"){
            
            $ak = "p04";
            $node_aw  = "A";          
        }
        elseif($ak == "Klinik RN Klayatan"){
            
            $ak = "k16";
            $node_aw  = "A1";          
        }
        elseif($ak == "Rumah Sakit Islam Aisyiyah"){
            
            $ak = "rs06";
            $node_aw  = "A2";          
        }
        
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        $query = mysqli_query($conn,"SELECT * from a_star where id_awal = '$aw' and id_lakes = '$ak' and node_awal = '$node_aw' order by fn limit 1");
        $data  = mysqli_fetch_array($query);
        
        $node = $data['node_awal'];
        
        $query3 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
        $data3  = mysqli_fetch_array($query3);
        
        $lat = $data3['lat'];
        $lon = $data3['lng']; 
        
        do{
        
        echo"[$lat, $lon],";
        
        $query2 = mysqli_query($conn,"SELECT * from a_star where id_awal = '$aw' and id_lakes = '$ak' and node_awal = '$node' order by fn limit 1");
        $data2  = mysqli_fetch_array($query2);
        
        $node  = $data2['node_tujuan'];
        
        $query4 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
        $data4  = mysqli_fetch_array($query4);
        
        $lat = $data4['lat'];
        $lon = $data4['lng']; 
        
        }while($node .= "");
        
        
                  
?>
         
        ];