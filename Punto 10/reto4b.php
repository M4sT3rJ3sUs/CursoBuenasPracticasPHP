<?php
    class Programmer
    {
        public function coding()
        {
            return 'coding';
        }
    }
    class Tester
    {
        public function testing()
        {
            return 'testing';
        }
    }
    class ProjectManagement
    {
        public function printActionMember($member)
        {
            if ($member instanceof Programmer) {
                $member->coding();
            } elseif ($member instanceof Tester) {
                $member->testing();
            };
            throw new Exception('Invalid input member');
        }
    }