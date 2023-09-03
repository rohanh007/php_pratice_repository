<?php 
     // 1] Global Scope : declared outside the funtion and accessed only outside the funtion.

            $num=10;
            function run(){
                echo "The value of variable inside the function are  $num \n"; //it shows error 
            }
            run();

            echo "The value of the variable outside the function are $num \n";

    // 2] Local Scope: declared inside the function and accessed only inside the function.

        function localscope(){
            $number=123;
            echo "The value of number inside the function $number \n";
        }
        localscope();
        echo "the value of the number outside the funtion $number \n"; // shows Undefined variable $number 



    //3] if we use global keyword before the variable inside the function you can access global variable inside function also.
      
        $num1=23;
        $num3=56;

        function add(){
            global $num1,$num3;
            $num1=$num1+$num3;
            echo "The value of num1 inside the function $num1 \n"; //not shows any error 
        }
        add();
        echo "The value of num1 outside the function $num1 \n "; //not shows any error 


    //4] Static keyword 

    function statictest()
    {
        static $x=0;
        echo "$x\n";
        $x++;
    }
    statictest();
    statictest();
    statictest();
?>