<?php

class Font {
    private int $id;
    private string $title;
    private string $source;
    private string $url;
    private string $accessDate;
    private string $publishedDate;

    public function __construct(
        int $id,
        string $title,
        string $source,
        string $url,
        string $accessDate,
        string $publishedDate
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->source = $source;
        $this->url = $url;
        $this->accessDate = $accessDate;
        $this->publishedDate = $publishedDate;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getSource(): string {
        return $this->source;
    }

    public function getUrl(): string {
        return $this->url;
    }

    public function getAccessDate(): string {
        return $this->accessDate;
    }

    public function getPublishedDate(): string {
        return $this->publishedDate;
    }
}