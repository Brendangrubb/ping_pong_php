<?php

    require_once 'src/PingPong.php';

    class PingPongTest extends PHPUnit_Framework_TestCase
    {
        function test_countNumbers()
        {
            $test_PingPong= new PingPong;
            $user_input= intval(2);

            $result= $test_PingPong->countNumbers($user_input);

            $this->assertEquals([1,2], $result);
        }

        function test_divisibleByThree()
        {
            $test_PingPong= new PingPong;
            $list_of_numbers= [1,2,3,4,5];

            $result= $test_PingPong->divisibleByThree($list_of_numbers);

            $this->assertEquals([1,2,'ping',4,5], $result);
        }

    }


 ?>
