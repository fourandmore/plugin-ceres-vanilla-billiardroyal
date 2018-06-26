<?php

namespace BilliardRoyal\Containers;

use Plenty\Plugin\Templates\Twig;

class BilliardRoyalItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BilliardRoyal::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}