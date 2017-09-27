<?php

  $obj = new main();
    $obj->array_functions();

    class main
        {   
	public function array_functions()		   
	{      
	    $cars = array("L" => "Lamborghini", "F" => "Ferrari", "B" =>
	    "Bentley, "P" => "Pagani");
	    arsort($cars);
	    foreach ($cars as $key =>val)
	  { print("$key = $val\n");	
	    }
	  
	  }
	  ?>

