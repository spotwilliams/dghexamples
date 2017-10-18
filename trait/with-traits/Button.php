<?php


class Button extends Html
{
    use PuedeImprimirse;
    
    public function myOpeningTag()
    {
        return '<button>';
    }
    
    public function myClosingTag()
    {
        return '</button>';
    }
    
    
}