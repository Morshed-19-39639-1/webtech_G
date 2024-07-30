<?php
	
	

function rect_area($length = 10, $width = 6) 
{
	echo "<br/>"."1."."<br/>";
    $area = $length * $width;
    $perimeter =2*($length+$width);

    echo "<br />" . "Area Of Rectangle with length " . $length . " & width " . $width . " is : " . $area ."<br />";

    echo "Perimeter Of Rectangle with length " . $length . " & width " . $width . " is :" . $perimeter . "<br />" ;

}



function calc_VAT($vat = 15, $price= 500)
{
	echo "<br/>"."2."."<br/>";
	$totalVat=($price/100) *$vat;
	$totalPrice = $totalVat + $price;

	echo "<br />" ."Calculating Vat " . "<br />" ."Vat is " . $vat . "% and Without Vat price is " . $price . "<br />" ." Final Price is : "  . $totalPrice . "<br />";

}


function evenOdd($number)
{
	echo "<br/>"."3."."<br/>";
	echo "<br/>".$number." is";

   if($number % 2 == 0){
        echo "<br/>". "Even" . "<br/>"; 
    }
    else{
        echo "<br/>"."Odd" . "<br/>";
    }


}


function findLargest($x, $y, $z) {
 	
		echo "<br/>"."4."."<br/>";
 	    $max = $x;

  		if ($x >= $y && $x >= $z)
  			{
  				$max = $x;
 			}
    
 		if ($y >= $x && $y >= $z)
 		 {
  				 $max = $y;
 		 }
   
  		if ($z >= $x && $z >= $y)
 		 {
  	 			$max = $z;
 		 }
   
  
  echo "<br/>"." Largest number among $x, $y and $z is: $max\n"."<br/>";
}

function printNum($num=10)
{
	echo "<br/>"."5."."<br/>";

	echo "<br/>"."Printing Odd Numbers Between 10 to 100---"."<br/>";
     while ( $num <= 100 ) 
     {
     echo "$num\n";
     $num += 2;
	 }


}

function arrySearch()
{

echo "<br/>"."<br/>"."6."."<br/>";
$a=array("a"=>"MORSHED","b"=>20,"c"=>"TANVIR");
echo "<br/>"."Found in :";
echo array_search("MORSHED",$a,true);
echo "<br/>"."Found in :";
echo array_search("TANVIR",$a,true);

}


// function called.
//1
rect_area(); 

//2
calc_VAT();

//3
evenOdd(50);

//4
findLargest(50, 40, 30);

//5
printNum();

//6
arrySearch();

?>
