<?php
/**
 * Created by PhpStorm.
 * User: Krishnendu
 * Date: 4/29/2018
 * Time: 8:04 PM
 */

abstract class Board
{
    public $school;
    public function School($school)
    {
        return $this->school = $school;
    }

    abstract public function scores($marks);
}

class Student extends Board
{
    public $PGPA;
    public function scores($marks)
    {
        $this->PGPA = round(array_sum($marks)*1.40/100, 2);
        return $this->PGPA;
    }
}

$obj = new Student();
echo $obj->school('PUBLIC SCHOOL');
echo $obj->scores([78,40,58,71,75]);
print_r($obj);