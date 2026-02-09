<?php

namespace App\Models;

class Calendar
{
    protected array $data =  [
        ['month' => 'August',    'date' => 'August 12 - 16', 'activity' => 'Enrollment Period'],
        ['month' => 'August',    'date' => 'August 19',      'activity' => 'Start of Classes'],
        ['month' => 'September', 'date' => 'September 9',    'activity' => 'University Day'],
        ['month' => 'October',   'date' => 'October 14 - 18', 'activity' => 'Midterm Examinations'],
        ['month' => 'November',  'date' => 'November 1',     'activity' => 'All Saints Day'],
        ['month' => 'December',  'date' => 'December 9 - 13', 'activity' => 'Final Examinations'],
        ['month' => 'December',  'date' => 'December 16',    'activity' => 'End of Semester'],
        ['month' => 'January',   'date' => 'January 6',      'activity' => 'Start of Second Semester'],
        ['month' => 'March',     'date' => 'March 17 - 21',  'activity' => 'Midterm Examinations'],
        ['month' => 'May',       'date' => 'May 19 - 23',    'activity' => 'Final Examinations']
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
