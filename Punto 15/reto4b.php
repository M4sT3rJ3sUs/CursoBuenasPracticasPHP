<?php
    class Programmer
    {
        public function code()
        {
            return 'coding';
        }
    }
    class Tester
    {
        public function test()
        {
            return 'testing';
        }
    }
    class ProjectManagement {
        public function process($member) {
                $member->process();
        }
    }