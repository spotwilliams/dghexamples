<?php


class Image extends Html
{
    public function myOpeningTag()
    {
        return '<img>';
    }
    
    public function myClosingTag()
    {
        return '</img>';
    }
    
    public function shareMe()
    {
        echo 'Sending to Facebook...';
    }
    
    public function printMe()
    {
        echo $this->myOpeningTag() . $this->myClosingTag();
    }
    
    
}