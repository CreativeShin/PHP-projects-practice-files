<?php
 // $newVar = "<h1>Hello</h1>";
 // print $newVar;
 // echo (returns nothing and faster) //print (returns 1)
 // comments  // /* */ #
 #VARIABLES
 /*
  - prefix $
  - start with letter or _
  - case sensitive
 */

 // Strings, Integers, Floats, Boolean, null
 // concatonation (.)
 // $string1 = "PHP";
 // $string2 = "Works!";
 // $res = $string1." ".$string2;
 // echo $res;
 //  "" can parse VARIABLES

#ARRAYS

 // echo "<br>$string1 $string2 / double quotes.";
 // $newArray = array('Hola', 'Konnichiwa', 'Halo', 'Hello');
 // $fruits = ['apple', 'banana', 'peach', 'pineapple', 'blueberries','black plums'];
 // $fruits[] = "<b>Mango</b>"; //7
 // $fruits[] = 45;
 // echo count($fruits); //returns length of an array
 // print_r($fruits);
 // var_dump($fruits);

 #ASSOCIATIVE ARRAYS

 // $people = array("Brad" => "25", "Max" => "22");
 // // echo $people["Max"];
 // $people["Chloe"] = 22;
 // print_r($people);

 #MULTI-DIMENSIONAL
 //
 // $items = array(
 //   array('fruits', '20'),
 //   array('veggies', '25')
 // );
 //
 // echo $items[1][0];

 #LOOPS

// for($i=1; $i<=10; $i++){
//   echo $i."<br>";
// }
//
//----
//
// $i = 1;
// while($i<=10){
//   echo $i;
//   echo "<br>";
//   $i++;
// }
//
// ----
//
// echo "do...while<br>";
// $i = 1;
// do{
//   echo $i;
//   echo "<br>";
//   $i++;
// }while($i<=10)
//
// ----
//
  // $people = array("Brad", "Jose", "William");
  // foreach($people as $person){
  //   echo $person;
  //   echo "<br>";
  // }
  //
  // $people = array(
  //       "Brad" => "brad@gmail.com",
  //      "Jose" => "jose@yachoo.com",
  //       "William" => "william@outlook.com"
  // );
  // foreach($people as $person => $email){
  //   echo $person." - ".$email;
  //   echo "<br>";
  // }

  #FUNCTIONS
  // $sth = 5;
  // function addsth($a){
  //   $a += 10;
  //   return $a;
  // }
  //
  // echo addsth($sth);
  // echo "<br>".$sth;
  // ------------ Reference -------------//
  // $sth = 5;
  // function addsth(&$a){
  //   $a += 10;
  //   return $a;
  // }
  //
  // echo addsth($sth);
  // echo "<br>".$sth;

?>
