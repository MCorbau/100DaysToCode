<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    .error{
      color: #FF0000;
    }
    </style>
    <title>test form</title>
  </head>
  <body>

    <?php
// define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";
        $nameErr = $emailErr = $genderErr = $websiteErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])){
            $nameErr = "The name is needed to complete the form";
          }
          else{
            $nameTest = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
            }
            else{
              $name = $nameTest;
            }
          }
          if (empty($_POST["email"])){
            $emailErr = "The email is needed to complete the form";
          }
          else{
            $emailTest = test_input($_POST["email"]);
            if (!filter_var($emailTest,FILTER_VALIDATE_EMAIL)){
              $emailErr = "A correct email adress is necessary";
            }
            else{
              $email = $emailTest;
            }
          }
          if (empty($_POST["website"])){
            $website = '';
          }
          else{
            $websiteTest = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
              $websiteErr = "Not a correct URL";
            }
            else{
              $website = $websiteTest;
            }
          }
          if (empty($_POST["comment"])){
            $comment = "";
          }
          else{
            $comment = test_input($_POST["comment"]);
          }
          if (empty($_POST["gender"])){
            $genderErr = "The gender is needed to complete the form";
          }
          else{
            $gender = test_input($_POST["gender"]);
          }
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      Name: <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      E-mail: <input type="text" name="email">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Website: <input type="text" name="website">
      <br><br>
      Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
      <br><br>
      Gender:
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="female") echo "checked";?>
      value="female">Female
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="male") echo "checked";?>
      value="male">Male
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="other") echo "checked";?>
      value="other">Other
      <span class="error">* <?php echo $genderErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo "result is: <br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    if ($name !="" or $email!="" or $gender !="" or $comment!="" or $website!=""){
      echo "<br>I hope I got everything correct :)";
    }
    ?>
  </body>
</html>
