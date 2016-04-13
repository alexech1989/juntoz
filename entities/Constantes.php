<?php

/**
 * Description of contantes
 *
 * @author EDSON
 */
class Constantes {
    const CLIENTID = "7e57b794cca4425d902e2b7aff023b742462eb38b8f74fadbb4534861ab342f6";
    const CLIENTSECRET = "E3pXD2bnCVAyGEYGA71hCDguUu2O/9QXkzIfC/KZQmo9MXqlXLH9ijTVB1iVUyzg";

    public static function getClientID()
    {
      return self::CLIENTID;
    }

    public static function getClientSecret()
    {
      return self::CLIENTSECRET;
    }
       
}
