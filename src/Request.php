<?php
namespace Tiaras\Http;

class Request {

    private $server;
    private $request;
    private $files;
    private $session;
    private $cookie;

    public function factory($server, $request, $files, $session, $cookie)
    {
        $this->server = $server;
        $this->request = $request;
        $this->files = $files;
        $this->session = $session;
        $this->cookie = $cookie;
    }

    public function byDefault(): void
    {
        $this->factory($_SERVER, $_REQUEST, $_FILES, $_SESSION, $_COOKIE);
    }

    public function getAllServer(): array
    {
        return $this->server;
    }

}