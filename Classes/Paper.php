<?php
    class Paper {
        private $maxSymbols;
        private $symbols;
        private $content;

        public function __construct($maxSymbols=4096) {
            $this->maxSymbols = $maxSymbols;
            $this->symbols = 0;
            $this->content = "";
        }

        public function __get($name) {
            return $this->$name;
        }

        public function addContent($message) {
            $this->content = $this->content.$message;
        }

        public function show() {
            echo $this->content.PHP_EOL;
        }
    };

    // $p1 = new Paper();

    // $p1->addContent("Hello, world!");

    // $p1->show();
?>