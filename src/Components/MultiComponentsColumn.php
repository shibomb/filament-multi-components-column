<?php

namespace Shibomb\FilamentMultiComponentsColumn\Components;

use Closure;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Layout\Component;

class MultiComponentsColumn extends Column
{
    protected string $view = 'filament-multi-components-column::multi-components-column';

    protected array | Closure $components = [];

    public function components(array | Closure $components): static
    {
        $this->components = $components;

        return $this;
    }

    public function getComponents(): array
    {
        return array_map(function (Component | Column $component): Component | Column {
            return $component;
        }, $this->evaluate($this->components));
    }
}
