<?php include '/core/init.php'?>
<?php include '/includes/overall/start.php';?>
<?php // include 'processmovie.php';?>



<?php
      if (empty($_POST) === false && empty($errors) === true) 
      {
          echo "!!!!";
  //  $username = $_POST['username'];

          $movie1 =$_POST['movie1'];
          $movie2 =$_POST['movie2'];
          $movie3 =$_POST['movie3'];
          $movie4 =$_POST['movie4'];
          $movie5 =$_POST['movie5'];
          $rating1=$_POST['rating1'];
          $rating2=$_POST['rating2'];
          $rating3=$_POST['rating3'];
          $rating4=$_POST['rating4'];
          $rating5=$_POST['rating5'];
        /*  echo $movie1;
          echo $rating1;
          echo $movie2;
          echo $rating2;
          echo $movie3;
          echo $rating3;
          echo $movie4;
          echo $rating4;
          echo $movie5;
          echo $rating5;
*/
      if (empty($movie1) === true || empty($movie2) === true || empty($movie3) === true || empty($movie4) === true) 
      {
        $errors[] ="You need to enter  atleast Four Favourite Movies.";
      }
      else
      if (empty($rating1) === true || empty($rating2) === true || empty($rating3) === true || empty($rating4) === true) 
      {
        $errors[] ="You need to rate atleast your Four Favourite Movies.";
      }
      
      else
      {
     echo '<br>'."UPDATE `user_record` SET `rating1`=`$rating1`,`rating2`=`$rating2`,`rating3`=`$rating3`,`rating4`=`$rating4`,`rating5`=`$rating5` WHERE `user_id`=3";
//     echo  "INSERT INTO `user_record` (movie1,movie2,movie3,movie4,movie5,rating1,rating2,rating3,rating4,rating5) VALUES ($movie1,$movie2,$movie3,$movie3,$movie4,$movie5,$rating1,$rating2,$rating3,$rating4,$rating5) WHERE `user_id`=$user_data[user_id]";
      mysql_query(" UPDATE `user_record` SET `rating1`=`$rating1`,`rating2`=`$rating2`,`rating3`=`$rating3`,`rating4`=`$rating4`,`rating5`=`$rating5` WHERE `user_id`=3");

      }

        
  
    } 
//            header('Location: fav.php');
?>





<h1><center>Enter Your Five Favourite Movies</center></h1>

<div id="favmovies">
    <table width="660" height="360" border="0" align="center" cellpadding="5" cellspacing="2">
      <form  method="post" action="">
      <tr>  
        <th width="100" align="left" valign="baseline" scope="row">
          <label for="name"> 1st Movie *</label>
        </th>
        <td width="170"><input type="text" name="movie1" id="movie1" />
        </td>
        <td width="390">      
<fieldset class="rating">
            <legend>Please rate:</legend>
            <input type="radio" id="star5" name="rating1" value="5" /><label for="star5" title="Rocks!">5 stars</label>
            <input type="radio" id="star4" name="rating1" value="4" /><label for="star4" title="Pretty good">4 stars</label>
            <input type="radio" id="star3" name="rating1" value="3" /><label for="star3" title="Meh">3 stars</label>
            <input type="radio" id="star2" name="rating1" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
            <input type="radio" id="star1" name="rating1" value="1" /><label for="star1" title="Sucks big time">1 star</label>
        </fieldset>
        </td>
      </tr>
      <tr>  
        <th width="133" align="left" valign="baseline" scope="row">
          <label for="name">2nd Movie*</label>
        </th>
        <td width="174"><input type="text" name="movie2" id="movie2" /></td>
        <td width="390">
        <fieldset class="rating">
            <legend>Please rate:</legend>
            <input type="radio" id="star10" name="rating2" value="5" /><label for="star10" title="Rocks!">5 stars</label>
            <input type="radio" id="star9" name="rating2" value="4" /><label for="star9" title="Pretty good">4 stars</label>
            <input type="radio" id="star8" name="rating2" value="3" /><label for="star8" title="Meh">3 stars</label>
            <input type="radio" id="star7" name="rating2" value="2" /><label for="star7" title="Kinda bad">2 stars</label>
        <input type="radio" id="star6" name="rating2" value="1" /><label for="star6" title="Sucks big time">1 star</label>        </fieldset>

        </td>
      </tr>
      <tr>
       <th width="133" align="left" valign="baseline" scope="row">
          <label for="name">3rd Movie*</label>
        </th>
        <td width="174"><input type="text" name="movie3" id="movie3" /></td>
        <td width="390">
<fieldset class="rating">
            <legend>Please rate:</legend>
            <input type="radio" id="star15" name="rating3" value="5" /><label for="star15" title="Rocks!">5 stars</label>
            <input type="radio" id="star14" name="rating3" value="4" /><label for="star14" title="Pretty good">4 stars</label>
            <input type="radio" id="star13" name="rating3" value="3" /><label for="star13" title="Meh">3 stars</label>
            <input type="radio" id="star12" name="rating3" value="2" /><label for="star12" title="Kinda bad">2 stars</label>
            <input type="radio" id="star11" name="rating3" value="1" /><label for="sstar11" title="Sucks big time">1 star</label>
        </fieldset>

        </td>
      </tr>
      <tr>
        <th align="left" scope="row">
          <label for="name">4th Movie *</label>
        </th>
        <td><input type="text" name="movie4"  id="movie4" /></td>
        <td>
      <fieldset class="rating">
            <legend>Please rate:</legend>
            <input type="radio" id="star20" name="rating4" value="5" /><label for="star20" title="Rocks!">5 stars</label>
            <input type="radio" id="star19" name="rating4" value="4" /><label for="star19" title="Pretty good">4 stars</label>
            <input type="radio" id="star18" name="rating4" value="3" /><label for="star18" title="Meh">3 stars</label>
            <input type="radio" id="star17" name="rating4" value="2" /><label for="star17" title="Kinda bad">2 stars</label>
            <input type="radio" id="star16" name="rating4" value="1" /><label for="star16" title="Sucks big time">1 star</label>
        </fieldset>


      </td>
      </tr>
	  <tr>
        <th align="left" scope="row">
          <label for="name">5th Movie *</label>
        </th>
        <td><input type="text" name="movie5"  id="movie5" /></td>
        <td>
          <fieldset class="rating">
            <legend>Please rate:</legend>
            <input type="radio" id="star25" name="rating5" value="5" /><label for="star25" title="Rocks!">5 stars</label>
            <input type="radio" id="star24" name="rating5" value="4" /><label for="star24" title="Pretty good">4 stars</label>
            <input type="radio" id="star23" name="rating5" value="3" /><label for="star23" title="Meh">3 stars</label>
            <input type="radio" id="star22" name="rating5" value="2" /><label for="star22" title="Kinda bad">2 stars</label>
            <input type="radio" id="star21" name="rating5" value="1" /><label for="star21" title="Sucks big time">1 star</label>
        </fieldset>
        </td>
      </tr>
      
      <tr>
        <th colspan="3" scope="row">
          <input name="movies" type="submit" value="Tell Us" />
        </th>
      </tr>
      </form>
    </table>
    <p>&nbsp;</p>
  </div>






<?php include '/includes/overall/end.php';?>
