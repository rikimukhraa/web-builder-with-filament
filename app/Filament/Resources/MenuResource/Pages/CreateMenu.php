<?php

namespace App\Filament\Resources\MenuResource\Pages;

use App\Filament\Resources\MenuResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateMenu extends CreateRecord
{
    protected static string $resource = MenuResource::class;

  protected function getRedirectUrl(): string
  {
        try {
            if ($this->data['type'] === 'page') {
                return url('app/pages/create');
            }else{
                return $this->getResource()::getUrl('index');

            }
        } catch (\Exception $e) {
            Notification::make()->danger()->title('Error')->body($e->getMessage())->send();

        }
  }
}
// protected function getRedirectUrl(): string
// {
//    try {
//        if ($this->data['type'] === 'page') {
//            return url('app/pages/create');
//        }else{
//            return $this->getResource()::getUrl('index');

//        }
//    } catch (\Exception $e) {
//        Notification::make()->danger()->title('Error')->body($e->getMessage())->send();

//    }

// }