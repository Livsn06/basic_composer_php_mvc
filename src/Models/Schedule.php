<?php

namespace App\Models;

class Schedule
{
    protected array $data =  [
        ['time' => '8:00 AM - 9:00 AM',  'mon' => 'IT101 - Intro to IT', 'tue' => null, 'wed' => 'IT103 - Discrete Math', 'thu' => null, 'fri' => 'IT104 - Web Dev Basics'],
        ['time' => '9:00 AM - 10:00 AM', 'mon' => 'IT102 - Programming Fundamentals', 'tue' => 'IT105 - Databases', 'wed' => null, 'thu' => 'IT108 - Software Eng', 'fri' => null],
        ['time' => '10:00 AM - 11:00 AM', 'mon' => null, 'tue' => 'IT106 - Networks', 'wed' => 'IT107 - Operating Systems', 'thu' => null, 'fri' => null],
        ['time' => '11:00 AM - 12:00 PM', 'mon' => null, 'tue' => null, 'wed' => 'IT108 - Software Eng', 'thu' => 'IT101 - Intro to IT', 'fri' => null],
        ['time' => '1:00 PM - 2:00 PM',   'mon' => 'IT104 - Web Dev Basics', 'tue' => null, 'wed' => null, 'thu' => 'IT102 - Programming Fundamentals', 'fri' => 'IT105 - Databases'],
        ['time' => '2:00 PM - 3:00 PM',   'mon' => null, 'tue' => 'IT107 - Operating Systems', 'wed' => null, 'thu' => null, 'fri' => 'IT106 - Networks']
    ];

    public function all(): array
    {
        return $this->data;
    }

    public function find(int $id): ?array
    {
        foreach ($this->data as $page) {
            if ($page['id'] === $id) {
                return $page;
            }
        }
        return null;
    }
}
