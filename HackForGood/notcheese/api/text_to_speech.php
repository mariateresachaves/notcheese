<?php

	$username = "782a3710-8d60-4520-8efa-74a877642a29";
    $password = "o7oLkLKFXb0K";
    $url = "https://stream.watsonplatform.net/text-to-speech/api/v1/synthesize?voice=pt-BR_IsabelaVoice";
    
    $headers = array("Content-Type: application/json",
                     "Accept: audio/wav",
                     );
                     
    $data = array("text" => $_GET["text"]);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $executed = curl_exec($ch);
    curl_close($ch);
    
    $file = fopen("../sounds/file01.wav", "w+");
    
    fwrite($file, $executed);
    
    fclose($file);
   
    $s = "<embed src =\"../sounds/file01.wav\" hidden=\"true\" autostart=\"true\"></embed>";
	
	echo json_encode($s);

?>