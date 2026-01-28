<?php

function Route(string|array $route, callable $callback): void {
    $routes = is_string($route) ? [$route] : $route;

    foreach ($routes as $r) {

        // Guardamos nombres de parámetros
        preg_match_all('/\{(\w+)\}/', $r, $paramNames);
        $paramNames = $paramNames[1];

        // Convertimos la ruta en regex
        $pattern = preg_replace('/\{\w+\}/', '([^\/]+)', $r);
        $pattern = "#^{$pattern}$#";

        if (preg_match($pattern, URL, $matches)) {
            array_shift($matches); // quitar match completo
            $params = array_combine($paramNames, $matches);

            $callback(...array_values($params));
            return;
        }
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

function db(string $file): array|null {
    $file = str_replace(".", "/", $file);
    $path = __DIR__ . "/../../database/{$file}.json";
    
    if(!file_exists($path)){
        return null;
    }

    return json_decode(file_get_contents($path), true) ?? [];
}