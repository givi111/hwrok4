<?php
class Router {
    public $routes;
    public function get($url, $view) {
        $this->routes[$url] = $view;
    }
    public function run($url) {
        if( array_key_exists($url, $this->routes) ) {
            return $this->routes[$url];
        }
        else {
            return '../../views/notfound.php';
        } 
    }
}
?>