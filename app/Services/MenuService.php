<?php
namespace App\Services;
use App\Interfaces\MenuRepositoryInterface;
class MenuService
{
    protected $_menuRepository;

    public function __construct(
        MenuRepositoryInterface $menuRepository,
    ) {
        $this->_menuRepository = $menuRepository;
    }

    public function getMenuList()
    {
        $menus = $this->_menuRepository->getMenus();
        $menuTree = [];
        foreach ($menus as $menu) {
            if ($menu->parent_id != null) {
                $menuTree[$menu->parent_id]['childs'][$menu->id] = [
                    'label' => $menu->label,
                    'route' => $menu->route,
                    'childs' => []
                ];
            }else{
                $menuTree[$menu->id] = [
                    'label' => $menu->label,
                    'route' => $menu->route,
                    'childs' => []
                ];
            }
        }
        return $menuTree;
    }
}
