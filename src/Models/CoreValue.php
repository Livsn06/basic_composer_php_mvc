<?php

namespace App\Models;

class CoreValue
{
    protected array $data =  [
        [
            "id" => 1,
            "title" => "Core Values (AC-CESS)",
            "items" => [
                "Accountability & Transparency – Upholding responsibility and openness in all university actions.",
                "Credibility & Integrity – Maintaining honesty, trust, and ethical conduct.",
                "Competence & Commitment to Achieve – Developing skills and dedication toward excellence.",
                "Excellence in Service Delivery – Providing quality education and public service.",
                "Social & Environmental Responsiveness – Promoting sustainable and community-oriented development.",
                "Spirituality – Nurturing faith, values, and moral responsibility."
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
