<?php
    header('Content-Type: application/json');
    $regObj = new stdClass();
    $input = file_get_contents('php://input');
    $req = json_decode($input);
    
    $outp = Array();
    
    $outp['status'] = "200";
    $outp['message'] = "Email sent";
    
    $to = "info@satlabs.xyz,skrone@fastair.com.au";
    $subject = "New customer quote";
    
    $message = "
    <html>
    <head>
    <title>New Request from : ".$req->name."</title>
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
    
    if($req->address != ""){
        $message = $message."<th>Address</th>";
    }
    
    if($req->company != ""){
        $message = $message."<th>Company</th>";
    }
    
    if($req->fax != ""){
        $message = $message."<th>Fax</th>";
    }
    
    if($req->customer_code != ""){
        $message = $message."<th>Customer Code</th>";
    }
    
    $message = $message ."</tr>
    <tr>
    <td>".$req->name."</td>
    <td>".$req->mobile."</td>
    <td>".$req->email."</td>";
    
    if($req->address != ""){
        $message = $message."<td>".$req->address."</td>";
    }
    
    if($req->company != ""){
        $message = $message."<td>".$req->company."</td>";
    }
    
    if($req->fax != ""){
        $message = $message."<td>".$req->fax."</td>";
    }
    
    if($req->customer_code != ""){
        $message = $message."<td>".$req->customer_code."</td>";
    }
    $message = $message."</tr>
    </table>";
    $message = $message."<br/><h2>Item Details</h2>";
    $items = json_decode($req->items);
    for($i = 0; $i < count($items); $i++) {
        $message = $message."<div class='part-details'>
        <div class='part-header'><h5>Part - #".$items[$i]->part."</h5></div>
        <div class='part-row'>Quantity - ".$items[$i]->quantity."</div>
        <div class='part-row'>Stock code - ".$items[$i]->stock."</div>
        <div class='part-row'>Units - ".$items[$i]->units."</div>
        <div class='part-row'>Description - ".$items[$i]->description."</div>
        </div></br>";
    }
    $message = $message."</body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: FastAir Mails' . "\r\n";
    // $headers .= 'Cc: myboss@example.com' . "\r\n";
    
    mail($to,$subject,$message,$headers);
    
    http_response_code(200);
    header('Content-type: application/json');
    $outJSON = json_encode($outp);
    echo $outJSON;
    return;
?>