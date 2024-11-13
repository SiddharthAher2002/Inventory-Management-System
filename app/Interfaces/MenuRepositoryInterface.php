<?php

namespace App\Interfaces;

interface MenuRepositoryInterface
{
    public function createMenu($data);
    public function deleteMenu($menuId);
    public function updateMenu($menuId, $menuDetails);
    public function assignParent($childId, $parentId);
    public function getSubMenu($parentId);
    public function getMenus();


}
