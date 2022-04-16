<?php
    class Nav
    {
        private $items = array();                       //пустой массив
        private $liItems = array();                     //массив для входящих li в список nav

        function AddToArray($items = array())           //функция добавления переменных в массив
        {            
            for ($i=0; $i < count($items); $i++)        // каждый элемент добавляем в массив
            {
                array_push($this->items, $items[$i]);    
            }
        }

        function addLi($liItems = array())                //функция добавления значения в массив для многоуровневого списка
        {
            for ($j=0; $j < count($liItems); $j++)        // каждый элемент добавляем в массив
            {
                array_push($this->liItems, $liItems[$j]);    
            }
        }

        public function newAdd($a)                 //функция добавления значения в массив
        {
            array_push($this->items, $a);
        }

        public function listOutput()               //функция вывода значений из массива на экран
        {
            echo '<ul class="nav nav-pills flex-column mb-auto">';
            for ($i=0; $i < count($this->items) ; $i++) {                 
                echo '<li style="list-style-type: none" class="nav-item">' . $this->items[$i];
                echo '<ul>'; 
                for ($k=0; $k < count($this->liItems) ; $k++) {
                    echo '<li style="list-style-type: none" class="nav-item">' . $this->liItems[$i][$k] .'</li>';
                }
                echo '</ul></li>';
            }
            echo '</ul>';
        }
    }
?>
