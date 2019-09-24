<?php   
//if (isset($_POST['submit'])) {
$radioVal = $_POST['r1'];
//if(isset($_POST['r1']))
if($radioVal=="factorial")	
{  
   $num = $_POST['number'];  
   $factorial = 1;  
   for ($x=$num; $x>=1; $x--)   
    {  
      $factorial = $factorial * $x;  
    }  
   echo "Factorial of $num is $factorial";  
} elseif($radioVal=="Prime")
{  
    $num=$_POST['number'];  
    for ($i = 2; $i <= $num-1; $i++) 
        {  
      if ($num % $i == 0) 
            {  
      $value= True;  
      }  
} 
if (isset($value) && $value) {  
     echo "The Number ". $num . " is not prime";  
}  else {  
   echo "The Number ". $num . " is prime";  
   }   
} 
elseif ($radioVal=="SumOfDigits")
{
$num=$_POST['number'];
$sum=0; 
$rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
 echo "Sum of digits is". $sum;   
}

?> 