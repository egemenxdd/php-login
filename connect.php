<?php

function Connect()
{
  $data = new mysqli('localhost' 'root' 'Your MySQL Password' ' Your MySQL Database');
  
  return $data
}
