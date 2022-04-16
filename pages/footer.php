<?php
    class Footer
    {
        private $items = array();                       //пустой массив
        private $trademark;                             //товарный знак


        public function addTrademark($comp)
        {
            $this->trademark = $comp;
        }

        public function AddToArray($items = array())           //функция добавления переменных в массив
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
           echo '<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">'; 
           echo ' <p class="col-md-4 mb-0 text-muted">' . $this->trademark . '</p>'; 
           echo '<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                 </a>';
           echo '<ul class="nav col-md-4 justify-content-end">'; 
            for ($i=0; $i < count($this->items) ; $i++) { 
                
                echo '<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">' . $this->items[$i] . '</a></li>';
            }
            echo '</ul>';
            echo '</footer>';
        }
    }
?>