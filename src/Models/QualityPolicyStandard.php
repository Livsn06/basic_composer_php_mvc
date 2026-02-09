<?php

namespace App\Models;

class QualityPolicyStandard
{
    protected  array $data = [
        [
            "id" => 1,
            "title" => "Quality Policy Standards",
            "items" => [
                "The Pangasinan State University shall be recognized as an ASEAN premier state university that provides quality education and satisfactory service delivery through instruction, research, extension, and production.",
                "We commit our expertise and resources to produce professionals who meet the expectations of the industry and other interested parties in the national and international community.",
                "We shall continuously improve our operations in response to the changing environment and in support of the institution’s strategic direction."
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
