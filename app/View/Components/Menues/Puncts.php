<?php

namespace App\View\Components\Menues;

use App\Models\Menu\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Puncts extends Component
{
    public $puncts;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $name = 'Главное меню')
    {
        // $this->puncts = Cache::rememberForever('menu_'.Str::slug($name), function () use ($name) {
        $this->puncts = Menu::query()
            ->where('menu_name', $name)
            ->where(function ($query) {
                $query->whereNull('parent')
                    ->orWhere('parent', 0);
            })
            ->with('children')
            ->orderBy('order', 'ASC')
            ->get();
        // });
        // dd($this->puncts);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menues.puncts');
    }
}
