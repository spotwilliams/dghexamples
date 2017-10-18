<?php

class Image extends Html
{
    use PuedeCompartirse;
    
    
    public function myOpeningTag()
    {
        return '<img>';
    }
    
    public function myClosingTag()
    {
        return '</img>';
    }
   
    
}