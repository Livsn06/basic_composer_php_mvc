<?php

namespace App\Models;

class Mission
{
    protected  array $data =  [
        [
            "id" => 1,
            "title" => "Mission",
            "description" => "Providing a sustainable academic environment that produces individuals who can meet the needs of local and global communities and industries."
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
