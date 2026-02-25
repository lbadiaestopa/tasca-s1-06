<?php

enum Topic: string
{
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case Laravel = 'Laravel';
}

enum Resource: string
{
    case Fitxer = 'Fitxer';
    case ArticleWeb = 'Article Web';
    case Video = 'Video';
}

class TeachingResource
{

    private Topic $topic;
    private string $url;
    private Resource $resource;

    public function __construct(Topic $topic, string $url, Resource $resource)
    {
        $this->topic = $topic;
        $this->url = $url;
        $this->resource = $resource;
    }

    public function getTopic(): Topic
    {
        return $this->topic;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getResource(): Resource
    {
        return $this->resource;
    }
}

?>