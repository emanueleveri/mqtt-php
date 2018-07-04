<?php
  require 'MQTT-PHP.php';
  $array=array("Hi","I","Am","A","Developer","How","Are","You","?");
  $server = "broker.hivemq.com";
  $port = 1883;
  $username = "";
  $password = "";
  $client_id = "i'memanueleveri"; 
  $mqtt = new phpMQTT($server, $port, $client_id);
  if ($mqtt->connect(true, NULL, $username, $password)) {
      for($i=0; $i<9; $i++)
      {
        $mqtt->publish("emanuele/prova", "Message :-> " . $array[$i], 0);
      }
	    $mqtt->close();
    } else {
      echo "Time out!\n";
    }
 ?>
