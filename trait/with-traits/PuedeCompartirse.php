<?php
namespace Tools\Dynamic;

trait PuedeCompartirse
{
  private function shareMe()
  {
    echo $this->name;
      echo 'Sending to Facebook...';
  }

  public function shareMe2()
  {
      echo 'Sending to Twitter...';
  }
}
