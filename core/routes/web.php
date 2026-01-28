<?php

Route(["", "home"], function() {
    view("pages.home");
});

Route("anime/{slug}", function ($slug) {
    view("pages.anime", compact("slug"));
});

Route("about", function() {
    view("pages.about");
});

Route("contact", function() {
    view("pages.contact");
});
