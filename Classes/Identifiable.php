<?php
    class Identifiable {
        private $id;
        public static $lastId = 0;

        public function __construct() {
            self::$lastId += 1;
            $this->id = self::$lastId;
        }

        public function __clone() {
            $this->id = self::$lastId;
        }

        public function __get($name) {
            return $this->$name;
        }
    }
?>