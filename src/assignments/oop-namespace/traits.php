<?php

namespace Zoo {
    trait Kudos {
        public function give_kudos() {
            $this->kudos++;
        }
    
        public function count_kudos() {
            return $this->kudos;
        }
    }
}
