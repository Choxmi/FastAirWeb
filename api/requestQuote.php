<?php
$t = time();
$target_dir = "uploads/";
$host = "https://satlabs.xyz/api/";

$keys = array();
$links = array();

$counter = 0;
foreach ($_FILES as $key => $file) {
    $moved = move_uploaded_file($_FILES[$key]["tmp_name"], $target_dir . $t . "_" . $counter . "_" . basename($file["name"]));
    if ($moved) {
        $outp["upload" . $counter] = "Upload Successful";
        array_push($links, $host . $target_dir . $t . "_" . $counter . "_" . basename($file["name"]));
        array_push($keys, $key);
    } else {
        $outp["upload" . $counter] = "Upload Failed";
    }
    $counter++;
}


$outp['status'] = "200";
$outp['message'] = "Email sent";

// $to = "info@satlabs.xyz,skrone@fastair.com.au";
$to = "info@satlabs.xyz";
$subject = "New customer quote";

$message = "
<html>
<head>
<title>New Request from : " . $_POST['name'] . "</title>
<style>
    tr { display: block; float: left; }
    th, td { display: block; border: 1px solid black; }
    
    tr>*:not(:first-child) { border-top: 0; }
    tr:not(:first-child)>* { border-left:0; }
</style>
</head>
<body>
<h2>Client Details</h2>
<table>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>";

if ($_POST['address'] != "") {
    $message = $message . "<th>Address</th>";
}

if ($_POST['company'] != "") {
    $message = $message . "<th>Company</th>";
}

if ($_POST['fax'] != "") {
    $message = $message . "<th>Fax</th>";
}

if ($_POST['customer_code'] != "") {
    $message = $message . "<th>Customer Code</th>";
}

$message = $message . "</tr>
<tr>
<td>" . $_POST['name'] . "</td>
<td>" . $_POST['mobile'] . "</td>
<td>" . $_POST['email'] . "</td>";

if ($_POST['address'] != "") {
    $message = $message . "<td>" . $_POST['address'] . "</td>";
}

if ($_POST['company'] != "") {
    $message = $message . "<td>" . $_POST['company'] . "</td>";
}

if ($_POST['fax'] != "") {
    $message = $message . "<td>" . $_POST['fax'] . "</td>";
}

if ($_POST['customer_code'] != "") {
    $message = $message . "<td>" . $_POST['customer_code'] . "</td>";
}
$message = $message . "</tr>
</table>";
$message = $message . "<br/><h2>Item Details</h2>";
$items = json_decode($_POST['items']);
for ($i = 0; $i < count($items); $i++) {
    if (in_array("attachment_" . $i, $keys)) {
        $message = $message . "<div class='part-details'>
    <div class='part-header'><h5>Part - #" . $items[$i]->part . "</h5></div>
    <div class='part-row'>Quantity - " . $items[$i]->quantity . "</div>
    <div class='part-row'>Stock code - " . $items[$i]->stock . "</div>
    <div class='part-row'>Units - " . $items[$i]->units . "</div>
    <div class='part-row'>Description - " . $items[$i]->description . "</div>
    <div class='part-row'><a href='" . $links[$i] . "'>Attachment</a></div>
    </div></br>";
    } else {
        $message = $message . "<div class='part-details'>
    <div class='part-header'><h5>Part - #" . $items[$i]->part . "</h5></div>
    <div class='part-row'>Quantity - " . $items[$i]->quantity . "</div>
    <div class='part-row'>Stock code - " . $items[$i]->stock . "</div>
    <div class='part-row'>Units - " . $items[$i]->units . "</div>
    <div class='part-row'>Description - " . $items[$i]->description . "</div>
    </div></br>";
    }
}
$message = $message . "</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: FastAir Mails' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to, $subject, $message, $headers);

http_response_code(200);
header('Content-type: application/json');
$outJSON = json_encode($outp);
echo $outJSON;
return;
