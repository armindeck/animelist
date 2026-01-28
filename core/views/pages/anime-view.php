<?php

$db = db("posts.anime.$slug") ?? db("posts.pages.404") ?? [];

view("layout", array_merge($db, ["content" => function () use ($db) {
    view("components/header");
    view("components/anime", $db);
    view("components/footer");
}]));
