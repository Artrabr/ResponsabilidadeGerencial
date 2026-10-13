<?php

class Source {
    private int $id;
    private string $title;
    private string $organization;
    private string $url;
    private string $accessDate;
    private string $publishedDate;

    public function __construct(
        int $id,
        string $title,
        string $organization,
        string $url,
        string $accessDate,
        string $publishedDate
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->organization = $organization;
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

    public function getOrganization(): string {
        return $this->organization;
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