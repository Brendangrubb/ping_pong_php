<?php
    class PingPong
    {
        function countNumbers($user_input)
        {
            $user_input = intval($user_input);
            $list_of_numbers = array();
            $count_from_one = 1;

            while ($user_input >= $count_from_one) {
                array_push($list_of_numbers, $count_from_one);
                ++ $count_from_one;
            }

            return $list_of_numbers;
        }

        function divisibleByThree($list_of_numbers)

        {
            foreach ($list_of_numbers as &$number) {
                if ($number % 3 == 0) {
                    $number = 'ping';
                }

             }
            return $list_of_numbers;
        }
    }




?>
