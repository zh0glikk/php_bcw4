<?php
    class Pasport {
        private $birth;
        private $name;
        private $surname;
        
        private $id;
        private $series;

        public function __construct($name, $surname, $birth = "(12, 9, 2001)") {
            $this->name = $name;
            $this->surname = $surname;
            $this->birth = $birth;

            self::$lastId += 1;
            if ( self::$lastId > 999999 ) {
                self::$lastId = 1;
                if ( self::$lastSer[1] != 'Z') {
                    $t = ord(self::$lastSer[1]) + 1;
                    self::$lastSer[1] = chr($t);
                } else {
                    $t = ord(self::$lastSer[0]) + 1;
                    self::$lastSer[0] = chr($t);
                    self::$lastSer[1] = 'A';
                }
            }

            $this->id = self::$lastId;
            $this->series = self::$lastSer;
        }
        
        public function __get($name) {
            return $this->$name;
        }

        public function setSer($ser, $newId = 1) {
            self::$lastId = $newId;
            self::$lastSer = $ser;

            $this->series = $ser;
            $this->id = $newId;
        }
        public function __toString() {
            return sprintf("%s %s (%s%s %s, %s)", $this->name, $this->surname, $this->series[0], $this->series[1], $this->id, $this->birth);
        }

        public static $lastId = 0;
        public static $lastSer = array();
    };

    Pasport::$lastSer[] = 'A';
    Pasport::$lastSer[] = 'A';

    $p1 = new Pasport("S1", "Z1");
    $p2 = new Pasport("S2", "Z2");

    echo $p1.PHP_EOL;
    echo $p2.PHP_EOL;

    $p3 = new Pasport("S3", "Z3");

    $arr = array();
    $arr[] = 'A';
    $arr[] = 'E';
    $p3->setSer($arr, 20);

    echo $p3.PHP_EOL;

    $p4 = new Pasport("S4", "Z4");
    $p4->setSer($arr, 999999);

    echo $p4.PHP_EOL;

    $p5 = new Pasport("S5", "Z5");
    echo $p5.PHP_EOL;
?>