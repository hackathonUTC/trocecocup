<?php

namespace App\Utils;

class Cas
{
    private $url;
    private $casUrl;

    public function __construct($casUrl, $url)
    {
        $this->url = $url;
        $this->casUrl = $casUrl;
    }

    public function login()
    {
        header('Location: '.$this->casUrl.'login?service='.$this->url);
    }

    public function logout()
    {
        header('Location: '.$this->casUrl.'logout?service='.$this->url);
    }

    public function authenticate()
    {
        if (isset($_GET['ticket'])) {
            $response = file_get_contents($this->casUrl.'serviceValidate?service='.$this->url.'&ticket='.$_GET['ticket']);
           var_dump($response);
            die;

            if (empty($response)) return -1;
            $username = Xml::parseCasReturn($response);
            if (empty($username)) return -1;
            if ($username == -1) return -1;
            return $username;
        } else {
            return -1;
        }
    }
}
