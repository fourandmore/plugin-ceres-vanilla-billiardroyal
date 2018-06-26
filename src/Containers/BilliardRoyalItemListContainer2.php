<?php

namespace BilliardRoyal\Containers;

use Plenty\Plugin\Templates\Twig;

class BilliardRoyalItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BilliardRoyal::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}