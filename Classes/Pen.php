<?php
    include 'Paper.php';

    class Pen {
        private $inkAmount;
        private $inkCapacity;

        public function __construct($inkCapacity=4096) {
            $this->inkCapacity = $inkCapacity;
            $this->inkAmount = $inkCapacity;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function write($paper, $message) {
            if ( $paper instanceof Paper ) {
                $paper->addContent($message);
                return;
            }
            throw new Exception("Invalid param");
        }

        public function refill() {
            $this->inkAmount = $this->inkCapacity;
        }
    };

    $pen = new Pen();
    $paper = new Paper();

    $pen->write($paper, "Hello, world!");

    $paper->show();
?>