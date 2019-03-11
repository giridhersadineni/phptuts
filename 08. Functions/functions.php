<?php 
function replaceName($name,$newname,$list){
                $found=array_search($name,$list);
                if($found==FALSE){
                    echo "Name Not Found";
                }else{
                    $list[$found]=$newname;
                    displayArray($list,"Name");
                    return $list;
                }
            }

            function displayArray($list,$listitem){
                echo "<h1>Updated Names</h1>";
                foreach($list as $name){
                    echo "<br>".$listitem.": ".$name;
                }
            }

            function getarray($size){
                $arr=array();
                for($i=1;$i<=$size;$i++){
                    array_push($arr,$i);
                }
                return $arr;
            }

    ?>