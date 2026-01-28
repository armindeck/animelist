<?php

Route(["", "home"], function() {
    view("pages.home");
});

Route("about", function() {
    view("pages.about");
});

Route("contact", function() {
    view("pages.contact");
});
