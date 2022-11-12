
<?php
$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, "http://parthsaraiya.tech/api.php");
curl_setopt($curl_handle, CURLOPT_HEADER, 0);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
$contents = curl_exec($curl_handle);

curl_close($curl_handle);

foreach (explode(",",$contents) as $content) {
    echo $content."<br/>";
}

 ?>