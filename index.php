<?php

  $obj = new main();
    $obj->array_functions();
    $obj->string_functions();
    class main
        {   
	public function array_functions()		   
      	{   
	     print( "<h1>Array Functions</h1>  <br></br>");
                   
	//1.Asort
	   print("This is Arsort Function <br></br>");
	   
 $cars = array("L" => "Lamborghini", "F" => "Ferrari", "B" => "Bentley", "P" => "Pagani");
	    arsort($cars);
	    foreach($cars as $key =>$val)
	  { print("$key = $val\n");	
	    }
	  print('<hr>');
           
          //2.Pos
              print("This is Position Function <br></br>");
	    $countries = array("Brazil", "England", "Japan", "France");
	         // Get the current position
             echo pos($countries); // print Brazil
              echo '<br> </br>';
	          // Go to next position
	      echo next($countries); // print England
                print('<hr>');

           //3.Sizeof
                print("This is Size  Function <br></br>");
               $cars=array("Audi","BMW","Mercedes","Volkswagen","Ford","GM");
	       echo sizeof($cars);
                   print('<hr>');
              
             //4.End
	     print("This is End  Function <br></br>");
                $name=array("Likhit","Prince","Deep","Parag");
		echo end($name);
		print('<hr>');
               
              //5.Current
	      print("This is Curent Function <br></br>");
	       $name=array("Likhit","Prince","Deep","Parag");
	       echo current($name);
	         print('<hr>');
                    
	      //6.Reset
	      print("This is Reset Function <br></br>");
                  $name=array("Likhit","Prince","Deep","Parag");
		   echo reset($name);
		   print('<hr>');
               
	      //7.Each
	      print("This is Each Function <br></br>");
                   $name=array("Likhit","Prince","Deep","Parag");
		   print_r (each($name));
		   print('<hr>');

               
	     //8.Array_Search
             print("This is Array_Search Function <br></br>");
	     $animal=array("1"=>"cheetah","2"=>"lion","3"=>"tiger");
	     echo array_search("cheetah",$animal);
	     print('<hr>');
           
	     //9.List
             print("This is List Function <br></br>");
	     $subjects =array("WSD","SAD","UXD");
	     list($a, $b, $c) = $subjects;
	     echo "These are the 3 courses for Semester 1 i.e. $a, $b &  $c.";
	     print('<hr>');

     	     //10.Range
              print("This is Range Function <br></br>");
                $countingnumbers =range(0,50);
		 print_r ($countingnumbers);
		print('<hr>');
	  }
           
             public function string_functions()
	       {

	        print("<h1>String  Functions</h1> <br></br>");
                  

	       //1.SubStr
	         print("This is Sub-String Function <br></br>");
		 echo substr("My name is Parag",6);
                print('<hr>');

                //2.StrLength
		print("This is String Length Function <br></br>");
		echo strlen("LAMBORGHINI AVENTADOR");
		print('<hr>');
		 
                //3.StrRev
                 print("This is Reverse String Function <br></br>");
                 echo strrev("War Of Gods");
                  print('<hr>');
                   
		 //4.StrLower
                print("This is Lower String Function <br></br>");
                  echo strtolower("KOENIGSEGG REGERA");
		  print('<hr>');
                    
		   //5.StrRepeat
                     print("This is  String Repeat Function <br></br>");
		     echo str_repeat("WSD",10);
		     print('<hr>');

                 //6.UcFirst
                     print("This is  String ucfirst Function <br></br>");
	            echo ucfirst("rollsRoyce");
                    print('<hr>');
                  
		  //7.StrUpper
		  print("This is Upper String Function <br></br>");
                   echo strtoupper("dc avanti");
	           print('<hr>');
 
                  //8.StrShuffle
		  print("This is String Shuffle Function <br></br>");
		  echo str_shuffle("You Cannnot Understand This");
		  print('<hr>');
                  
		  //9.StrSplit
                     print("This is String Split <br></br>");
		     print_r(str_split("PARAG"));
		     print('<hr>');

		  //10.QuoteMeta
		  print("This is String QuoteMeta Function <br></br>");
                   $text= "WEB SYSTEMS DESIGN";
		   echo quotemeta($text);
		   print('<hr>');
		}

	  }
	  ?>

