<?php
  class Animal {
    }
   class AnimalFly extends Animal {
        public function fly() {}
    }
   class AnimalNotFly extends Animal {
        public function watchTV() {}
    }

    class Dog extends AnimalNotFly {
        public function watchTV() {}
    }
    class Bird extends AnimalFly {
        public function fly() {}
    }