<?php

class View
{
    public $data = [
        'initial_view_key' => 'initial_view_data'
    ];

    public function renderTemplate()
    {
        $viewData = $this->data['initial_view_key'];
        echo "<p>$viewData</p>";
    }

 
}

//  $v = new View();

//  $v->renderTemplate();