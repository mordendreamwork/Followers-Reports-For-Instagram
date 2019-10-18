<?php
    class Version {
        public $vertion_id;
    }
    $e = new Version();
    $e->vertion_id = 0;
    
    echo json_encode($e);
    exit;
