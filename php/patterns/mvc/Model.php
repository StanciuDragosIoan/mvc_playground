<?php
    class Model
    {
        private $data = [
            'initial_model_key' => 'initial_model_data'
        ];

        public function setData($key, $value)
        {
            $this->data[$key] = $value;
        }

        public function getData()
        {   
            // array_push($this->data, 'test');
            return $this->data;
        }
    }

