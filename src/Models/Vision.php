<?php

namespace App\Models;

class Vision
{
    protected  array $data = [
        [
            "id" => 1,
            "title" => "Vision",
            "description" => "To become a leading industry-driven state university in the ASEAN region by 2030."
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
