<?php

namespace CeresVanillaBilliardRoyal\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaBilliardRoyalItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaBilliardRoyal::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}