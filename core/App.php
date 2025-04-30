<?php
class App
{
    protected $controller = 'MahasiswaController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
    
        if (!empty($url)) {
            $controllerName = $this->convertToControllerName($url[0]);
            
            if (file_exists(__DIR__ . '/../app/controllers/' . $controllerName . '.php')) {
                $this->controller = $controllerName;
                unset($url[0]);
            }
        }
        
        require_once __DIR__ . '/../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
    
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]); 
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    
    private function convertToControllerName($urlSegment)
    {
        $words = str_replace(['-', '_'], ' ', $urlSegment);
        
        $pascalCase = ucwords($words);
        $pascalCase = str_replace(' ', '', $pascalCase);
        return $pascalCase . 'Controller';
    }
    
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}