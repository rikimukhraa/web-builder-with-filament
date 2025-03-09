<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;


class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [
            'Active' => Tab::make()->query(fn ($query) => $query->where('is_active', 1)),
            'Not Active' => Tab::make()->query(fn ($query) => $query->where('is_active', 0)),
            // 'Active' => Tab::make()->query(fn ($query) => $query->whereHas('menu', fn ($q) => $q->where('type', 'page'))),
            // 'Not Active' => Tab::make()->query(fn ($query) => $query->whereHas('menu', fn ($q) => $q->where('type', 'list'))),

        ];
        return $tabs;
    }
}
