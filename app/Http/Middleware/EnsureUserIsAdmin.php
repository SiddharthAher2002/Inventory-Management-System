<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Services\MenuService;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected $_menuService;

    public function __construct(
        MenuService $menuService,
    ){
        $this->_menuService = $menuService;
    }
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            $request->session()->invalidate();
            return redirect(route('admin.show.login'))->withErrors([
                'message' => "Please Login to access"
            ]);
        }

        if (!(Auth::user()->role == 'admin')){
            $request->session()->invalidate(); 
            $request->session()->regenerateToken(); 
            return redirect(route('admin.show.login'))->withErrors([
                'message' => "Unauthorized user"
            ]);
        }

        $menus = $this->_menuService->getMenuList();
        View::share('menus', $menus);
        return $next($request);
    }
}
