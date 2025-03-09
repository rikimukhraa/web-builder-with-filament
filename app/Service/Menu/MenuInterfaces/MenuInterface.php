<?php

namespace App\Service\Menu\MenuInterfaces;


interface MenuInterface
{
    public function show($type, $slug, $id);
}
