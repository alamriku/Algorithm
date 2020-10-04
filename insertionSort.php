<?php

class insertionSort {
    public $arr;
    protected  $N;
    public function AssertArray($argument){
        $this->arr=$argument;
    }
    public  function AssertNumber($argument){
        $this->N=$argument;
    }
    public function doTheSort(){
        $N=count($this->arr);
        $array=$this->arr;
        for($i=1;$i<$N;$i++){
            $item=$array[$i];
            $j=$i-1;
            while ($j>=0 && $array[$j]>$item){
                $array[$j+1]=$array[$j];
                $j=$j-1;
            }
            $array[$j+1]= $item;
        }
        return $array;
    }

}

$obj=new insertionSort();
$obj->AssertArray(array(8,9,6,7,3,4,5));
$obj->AssertNumber(7);

echo "<pre>";
print_r($obj->doTheSort());
echo "</pre>";
die();

