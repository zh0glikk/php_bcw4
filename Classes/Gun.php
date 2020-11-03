<?php
    class Gun {
        private $amount;
        private $capacity;
        private $isReady;
        private $model;
        private $totalShots;

        public function __construct($model="Beretta", $capacity=8) {
            $this->amount = 0;
            $this->capacity = $capacity;
            $this->isReady = 0;
            $this->model = $model;
            $this->totalShots = 0;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function prepare() {
                $this->isReady = 1;
        }

        public function reload() {
            $this->amount = $this->capacity;
        }

        public function shoot() {
            if ( $this->isReady == 0) {
                throw new Exception("NotReady");
            }
            if ( $this->amount == 0 ) {
                throw new Exception("OutOfRounds");
            }
            $this->amount -= 1;
            $this->totalShots += 1;
            $this->isReady = 0;
        }

        public function __toString() {
            return sprintf("---\namount:%s\ncapacity:%s\nisReady:%s\nmodel:%s\ntotalShots:%s\n---", 
                            $this->amount,
                            $this->capacity,
                            $this->isReady,
                            $this->model,
                            $this->totalShots);
        }
    }

    $g = new Gun();

    echo $g.PHP_EOL;

    $g->reload();
    $g->prepare();
    $g->shoot();

    echo $g.PHP_EOL;
?>