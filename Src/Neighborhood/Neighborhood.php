<?php

class Neighborhood {
    private int $id;
    private int $municipalityId;
    private string $name;

    public function __construct(int $id, int $municipalityId, string $name) {
        $this->id = $id;
        $this->municipalityId = $municipalityId;
        $this->name = $name;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getMunicipalityId(): int {
        return $this->municipalityId;
    }

    public function getName(): string {
        return $this->name;
    }
}