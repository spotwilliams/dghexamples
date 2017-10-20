<?php

namespace Dom\Dynamic;

class Image extends Html
{
    use \Tools\Dynamic\PuedeCompartirse;


    public function myOpeningTag()
    {
        return '<img>';
    }

    public function myClosingTag()
    {
        return '</img>';
    }


}
