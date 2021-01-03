<?php
  $class = [
              [
                  'name' => 'Michele',
                  'lastname' => 'Rossi',
                  'votes' => [10, 5, 6, 7, 6]
              ],
              [
                  'name' => 'Fabio',
                  'lastname' => 'Bianchi',
                  'votes' => [5, 4, 6, 3, 7]
              ],
              [
                  'name' => 'Francesco',
                  'lastname' => 'Neri',
                  'votes' => [4, 3, 7, 8, 6]
              ],
              [
                  'name' => 'Lorenzo',
                  'lastname' => 'Verdi',
                  'votes' => [6, 7, 5, 9, 10]
              ]
      ];
      foreach($class as $students => $data){
            foreach($data as $key => $element){
                    if($key == "votes"){
                        $average = array_sum($element)/count($element);
                        echo "media = " . $average . "<br>";
                    }else{
                        echo $element . "<br>";
                    }

            }

    }
?>