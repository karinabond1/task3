<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 27.03.2019
 * Time: 15:00
 */

class File
{
    private $file;
    private $arr;

    public function setArr($arr)
    {
        $this->arr = $arr;
    }

    public function getFirst()
    {
        return $this->arr;
    }

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function arr()
    {
        $this->arr = file($this->file);
        return $this->arr;
    }

    public function showStr()
    {
        foreach ($this->arr as $name => $value) {

                return $value;

        }
    }

    public function getString($num)
    {
        foreach ($this->arr as $name => $value) {
            if ($name + 1 == $num) {
                return $value;
            }
        }
    }

    public function getSymbol($numstr, $numsym)
    {
        foreach ($this->arr as $name => $value) {
            if ($name + 1 == $numstr) {
                $arr = str_split($value);
                foreach ($arr as $key => $sym) {
                    if ($key + 1 == $numsym) {
                        return $sym;
                    }
                }
            }
        }
    }

    public function show($str)
    {
        echo $str."<br>";
    }

}