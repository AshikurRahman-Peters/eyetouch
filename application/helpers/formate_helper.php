<?php

function read_more($text, $limit = 300)
{
    $text = $text. " ";
    $text = substr($text, 0, $limit);
    $text = substr($text, 0, strrpos($text, " "));
    return $text;
}