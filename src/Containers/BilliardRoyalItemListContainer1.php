<?php

namespace CeresVanillaBilliardRoyal\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaBilliardRoyalItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaBilliardRoyal::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}