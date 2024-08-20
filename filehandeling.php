
<?php
  if (isset($_POST['save'])) {
      
      $first_name = $_POST['first_name'];
      $middle_name = $_POST['middle_name'];
      $last_name = $_POST['last_name'];
      $contact = $_POST['contact'];
      $email = $_POST['email'];


      if (!empty($first_name) && !empty($last_name) && !empty($contact) && !empty($email)) {
          //
          $file = fopen("example.txt", "a+");
          // Write data to the file
          $txt = "First Name: $first_name\tMiddle Name: $middle_name\tLast Name: $last_name\tContact: $contact\tEmail: $email\n";
          fwrite($file, $txt);
          fclose($file);
      }
  }
  ?>