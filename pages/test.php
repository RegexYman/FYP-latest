<?php
                                       $url = "localhost:3000/getTrafficSpeeds";
 
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_POST, true);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array("year"=>"2018", "month"=>"03","date"=>"06","region"=>"HK"))); 
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                                        $result = curl_exec($ch);

                                        curl_close($ch);
                                        $data = json_decode($result, true);
                                        //print_r( $data[0]['Speed_List']);
                                        $good = $data[0]['Speed_List']['HK_Region']['Good_Speed']; 
                                        $average = $data[0]['Speed_List']['HK_Region']['Average_Speed'];
                                        $poor = $data[0]['Speed_List']['HK_Region']['Poor_Speed'];      

                                    ?>
<html>
    <body>
        <table>
            <thead>
            <tr>
            <th>Road Condition</th>
            <th>Speed</th>
            <th>Location</th>
            </tr>
</thead>
<tbody>
            <?php 
                  $name = array("Good","Average","Poor");
                   $condition = array($good,$average,$poor);
                    for($z=0; $z<count($condition);$z++){
                        $roadtype = array($condition[$z]["Urban_Route"],$condition[$z]["Major_Route"]);
                        for($i=0; $i<count($roadtype);$i++){
                            for($x=0; $x<count($roadtype[$i]);$x++){
                                //echo "<tr><td>123</td><td>".$roadtype[$i][$x]["Traffic_Speed"]."</td><td>".$roadtype[$i][$x]["Link_ID"]."</td></tr>"."<br>";
                                //echo $roadtype[$i][$x]["Traffic_Speed"]."<br>";
                                
                            }
                        }
                    }
                  

                   
                        

                       
           
            ?>
          
                </tbody>
        </table>
</body>
</html>