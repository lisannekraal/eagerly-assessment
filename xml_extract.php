<?php

$url ="https://www.kunstmin.nl/feed/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);

$data = curl_exec ($ch); //curl request execution
curl_close($ch);

$xml = simplexml_load_string($data);

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "cultuurgebouw") or die (mysql_error());

foreach ($xml -> program_item as $row) {

    $id = $row -> tm_event_id;
    $title = $row -> title;
    $description = $row -> short_description;
    $start_date = $row -> start_date_time;
    $url = $row -> program_url;
    $images = $row -> xpath('images/image_size[@id="detail-header"]');
    if ($images) {
        $image = $images[0];
    } else {
        $image = "image1.jpg";
    }

    $sqlquery = "INSERT INTO program_items (id, title, description, start_date, url, image) VALUES ('$id', '$title', '$description', '$start_date', '$url', '$image')";
    
    $result = mysqli_query($con, $sqlquery);
    if (!$result) {
        echo '<br><br>';
        echo mysqli_error($con); 
            //current errors: no event-id, not escaping characters
    } else {
        echo "Success";
    }
}
?>



