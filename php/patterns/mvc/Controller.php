<?php

    class Controller
    {
        private $model;
        private $view;

        public function __construct($model, $view)
        {
            $this->model = $model;
            $this->view = $view;
        }

        public function updateModel($newModelData)
        {
            $this->model->setData('update_key', $newModelData);
        }

        public function updateView($newData)
        {   
            
            $this->view->data['initial_view_key'] = $newData;
            
        }

    }


