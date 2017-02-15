<?php

namespace App;

class Student
{
    private $name;
    private $studentID;

        public function setName($name){
            $this->name = $name;
        }

        public function setStudentID($studentID){
            $this->studentID = $studentID;
        }

    public function getName(){
        return $this->name;
    }

    public function getStudentID(){
        return $this->studentID;
    }
}
