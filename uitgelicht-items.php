
<?php

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "cultuurgebouw") or die (mysql_error());

$sqlquery = 'SELECT * FROM program_items';

$result = mysqli_query($con, $sqlquery); 

while($row = mysqli_fetch_array($result))
{

  echo '
  <a href="uitgelicht-detail.php" class="uitgelicht-item">
  <div class="image init">
      <img src="'.$row['image']." ".'" alt=""/>
      <div class="hover-overlay"></div>
  </div>
  <h2>'.$row['title']." ".'</h2>
  <p>'.$row['description']." ".'</p>
  <div class="info">
      <button data-href="'.$row['url']." ".'" class="btn btn--white right">bekijk meer</button>
      <div class="date-time">
          <span class="date"><i class="svg-icon" data-icon="icon-date" data-fill="#ffffff"></i>'.$row['start_date']." ".'</span>
      </div>
  </div>
  </a>';

}

mysqli_free_result($result);
mysqli_close($con); 


?>