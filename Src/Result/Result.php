<?php

class Result {
    private int $id;
    private int $indicatorId;
    private int $fontId;
    private string $name;
    private float $value;
    private string $sourceDate;
    private string $note;

    public function __construct(
        int $id,
        int $indicatorId,
        int $fontId,
        string $name,
        float $value,
        string $sourceDate,
        string $note
    ) {
        $this->id = $id;
        $this->indicatorId = $indicatorId;
        $this->fontId = $fontId;
        $this->name = $name;
        $this->value = $value;
        $this->sourceDate = $sourceDate;
        $this->note = $note;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getIndicatorId(): int {
        return $this->indicatorId;
    }

    public function getFontId(): int {
        return $this->fontId;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getValue(): float {
        return $this->value;
    }

    public function getSourceDate(): string {
        return $this->sourceDate;
    }

    public function getNote(): string {
        return $this->note;
    }
}