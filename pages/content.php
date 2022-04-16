<?php
    class Cont
    {
        private $items = array();                       //пустой массив
        
        function AddToArray($items = array())           //функция добавления переменных в массив
        {            
            for ($i=0; $i < count($items); $i++)        // каждый элемент добавляем в массив
            {
                array_push($this->items, $items[$i]);    
            }
        }

        public function newAdd($a)                 //функция добавления значения в массив
        {
            array_push($this->items, $a);
        }

        public function listOutput()               //функция вывода значений из массива на экран
        {
            for ($i=0; $i < count($this->items) ; $i++) {  
                echo '<div class="col">';
                echo '<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('. $this->items[$i][0] .');background-size: 100% 100%;">';
                echo '<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">';
                echo '<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">'. $this->items[$i][1] .'</h2>';
                echo '<ul class="d-flex list-unstyled mt-auto">';
                echo '<li class="me-auto">';
                echo '<img src="' . $this->items[$i][2] . '"alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">';
                echo '</li><li class="d-flex align-items-center me-3">';
                echo '<svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>';
                echo '<small>'. $this->items[$i][3] .'</small>';
                echo '</li><li class="d-flex align-items-center">';
                echo '<svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>';
                echo '<small>'. $this->items[$i][4] .'</small>';
                echo '</li></ul></div></div></div>';
            }
        }
    }
?>