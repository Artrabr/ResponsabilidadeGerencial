<?php

class Municipality {
    private int $id;
    private string $name;
    private int $ibgeCode;
    private array $neighborhoods;

    public function __construct(int $id, string $name, int $ibgeCode, array $neighborhoods) {
        $this->id = $id;
        $this->name = $name;
        $this->ibgeCode = $ibgeCode;
        $this->neighborhoods = $neighborhoods;
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

    public function getNeighborhoods(): array {
        return $this->neighborhoods;
    }
}