<?php


class Button extends Html
{
    public function myOpeningTag()
    {
        return '<button>';
    }

    public function myClosingTag()
    {
        return '</button>';
    }

    public function printMe()
    {
        echo $this->myOpeningTag() . $this->myClosingTag();
    }

    public function shareMe()
    {
        // No tengo que compartir buttons
    }


}


$btn = new Button();

$btn->shareMe();
