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

    public function replaceStr($num, $str)
    {
        foreach ($this->arr as $name => $value) {
            if ($name + 1 == $num) {
                $this->arr[$name] = $str;
                return $this->showStr();
            }
        }
    }

    public function replaceSym($numstr, $numsym, $str)
    {
        foreach ($this->arr as $name => $value) {
            if ($name + 1 == $numstr) {
                $arr = str_split($value);
                foreach ($arr as $key => $sym) {
                    if ($key + 1 == $numsym) {
                        $this->arr[$name][$key]=$str;
                        return $this->showSym();
                    }
                }
            }
        }
    }

    public function showStr()
    {
        $arr = array();
        foreach ($this->arr as $name => $value) {
            array_push($arr, $value);
        }
        return $arr;
    }

    public function showSym()
    {
        $arr = array();
        $array = array();
        foreach ($this->arr as $name => $value) {
            $arr = str_split($value);
            foreach ($arr as $key => $sym) {
                array_push($array, $sym);
            }
        }
        return $array;
    }

}