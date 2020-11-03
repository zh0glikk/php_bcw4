<?php
    class Unit {
        private $damage;
        private $hitPoints;
        private $hitPointsLimit;
        private $name;

        private function ensureIsAlive() {
            if ( $this->hitPoints <= 0 ) {
                throw new Exception("UnitIsDead");
            }
        }

        public function __construct($name, $hp, $dmg) {
            $this->name = $name;
            $this->hitPoints = $hp;
            $this->hitPointsLimit = $hp;
            $this->damage = $dmg;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function addHitPoints($hp) {
            $this->ensureIsAlive();
            $this->hitPoints += $hp;
            if ( $this->hitPoints > $this->hitPointsLimit ) {
                $this->hitPoints = $this->hitPointsLimit;
            }
        }
        public function takeDamage($dmg) {
            $this->ensureIsAlive();
            $this->hitPoints -= $dmg;
            if ( $this->hitPoints < 0 ) {
                $this->hitPoints = 0;
            }
        }

        public function attack($enemy) {
            $enemy->takeDamage($this->damage);
            if ( $enemy->hitPoints > 0 ) {
                $enemy->counterAttack($this);
            }
        }

        public function counterAttack($enemy) {
            $enemy->takeDamage($this->damage/2);
        }

        public function __toString() {
            return sprintf("%s\n%s\n%s\n%s", $this->name, $this->hitPoints, $this->hitPointsLimit, $this->dmg);
        }
    };

    $u1 = new Unit("u1", 100, 10);
    $u2 = new Unit("u2", 100, 10);

    $u1->attack($u2);

    echo $u1.PHP_EOL;
    echo $u2.PHP_EOL;

    $u1->addHitPoints(2);
    echo $u1.PHP_EOL;

?>