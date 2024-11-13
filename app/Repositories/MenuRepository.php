<?php
namespace App\Repositories;
use App\Interfaces\MenuRepositoryInterface;
use App\Models\Menu;
class MenuRepository implements MenuRepositoryInterface
{
    public function createMenu($data){
        
    }
    public function deleteMenu($menuId){

    }
    public function updateMenu($menuId, $menuDetails){

    }
    public function assignParent($childId, $parentId){

    }
    public function getSubMenu($parentId){

    }
    public function getMenus(){
        $menus = Menu::get();
        return $menus;
    }
}