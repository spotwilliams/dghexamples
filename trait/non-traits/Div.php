<?php


class Div extends Html implements Contentable
{
    public function myOpeningTag()
    {
        return '<div>';
    }
    
    public function myClosingTag()
    {
        return '</div>';
    }
    
    public function printMe()
    {
        echo $this->myOpeningTag() .  $this->myClosingTag();
    }
    
    public function enclosingContent()
    {
        return 'Aqui tengo mucho contenido Web';
    }
    
    public function shareMe()
    {
        // No tengo que compartir Divs
    }
    
    
}