<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Jason Kolenosky
 */
class Student {
    
    /**
     * Student constructor.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Adds e-mail address to student.
     * 
     * @param type $which index location
     * @param type $address e-mail address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Adds grade to student.
     * 
     * @param type $grade student grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates the grade average for the student.
     * Average is rounded to two decimal places.
     * 
     * @return float student grade average
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return round($total / count($this->grades), 2);
    }
    
    /**
     * Returns a string representation of the student.
     * 
     * @return string student information
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what){
            $result .= $which . ': '. $what;
            $result .= "\n";
        }
        return '<pre>'.$result.'</pre>';
    }
}
