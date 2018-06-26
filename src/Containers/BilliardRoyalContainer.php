<?php

namespace CeresVanillaBilliardRoyal\Containers;

use Plenty\Plugin\Templates\Twig;

class BilliardRoyalContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresVanillaBilliardRoyal::Stylesheet');
    }
}