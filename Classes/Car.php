<?php
    include 'Point.php';

    class Car {
        private $fuelAmount;
        private $fuelCapacity;
        private $fuelConsumption;
        private $location;
        private $model;

        public function __construct($capacity, $consumption, $location, $model) {
            if ( $capacity <= 0 ) {
                $capacity = 60;
            }
            if ( $consumption < 0 ) {
                $consumption = 0.6;
            }

            $this->fuelCapacity = $capacity;
            $this->fuelConsumption = $consumption;
            $this->location = $location;
            $this->model = $model;
            $this->fuelAmount = $capacity;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $this->validate($value);
        }

        public function __call($name, $args) {
            switch ($name) {
                case 'drive':
                    switch (count($args)) {
                        case 1:
                            return call_user_func_array(array($this, 'drivePoint'), $args);
                        case 2:
                            return call_user_func_array(array($this, 'driveCoords'), $args);
                     }
            }
        }

        public function drivePoint(Point $destination) {
            $length = $this->location->distance($destination);
            $fuelToUse = $length * $this->fuelConsumption;

            if ( $this->fuelAmount < $fuelToUse ) {
                throw new Exception("OutOfFuel");
            } else {
                $this->location = $destination;
                $this->fuelAmount -= $fuelToUse;
            }
        }

        public function driveCoords($x, $y) {
            $destination = new Point($x, $y);
            $this->drive($destination);
        }

        public function refill($fuel) {
            $this->fuelAmount += $fuel;
            if ($this->fuelAmount > $this->fuelCapacity ) {
                $this->fuelAmount = $this->fuelCapacity;
            }
        }

        public function __toString() {
            return sprintf("fuelAmount:%s\nfuelCapacity:%s\nfuelConsumption:%s\nlocation:%s\nmodel:%s", 
                            $this->fuelAmount,
                            $this->fuelCapacity,
                            $this->fuelConsumption,
                            $this->location,
                            $this->model);
        }
    }
?>