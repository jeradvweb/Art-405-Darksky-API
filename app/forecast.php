<?php

  // call the weather api, pass the lat_lng_array
  $wather = 'https://api.darksky.net/forecast/'.$key.'/64.5011,-165.4064/?exclude=minutely?exclude=hourly';

  // get the data for the forcast
  $forecast = json_decode(file_get_contents($wather), true);

  // Feels Like
  $temp * $forecast['currently']['temperature'];

  if($temp < 50){
   $feels = 'It\'s cold outside.';
  } else {
  	$feels = 'It\'s nice outside.';
  }