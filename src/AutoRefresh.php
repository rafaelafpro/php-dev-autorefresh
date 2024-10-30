<?php

namespace AutoRefresh;

class AutoRefresh
{
  private $path;

  public function __construct($path = __DIR__)
  {
    $this->path = $path;
  }

  public function getLastModified()
  {
    if (!file_exists($this->path)) {
      return null;
    }

    return filemtime($this->path);
  }

  public function handleRequest()
  {
    header('Content-Type: application/json');
    echo json_encode(['lastModified' => $this->getLastModified()]);
  }
}
