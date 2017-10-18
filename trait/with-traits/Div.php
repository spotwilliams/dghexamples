<?php


class Div extends Html implements Contentable
{
    use PuedeImprimirse;
    
    public function myOpeningTag()
    {
        return '<div>';
    }
    
    public function myClosingTag()
    {
        return '</div>';
    }
    
    
    public function enclosingContent()
    {
        return 'Aqui tengo mucho contenido Web';
    }
    
    
    
    
}