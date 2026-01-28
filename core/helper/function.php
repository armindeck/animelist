<?php

function Route(string|array $route, callable $callback): void {
    $route = is_string($route) ? [$route] : $route;
    
    if(in_array(URL, $route)) {
        $callback();
    }
}

function view(string $view, array $data = []): void {
    $view = str_replace(".", "/", $view);
    $path = __DIR__ . "/../views/" . $view . "-view.php";
    if (!file_exists($path)) {
        throw new Exception("View not found: " . $view);
    }

    if(!empty($data)) {
        extract($data);
    }
    
    require $path;
}

function redirect(string $url): void {
    header("Location: " . $url);
    die();
}

function assets(string $path): string {
    return APP_URL . "/assets/" . $path;
}

function db(string $file): array {
    $file = str_replace(".", "/", $file);
    $path = __DIR__ . "/../../database/{$file}.json";
    if(!file_exists($path)){
        throw new Exception("File not found: " . $file);
    }

    return json_decode(file_get_contents($path), true) ?? [];
}