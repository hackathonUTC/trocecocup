<?php
namespace App\Utils;
class Xml
{
    public static function parseCasReturn($data)
    {
        $XmlParsed = simplexml_load_string($data, "SimpleXMLElement", 0, "cas", true);
        try {
            $user = $XmlParsed->authenticationSuccess->user;
        }
        catch (Exception $e) {
            return $e;
        }
        return (string) $user;
    }
}