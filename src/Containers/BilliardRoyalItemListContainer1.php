<?php

namespace BilliardRoyal\Containers;

use Plenty\Plugin\Templates\Twig;

class BilliardRoyalItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BilliardRoyal::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}