<?php

namespace CeresVanillaBilliardRoyal\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaBilliardRoyalItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaBilliardRoyal::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}