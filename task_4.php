<?php 
//Task 4: Multidimensional Array

$studentGrades = [
    "Mizan" => ["Math"=>90, "English"=>85, "Science"=>78],
    "Sakib" => ["Math"=>80, "English"=>85, "Science"=>71],
    "Bubli" => ["Math"=>87, "English"=>65, "Science"=>56]
  ];


function averageGrades($studentGrades) {
    foreach ($studentGrades as $student=>$grades) {
        $average = array_sum($grades) / count($grades);
        if($average>80){
            echo "The average grade for  {$student} : A+\n";
        }elseif ($average>70) {
            echo "The average grade for  {$student} : A \n";
        }
        elseif ($average>60) {
            echo "The average grade for  {$student} : A-\n";
        }

        
    }
}

averageGrades($studentGrades);




?>