<?php

namespace App;

class Course{
    private $markBangla;
    private $markEnglish;
    private $markMath;

    private $gradeBangla;
    private $gradeEnglish;
    private $gradeMath;

    public function setMarkBangla($markBangla){
        $this->markBangla = $markBangla;
    }

    public function setGradeBangla(){
        $this->gradeBangla = $this->convertMark2Grade($this->markBangla);
    }

            public function setMarkEnglish($markEnglish){
                $this->markEnglish = $markEnglish;
            }

            public function setGradeEnglish(){
                $this->gradeEnglish = $this->convertMark2Grade($this->markEnglish);
            }

    public function setMarkMath($markMath){
        $this->markMath = $markMath;
    }

    public function setGradeMath(){
        $this->gradeMath = $this->convertMark2Grade($this->markMath);
    }


    public function convertMark2Grade($mark){
       switch($mark){
           case ($mark>79): return "A+";
           case ($mark>69): return "A";
           case ($mark>59): return "A-";
           case ($mark>49): return "B";
           case ($mark>39): return "C";
           case ($mark>32): return "D";
           default: return "F";
       }
    }


    public function getMarkBangla(){
        return $this->markBangla;
    }

    public function getGradeBangla(){
        return $this->gradeBangla;
    }

            public function getMarkEnglish(){
                return $this->markEnglish;
            }

            public function getGradeEnglish(){
                return $this->gradeEnglish;
            }

    public function getMarkMath(){
        return $this->markMath;
    }

    public function getGradeMath(){
        return $this->gradeMath;
    }
}
