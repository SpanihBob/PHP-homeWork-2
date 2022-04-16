<?php           //класс для вывода класса header 
    class Header
    {                       
        private $items = array();

        
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

        //метод возвращающий готовый html
        
        public function setHtml()
        {
            echo "<div class='d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start'>";
            echo '<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">';
            for ($i=0; $i < count($this->items) ; $i++) {                 
                echo '<li style="list-style-type: none; margin: 5px;"  class="nav-link px-2 text-white">' . $this->items[$i] . '</li>';
            }
            echo '</ul>';
            echo "</div>"; 
        }
}
?>
