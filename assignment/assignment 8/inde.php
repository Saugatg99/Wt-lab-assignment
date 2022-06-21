<?php
$staff = [
    [
        "acedemic" =>
        [

            [
                "name" => "Nishal Gurung",
                "address" => "Bagar",
                "mobile" => [9888888888,9877777777],
                "subject" => ["WT","Java"]
            ],
            [
                "name" => "Rajendra Bahadur Thapa",
                "address" => "Lamachour",
                "mobile" => [9888888844,9855777777],
                "subject" => ["C++","C"]
            ],
            [
                "name" => "Tara Bahadur Thapa",
                "address" => "Bagar",
                "mobile" => [9888868888,9873777777],
                "subject" => ["CT","MFCS"]
            ]
        ]
    ],
    [
        "nonacedemic" =>
        [

            [
                "name" => "Saugat Ghimire",
                "address" => "Parsyang",
                "mobile" => [98875789,989896468],
                "subject" => "none"
            ],
            [
                "name" => "Simon Shrestha",
                "address" => "Chauthe",
                "mobile" => [9888777844,9855876547],
                "subject" => "none"
            ],
        ] 
    ]
];
echo "<h1>Gandaki College of Engineering and Science</h1>";
echo "<table border='1px solid black' cellspacing= '0px' cellpadding ='8px' width ='60%'>";
echo "<tr bgcolor = 'blue' font-size='32px'>";
echo "<th>Name</th>";
echo "<th>Acedemic</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "<th>Subjects</th>";
echo "</tr>";
for($i=0;$i<=1;$i++){
    foreach($staff[$i] as $option => $content){
       if($i)
       {
            for($k = 0;$k <=1;$k++)
            {
                echo "<tr bgcolor='#ff4d4d'>";
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"])? $test = "true": $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for($j=0;$j<count($content[$k]["mobile"]);$j++){
                    $temp .= $content[$k]["mobile"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
               
                echo "<td>None</td>";
                echo "</tr>";

            }
        }
        else{
            for($k = 0;$k <3;$k++){
                echo "<tr bgcolor='#33ff33'>";
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"])? $test = "true": $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for($j=0;$j<count($content[$k]["mobile"]);$j++){
                    $temp .= $content[$k]["mobile"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
                $temp = " ";
                for($j=0;$j<2;$j++){
                    $temp .= $content[$k]["subject"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                echo "</tr>";
            }
        }
    }    
}
echo "</table>";
?>