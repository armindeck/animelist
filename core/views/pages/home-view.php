<?php
view("layout", array_merge(db("posts.pages.home"), ["content" => function () {
    view("components/header");
    view("components/hero");
    view("components/list");
    view("components/footer");
}]));
