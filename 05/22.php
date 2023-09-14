<?php 
    class Person{
        var $name;
        function say(){
            echo 'my name is :' .$this->name;
        }
        function walk($x){
            echo $this->name."speed is:$x";
        }
    }

    $ZS = new Person;
    $ZS->name='张三';
    $ZS->say();
    $LS = new Person;
    $LS->name='李四';
    echo '<br>';
    $LS->walk(10);

?>