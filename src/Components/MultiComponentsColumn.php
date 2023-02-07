<?php

namespace Shibomb\FilamentMultiComponentsColumn\Components;

use Closure;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Layout\Component;

class MultiComponentsColumn extends Column
{
    protected string $view = 'filament-multi-components-column::multi-components-column';

    protected array | Closure $components = [];
    protected string $classNames = '';

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

    public function classNames(string $classNames): static
    {
        $this->classNames = $classNames;

        return $this;
    }

    public function getClassNames(): string
    {
        return $this->classNames != '' ? $this->classNames : config('filament-multi-components-column.default_class_names');
    }

    public function verticaly(): static
    {
        $this->classNames = config('filament-multi-components-column.default_verticaly_class_names');

        return $this;
    }

    public function appendClassNames(string $classNames): static
    {
        return $this->classNames($this->getClassNames() . ' ' . $classNames);
    }
}
