<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filehandeling</title>
    <style>
      .maindiv {
        background-color: bisque;
        height: auto;
        width: 1540px;
        align-items: normal;
        margin: auto;
        padding: 10px;
        margin-right: 50%;
        border-radius: 8px;
      }
      .submit {
        background-color: blue;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
      }
      .submit:hover {
        background-color: darkblue;
        
      }
    </style>
    <script>
        function showAlert() {
            alert("Form submitted successfully!");
        }
    </script>
</head>
<body>
<?php include 'navbar.html'; ?>

  <form action="filehandeling.php" method="post" onsubmit="showAlert()">

    <div class="maindiv">
      <div>
        <label for="firstName">First Name:</label>
        <input required type="text" name="first_name" id="firstName" placeholder="Enter your first name"><br><br>

        <label for="middleName">Middle Name:</label>
        <input type="text" name="middle_name" id="middleName" placeholder="Enter your middle name"><br><br>

        <label for="lastName">Last Name:</label>
        <input required type="text" name="last_name" id="lastName" placeholder="Enter your last name"><br><br>

        <label for="contact">Contact No:</label>
        <input required type="number" name="contact" id="contact" placeholder="Enter your contact"><br><br>

        <label for="email">Email:</label>
        <input required type="email" name="email" id="email" placeholder="Enter your email"><br><br>

        <button name="save" type="submit" class="submit">Submit</button>
    </div>
    </div>
  </form>

</body>
</html>
