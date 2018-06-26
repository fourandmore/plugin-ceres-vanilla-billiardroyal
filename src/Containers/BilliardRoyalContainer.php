<?php

namespace BilliardRoyal\Containers;

use Plenty\Plugin\Templates\Twig;

class BilliardRoyalContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('BilliardRoyal::Stylesheet');
    }
}