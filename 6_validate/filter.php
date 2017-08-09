<?php include_once 'head.php' ?>
<?php

# FUNCTIONS
 # filter_has_var(INPUT_POST or INPUT_GET, name) // if it exists
 # filter_input(INPUT_POST or INPUT_GET, name, validation) //validates
 # filter_var(variable, validation or sanitize) // validates or sanitizes

// ------------------- filter_has_var ------------------//

  // check for some posted data
  // if(filter_has_var(INPUT_POST, 'data')){
  //   echo 'DATA found.';
  // }else{
  //   echo 'no DATA.';
  // }

// .................... SANITIZE ....................//

// FILTER_SANITIZE_EMAIL
// FILTER_SANITIZE_ENCODED
// FILTER_SANITIZE_MAGIC_QUOTES
// FILTER_SANITIZE_NUMBER_FLOAT
// FILTER_SANITIZE_NUMBER_INT
// FILTER_SANITIZE_SPECIAL_CHARS
// FILTER_SANITIZE_FULL_SPECIAL_CHARS
// FILTER_SANITIZE_STRING
// FILTER_SANITIZE_STRIPPED
// FILTER_SANITIZE_URL
// FILTER_UNSAFE_RAW

// .................... FILTER...................

// FILTER_VALIDATE_BOOLEAN
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_FLOAT
// FILTER_VALIDATE_INT
// FILTER_VALIDATE_IP
// FILTER_VALIDATE_MAC
// FILTER_VALIDATE_REGEXP
// FILTER_VALIDATE_URL
// ----------------------------------------//

// //////////////////////////// filter_var() //////////////////////////////

  // if(filter_has_var(INPUT_POST, 'data')){
  //   $email = $_POST['data'];
  //   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  //   echo $email."<br>";
  //   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
  //     echo 'format is correct';
  //   }else{
  //     echo 'incorrect format';
  //   }
  // }

 ##### filter_input_array(INPUT_POST or INPUT__GET, $filterArray)
// ..........................................................//
 //  $filters = array(
 //      'data1' => FILTER_SANITIZE_NUMBER_INT, //FILTER_VALIDATE_INT works too
 //      'data2' => array(
 //        'filter'=> FILTER_VALIDATE_EMAIL,
 //        'options' => array(
 //            'min_range' => 1,
 //            'max_range' => 20
 //        )
 //      )
 //  );
 //
 // print_r(filter_input_array(INPUT_POST, $filters));

 ########################## filter_var_array($namesArray, $filters)###########################
 // Does NOT need any requests in this particular example.

//  $arr = array(
//    'name' => 'brad',
//    'email' => 'brad@brad.com',
//    'age' => '32'
//  );
//
// $filters= array(
//   'name' => array(
//       'filter' => FILTER_CALLBACK,
//       'options' => 'ucwords'
//   ),
//   'email' => array(
//       'filter' => FILTER_VALIDATE_EMAIL,
//       'options' => array(
//         'min_range' => 1,
//         'max_range' => 20
//       )
//   ),
//   'age' => FILTER_VALIDATE_INT
// );
//
// print_r(filter_var_array($arr, $filters));

#############################################################################################


 ?>

 <!-- /////////////////////////////// FORM DATA /////////////////////////////////// -->


     <!-- $_SERVER['PHP_SELF'] ==> neater way to say the same page. -->


      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <!-- filter_has_var(), filter_input(), filter_var() -->
    <!-- .............................................. -->
          <!-- <input type="text" name="data">
          <button type="submit" name="button">Submit</button> -->


      <!-- filter_input_array() -->
      <!-- .................... -->

          <!-- <input type="text" name="data1" placeholder="number sanitization">
          <input type="text" name="data2" placeholder="email validate 1-20">
          <button type="submit" name="button">Submit</button> -->

      </form>

<?php include_once 'foot.php' ?>
