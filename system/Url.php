<?php
class Url
{
    public function href($route)
    {
        return BASE . '/index.php?action=' . $route;
    }
    
}