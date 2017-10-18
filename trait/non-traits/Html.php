<?php


abstract class Html implements Printable, Shareable
{
    abstract public function myOpeningTag();
    
    abstract public function myClosingTag();
}