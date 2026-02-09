<?php

namespace App\Models;

class StrategicGoal
{
    protected  array $data = [
        [
            "id" => 1,
            "title" => "Strategic Goals",
            "items" => [
                "SG 1: Industry-Focused and Innovation-Based Student Learning and Development.",
                "SG 2: Responsive and Sustainable Research, Community Extension, and Innovative Programs.",
                "SG 3: Effective and Efficient Governance and Financial Management.",
                "SG 4: High-Performing and Engaged Human Resource.",
                "SG 5: Strategic and Functional Internationalization Program."
            ]
        ]
    ];

    public function all(): array
    {
        return $this->data[0];
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
