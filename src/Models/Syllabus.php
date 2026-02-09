<?php

namespace App\Models;

class Syllabus
{
    protected  array $data = [
        [
            'code'          => 'A_CAP 101',
            'description'   => 'Capstone Project 1',
            'units'         => 3.00,
            'term_taken'    => '2S of 2023',
            'prerequisites' => 'A_CC 106, A_MS 102'
        ],
        [
            'code'          => 'A_ELEC1',
            'description'   => 'Elective 1 (Web Systems and Technologies 2)',
            'units'         => 3.00,
            'term_taken'    => '2S of 2025',
            'prerequisites' => 'A_WS 101'
        ],
        [
            'code'          => 'A_ELEC2',
            'description'   => 'Elective 2 (Mobile Application Development 2)',
            'units'         => 3.00,
            'term_taken'    => '2S of 2025',
            'prerequisites' => 'A_MD 101'
        ],
        [
            'code'          => 'A_GE_8 / A_GE_8',
            'description'   => 'Ethics',
            'units'         => 3.00,
            'term_taken'    => '2S of 2023',
            'prerequisites' => null
        ],
        [
            'code'          => 'A_IAS 101',
            'description'   => 'Information Assurance and Security 1',
            'units'         => 3.00,
            'term_taken'    => '2S of 2023',
            'prerequisites' => 'A_CC 106'
        ],
        [
            'code'          => 'A_IC 1',
            'description'   => 'Personality Development',
            'units'         => 3.00,
            'term_taken'    => '2S of 2023',
            'prerequisites' => null
        ],
        [
            'code'          => 'A_IPT 101',
            'description'   => 'Integrative Programming and Technologies A',
            'units'         => 3.00,
            'term_taken'    => '2S of 2023',
            'prerequisites' => 'A_CC 106'
        ],
        [
            'code'          => 'A_TECH 101',
            'description'   => 'Technopreneurship',
            'units'         => 3.00,
            'term_taken'    => '2S of 2023',
            'prerequisites' => null
        ]
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
