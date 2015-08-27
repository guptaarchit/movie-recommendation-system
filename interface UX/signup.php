  <?php

  if (empty($_POST) === false) {
//    echo "submitted!!";
    $required_fields = array('fname','username','email','password','verifypassword','gender');
    //echo '<pre>',print_r($_POST), '</pre>';
    foreach ($_POST as $key => $value) 
    {
      if (empty($value) && in_array($key, $required_fields) === true) 
      {
        $errors[]='Fields marked with an asterisk are required Fields';
        break 1;
      }
    }
  
  if(empty($errors) === true)
  {
    if (user_exists($_POST['username']) === true) {
      $errors[]='Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
    }
    if (preg_match("/\\s/", $_POST['username']) == true) {
      $errors[]='Your username must not contain any space.';

    }
    if (strlen($_POST['password']) < 6) {
      $errors[]='Your password is too short (atleast 6 character) ';
    }
    if ($_POST['password'] !== $_POST['verifypassword']) {
      $errors[]='Your password do not match';
    }
    if (filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL )===false) {
      $errors[]='A valid email address is required';
    }
    if (email_exists($_POST['email'])===true) {
      # code...
      $errors[]='Sorry, the email \'' . $_POST['email'] . '\' is already registered.';

    }

  }
}
//  print_r($errors);
?>

<h1><center>Registration Page</center></h1>

<?php

if (isset($_GET['success']) && empty($_GET['success'])) {
  # code...
  echo "You \'ve been registered successfully!!'";
}
else
{
      if (empty($_POST) === false && empty($errors) === true) {
        $register_data =array(
            'fname' =>    $_POST['fname'],
            'lname' =>    $_POST['lname'],
            'username' => $_POST['username'],
            'email' =>    $_POST['email'],
            'gender' =>   $_POST['gender'],
            'area' =>     $_POST['area'],
            'age' =>      $_POST['age'],
            'password' => $_POST['password'],

          );
          //print_r($register_data);

          register_user($register_data);
//          $muser=$_POST['username'],
          header('Location: login_new.php');
          exit();
      }
      else if (empty($errors)===false) {
        echo output_errors($errors);
      }
}
?>

  <div id="signup">
    <table width="513" height="389" border="0" align="center" cellpadding="5" cellspacing="2">
      <form  method="post" action="">
      <tr>  
        <th width="123" align="left" valign="baseline" scope="row">
          <label for="name">First Name *</label>
        </th>
        <td width="232"><input type="text" name="fname"  /></td>
      </tr>
      <tr>  
        <th width="123" align="left" valign="baseline" scope="row">
          <label for="name">Last Name</label>
        </th>
        <td width="232"><input type="text" name="lname"  /></td>
      </tr>
      <tr>
      <tr>  
        <th width="123" align="left" valign="baseline" scope="row">
          <label for="name">Username *</label>
        </th>
        <td width="232"><input type="text" name="username"  /></td>
      </tr>
      <tr>
        <th align="left" scope="row">
          <label for="email">Email Address *</label>
        </th>
        <td><input type="text" name="email"  /></td>
      </tr>
      <tr>
        <th align="left" scope="row">
          <label for="password">Password *</label>
        </th>
        <td><input type="password" name="password"  /></td>
      </tr>
      <tr>
        <th align="left" scope="row">          
          <label for="verifypassword">Password Again *</label>
        </th>
        <td><input type="password" name="verifypassword"  /></td>
      </tr>
     
      <tr>
        <th align="left" scope="row">
          <label for="gender">Gender  (M/F) *</label>
        </th>
        <td><input type="text" name="gender"  /></td>
      </tr>
      <tr>
        <th align="left" scope="row">
          <label for="area">Area Code</label>
        </th>
        <td><input type="text" name="area" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">
          <label for="age">Age</label>
        </th>
        <td><input type="text" name="age"  /></td>
      </tr>
      <tr>
        <th colspan="2" scope="row">
          <input name="signup" type="submit" value="Sign up" />
        </th>
      </tr>
      </form>
    </table>
    <p>&nbsp;</p>
  </div>