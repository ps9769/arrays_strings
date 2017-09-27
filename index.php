<?php

     $obj = new main();

     $text = "my text";
     $obj->printthis($text);

     

      public function printthis($text)
      {
          echo '<h1>print function demo </h1>';
	    print($text);
             echo '<hr>';
	     }

