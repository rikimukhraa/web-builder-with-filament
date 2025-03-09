<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Forms\Components\Component;
use Filament\Resources\Pages\CreateRecord;
use Pboivin\FilamentPeek\Pages\Concerns\HasBuilderPreview;
use Pboivin\FilamentPeek\Pages\Concerns\HasPreviewModal;

class CreatePage extends CreateRecord
{
    use HasPreviewModal;
    use HasBuilderPreview;

    protected static string $resource = PageResource::class;

    protected function getBuilderPreviewView(string $builderName): ?string
    {
        // This corresponds to resources/views/posts/preview-blocks.blade.php
        return 'filament.content.block-previews.heading';
    }

    public static function getBuilderEditorSchema(string $builderName): Component|array
    {
        return PageResource::contentBuilderField(context: 'preview');
    }
}
