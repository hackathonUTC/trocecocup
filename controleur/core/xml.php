<?php

class Xml
{
    public static function parseCasReturn($data)
    {
        $XmlParsed = simplexml_load_string($data, "SimpleXMLElement", 0, "cas", true);
        //$data = Array();
        try {
            $user = $XmlParsed->authenticationSuccess->user;
           /* $data['user'] = $XmlParsed->authenticationSuccess->user;
            $data['mail'] = $XmlParsed->authenticationSuccess->attributes->mail;
            $data['nom'] = $XmlParsed->authenticationSuccess->attributes->sn;
            $data['prenom'] = $XmlParsed->authenticationSuccess->attributes->givenName;*/
        }
        catch (Exception $e) {
            return $e;
        }

        return  (string) $user;
    }
}