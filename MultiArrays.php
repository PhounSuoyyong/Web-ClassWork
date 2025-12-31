<?php  
    $student=[
        "Sok"=>[
            "age"=> "20",
            "gender"=> "Male",
            "score"=> "85",
        ],
        "Dara"=>[
            "age"=> "22",
            "gender"=> "Female",
            "score"=> "90",
        ]
    ];
    $class=[
        "Sok"=>[
            "major"=> "Computer Studies",
            "subject"=> "Software Development",
            "room"=> "G-112",
        ]
    ];
    echo $student["Sok"]["age"]." ".$student["Sok"]["gender"]." ".$class["Sok"]["major"]." ".$class["Sok"]["subject"]." ".$class["Sok"]["room"]
?>