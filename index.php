<?php
    include("./layouts/header.php");
    session_start();
    class RoutingConfig{
        private $url;
        private $basePath = '/companyProfileCMS';
        private $path;
        private $page = '';
        
        public function __construct()
        {
            $this->url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
            $this->path = str_replace($this->basePath,'',$this->url);

            if($this->path === '' || $this->path === '/'){
                $this->page = 'home';
            }else{
                $this->page = trim($this->path,'/');
            }
           
        }

        public function run(){ 

            if($this->page == 'edit'){
                if(isset($_SESSION['admin']) && $_SESSION['admin'] === True){
                    include __DIR__ . '/pages/admin/edit.php';
                }else{
                    http_response_code(403);
                    echo '<h1>403 - Forbidden</h1>';
                }
                return;
            }

            $publicPages = ['home','login',''];

            if(!in_array($this->page,$publicPages)){
                http_response_code(404);
                $this->page = '404';
            }

            if($this->page === '404'){
                include __DIR__ . '/component/error.php';
            }else{
                include __DIR__ . "/pages/{$this->page}.php";
            }
        }

    }

$router = new RoutingConfig();
$router->run();


include __DIR__ . '/layouts/header.php';
