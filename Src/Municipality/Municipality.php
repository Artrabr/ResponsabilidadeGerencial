<?php

class Municipality {
    private int $id;
    private string $name;
    private int $ibgeCode;
    private array $districts;

    public function __construct(int $id, string $name, int $ibgeCode, array $districts) {
        $this->id = $id;
        $this->name = $name;
        $this->ibgeCode = $ibgeCode;
        $this->districts = $districts;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getIbgeCode(): int {
        return $this->ibgeCode;
    }

    public function getDistricts(): array {
        return $this->districts;
    }
}