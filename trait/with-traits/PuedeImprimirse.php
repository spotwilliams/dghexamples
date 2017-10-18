<?php

/**
 * Created by PhpStorm.
 * User: worker
 * Date: 10/18/17
 * Time: 00:14
 */
trait PuedeImprimirse
{
    public function printMe()
    {
        echo $this->myOpeningTag() .  $this->myClosingTag();
    }
}