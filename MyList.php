<?php
class MyList
{
    public $arrayList;
    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }
    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            echo("ERROR in ArrayList.get");
        }
    }
    public function isInteger($index)
    {
        return preg_match("/^[0-9]+$/", $index);
    }
    public function size()
    {
        return count($this->arrayList);
    }
    public function clear()
    {
        return $this->arrayList = array();
    }
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) $newArrayList[] = $this->get($i);
            }
            $this->arrayList = $newArrayList;
        } else {
            echo "ERROR in ArrayList.remove <br> Integer value required";
        }
    }
}