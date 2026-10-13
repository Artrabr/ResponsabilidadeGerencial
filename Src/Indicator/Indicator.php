<?php

class Indicator {
    private int $id;
    private int $areaId;
    private string $name;
    private string $description;
    private string $unit;
    private string $improvementDirection;
    private string $methodology;

    public function __construct(
        int $id,
        int $areaId,
        string $name,
        string $description,
        string $unit,
        string $improvementDirection,
        string $methodology
    ) {
        $this->id = $id;
        $this->areaId = $areaId;
        $this->name = $name;
        $this->description = $description;
        $this->unit = $unit;
        $this->improvementDirection = $improvementDirection;
        $this->methodology = $methodology;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getAreaId(): int {
        return $this->areaId;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getUnit(): string {
        return $this->unit;
    }

    public function getImprovementDirection(): string {
        return $this->improvementDirection;
    }

    public function getMethodology(): string {
        return $this->methodology;
    }
}