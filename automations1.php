<?php
session_start();
require 'dbconnect.php';
$branch;
$subject;$subjectcode;$ext_clg;$ext_code;
$rows=0;
$result1=$mysqli->query("SELECT * from clg_list");
	while($row1=mysqli_fetch_array($result1))
	{
    if($rows<2){
       $rows=$rows+1;
      continue;}
      if($rows==4)
      break;
		$college=$row1['clg_name'];
		$collegecode=$row1['collegecode'];
		$loc1=$row1['zone_code'];
        $zone=$row1['zone'];
	  $result2=$mysqli->query("SELECT branch_code from branch");
	  while($row2=mysqli_fetch_array($result2))
	  {  
	  	 $branch=$row2['branch_code'];

         $result3=$mysqli->query("SELECT * from subject where branch='$branch'");
        
         while($row3=mysqli_fetch_array($result3))
         {
           // echo "<h1>";
            //echo $college;
            //echo"</h1>";
             $subject=$row3['prac_sub'];
             $subjectcode=$row3['subjectcode'];
            $mysqli->query("CREATE VIEW ld AS SELECT * from location_distance where loc1='$loc1'");
            
             $result4=$mysqli->query("SELECT clg_name,collegecode,distance from clg_list,ld where clg_name<>'$college' and zone_code = loc2 order by distance");
           /*  $row=$result4->num_rows;
             echo $row;
             while($row4=mysqli_fetch_array($result4))
             {
                echo $row4['clg_name'];
                echo $row4['collegecode'];
                echo $row4['distance'];
                echo "<br>";
             }*/
             $flag=1; $flag1=0;
             while($row4=mysqli_fetch_array($result4))
             {    
                
                  if($flag==0)
                    break;
                  
                  $ext_clg= $row4['clg_name'];
                  $ext_code=$row4['collegecode'];
                 
                 $result5=$mysqli->query("SELECT sub,sub_code,offemail from faculty,interest_sub  where  branchcode='$branch'and code='$ext_code' and assign<2 and f_id=offemail");
                    while($row5=mysqli_fetch_array($result5)){  
                      $sc=$row5['sub_code'];
                      if(strcmp($subjectcode,$sc)==0)
                      {
                        $fac_id=$row5['offemail'];
                        $mysqli->query("UPDATE faculty set assign = assign +1 where offemail='$fac_id'");
                        $mysqli->query("INSERT INTO automate values('$college','$collegecode','$loc1','$zone','$branch','$subject','$subjectcode','$fac_id','$ext_clg','$ext_code')");
                      
                        $flag=0;
                        $flag1=1;
                        break;
                      }
                      else
                        continue;
                  }
               }
               if($flag1==0)
               {
                 $mysqli->query("INSERT INTO automate values('$college','$collegecode','$loc1','$zone','$branch','$subject','$subjectcode',NULL,NULL,NULL)");
               }
           
              }

          }
     $rows=$rows+1;    
    }

     echo '<script>
                window.location.href="automations2.php";
    </script>';

?>