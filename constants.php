<?php
require "./components/header.php";  echo $heading="<h2>Constants</h2>";
?>
<div>
    <p><b>Convention:</b> In PHP, the convention is to use uppercase letters for constant names, e.g., A_CONSTANT</p>
    <p>const PI = 3.14; // float</p>
    <p>define("EARTH_IS_FLAT", false); // boolean</p>
    <p>const UNKNOWN = null; // null</p>
    <p>define("APP_ENV", "dev"); // string</p>
    <p>const MAX_SESSION_TIME = 60 * 60; // integer, using (scalar) expressions is ok</p>
    <p>const APP_LANGUAGES = ["de", "en"]; // arrays</p>
    <p>define("BETTER_APP_LANGUAGES", ["lu", "de"]); // arrays</p>
</div>