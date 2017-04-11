<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>
</head>
<body>
    <?php
    $name = '';
    $password = '';
    $comments = '';
    $gender = '';
    $tc = '';
    $color = '';
    $languages = array();
    if (isset($_POST['submit'])) {
        $ok = true;
        if (!isset($_POST['name'])|| $_POST['name']=== '') {
            $ok = false;
        } else {
            $name = $_POST['name'];
        }
        if (!isset($_POST['password'])|| $_POST['password']=== '') {
            $ok = false;
        } else {
            $password = $_POST['password'];
        }
         if (!isset($_POST['comments'])|| $_POST['comments']=== '') {
            $ok = false;
        } else {
            $comments = $_POST['comments'];
        }
         if (!isset($_POST['gender'])|| $_POST['gender']=== '') {
            $ok = false;
        } else {
            $gender = $_POST['gender'];
        }
         if (!isset($_POST['tc'])|| $_POST['tc']=== '') {
            $ok = false;
        }  else {
            $tc = $_POST['tc'];
        }
         if (!isset($_POST['color'])|| $_POST['color']=== '') {
            $ok = false;
        }  else {
            $color = $_POST['color'];
        }
         if (!isset($_POST['languages'])|| !is_array($_POST['languages'])
         || count($_POST['languages'])===0) {
            $ok = false;
        }  else {
            $languages = $_POST['langauges'];
        }
        if ($ok) {
        printf('Username: %s
        <br>Password: %s
        <br>Gender: %s
        <br>Color: %s
        <br>Language(s): %s
        <br>Comments: %s
        <br>T&amp;C: %s',
        htmlspecialchars($_POST['name']),
        htmlspecialchars($_POST['password']),
        htmlspecialchars($_POST['gender']),
        htmlspecialchars($_POST['color']),
        htmlspecialchars(implode(' ',$_POST['languages'])),
        htmlspecialchars($_POST['comments']),
        htmlspecialchars($_POST['tc']));
    }
    }
    
    
    ?>
    <form method="post" action="">
  Username: <input type="text" name="name" value="<?php
  echo htmlspecialchars($name);
  ?>"><br>
  Password: <input type="password" name="password" value="<?php
    echo htmlspecialchars($password);
  ?>"><br>
  Gender:   <input type="radio" name="gender" value="f">female
            <input type="radio" name="gender" value="m">male<br>
  Favorite Color:
            <select name="color">
                <option value="">Please Select</option>
                <option value="#f00">Red</option>
                <option value="#0f0">Green</option>
                <option value="#00f">Blue</option>
            </select><br>
  Languages Spoken:
            <select name="languages[]" multiple size="3">
                <option value="en">English</option>
                <option value="fr">French</option>
                <option value="it">Italian</option>
            </select><br>
  Comments: <textarea name="comments" value="<?php 
    echo htmlspecialchars($comments);
  ?>"></textarea><br>
        <input type="checkbox" name="tc" value="ok"<?php 
            if ($tc === 'ok'){
                echo checked;
            }
        ?>>I accept the T&C<br>
        <input type="submit" name="submit" value="submit"/>
    </form>
</body>
</html>