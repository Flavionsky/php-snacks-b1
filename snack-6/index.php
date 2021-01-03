<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    
    foreach($db as $elements => $data){
        if($elements == "teachers"){
            foreach($data as $k => $element){
                    foreach($element as $key => $value){
                        echo '<h1 style="width: 150px; background-color: grey;">'. $value . "</h1>";
                    }  
            }
        }else {
            foreach($data as $k => $element){
                foreach($element as $key => $value){
                    echo '<h1 style="width: 150px; background-color: green;">'. $value . "</h1>";
                }  
        }
        }
    }
 
?>