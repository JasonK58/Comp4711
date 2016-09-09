<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>COMP4711 Lab01</title>
    </head>
    <body>
        <?php
            include('Student.php');

            $students = array();
            
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            $third = new Student();
            $third->surname = "Kolenosky";
            $third->first_name = "Jason";
            $third->add_email('home','JasonK58@gmail.com');
            $third->add_email('work1','jkolenosky@my.bcit.ca');
            $third->add_grade(98);
            $third->add_grade(83);
            $third->add_grade(76);
            $students['b789'] = $third;
            
            ksort($students);
            
            foreach($students as $student){
                echo $student->toString();
            }
        ?>
    </body>
</html>
