<?php
  // file paths functions

  #basename() //returns base file name

    $path = 'dir/newFolder/file.php';
    $file = 'file1.txt';
    // echo basename($path);

    // return file name without extension
    // echo basename($path, '.php');

  #dirname() // return directory name from the path

      // echo dirname($path);
  #file_exists() //can be used for a folder as well
      // echo file_exists($file);

  #realpath() returns //absolute path
      // echo realpath($file);

  #is_file() //checks if it is a file
      // echo is_file($file);

  #is_writable()
      // echo is_writable($file);

  #is_readable()
      // echo is_readable($file);

  #filesize() //in bytes
      // echo filesize($file);

  #mkdir() //makes a Directory
      // mkdir('testing');

  #rmdir() //removes a directory if empty
      // rmdir('testing');

  #copy(file1, file2)
      // copy($file, 'file2.txt');

  #rename(file1, file2)
      // rename('file2.txt', 'myfile.txt');

  #unlink() //deletes a file
      // unlink('myfile.txt');

  #file_get_contents(fileName) //returns a string with the file content // parses html
      // echo file_get_contents($file);

  #file_put_contents(fileName, string) //writes to the file //returns filesize
        // echo file_put_contents($file, "Hola!");

  # without replacing
  //  $current = file_get_contents($file);
  //  $current.= ' Howdy?';
  //  file_put_contents($file, $current);
  //  echo file_get_contents($file);

  #fopen and fread
  /*
  $handle = fopen($file, 'r');
  $data = fread($handle, filesize($file));
  echo $data;
  */

  #fopen and fwrite
  /*
  $handle = fopen('file2.txt', 'w');
  $text = "John\n";
  fwrite($handle, $text);
  $text = "Steve\n";
  fwrite($handle, $text);
  fclose($handle);

  echo file_get_contents('file2.txt');
  */
?>
