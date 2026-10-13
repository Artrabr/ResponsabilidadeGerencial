<?php

class Result {
    private int $id;
    private int $indicatorId;
    private int $sourceId;
    private float $value;
    private string $referenceDate;
    private string $note;

    public function __construct(
        int $id,
        int $indicatorId,
        int $sourceId,
        float $value,
        string $referenceDate,
        string $note
    ) {
        $this->id = $id;
        $this->indicatorId = $indicatorId;
        $this->sourceId = $sourceId;
        $this->value = $value;
        $this->referenceDate = $referenceDate;
        $this->note = $note;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getIndicatorId(): int {
        return $this->indicatorId;
    }

    public function getSourceId(): int {
        return $this->sourceId;
    }

    public function getValue(): float {
        return $this->value;
    }

    public function getReferenceDate(): string {
        return $this->referenceDate;
    }

    public function getNote(): string {
        return $this->note;
    }
}