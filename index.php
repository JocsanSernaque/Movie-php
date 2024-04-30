<?php
require_once "api.php";
require_once "function.php";
require_once "clases/NextMovie.php";

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

render_templates('head', ["title" => $next_movie_data["title"]]);
render_templates('main', array_merge($next_movie_data, ["until_message" => $next_movie->get_until_message()]));
render_templates('styles');
?>