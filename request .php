<?php
    function getAllHeader($contentType) {
        
        $headers = [];
        foreach ( $_SERVER as $key => $value ) {
            if( substr($key, 0, 4) == "HTTP" ) {
                $headers[$key] = $value;
            }
        }
        if( $contentType=="application/json" || $contentType=="json" ) {
            return $headers;
        }
        else if( $contentType=="string" ) {
            return json_decode($headers);
        }
        
    }
    function getIP() {
        return $_SERVER['REMOTE_ADDR'];
    }
    function getPort() {
        return $_SERVER['SERVER_PORT'];
    }
    function getUrl() {
        return $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    }
    //...//
?>