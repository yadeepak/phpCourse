<?php 
//echo phpinfo();
$x = 10;
$x=30;  
$y = 10;
// $check=0;
// if($check ===1){
//     echo "positive";
// }
// else if($check===-1){
// echo  "negative";
// }
// else{
// echo "Equal";
// }
$xArray=array('10','dev',"A");
// $xArray=['10','dev'];
// array_push($xArray,'A');
// echo $xArray[1];

//$xArray=['rollNo'=>'10','name'=>'dev','div'=>'A','teacher','abc'];
// echo $xArray['rollNo'];
// echo '<br>';
// echo $xArray['name'];
// echo '<br>';
// echo $xArray['div'];
// echo count($xArray);
// for($i=0;$i<3;$i++){
    // if($i==0){
    //     echo $xArray[$i]+10;
    // }
//    echo $xArray[$i];
//     echo '<br>';
// }
// foreach($xArray as $key=>$studentDetail){
//     echo $studentDetail;
//     echo '<br>';
// }
// $i=0;
// while($i<count($xArray)){
// echo $xArray[$i];
// $i++;
// }
$teachers=array('abc','xyz','wab');
$xArray=array('10','dev',"A",$teachers);
//print_r($xArray);
//echo $xArray[3][0];
foreach($xArray as $key=>$studentDetail){
   
    echo '<br>';
    $check=gettype($studentDetail);
    if($check=='array'){
        foreach($xArray[3] as $key=>$value){
        echo $value.',';
        }
    }else{
        echo $studentDetail;
    }
}
?>
