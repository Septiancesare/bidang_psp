<?php

namespace App\Filament\Widgets;

use App\Models\News;
use App\Models\User;
use App\Models\MemberData;
use App\Models\Information;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Jumlah pengguna aktif
        $activeUsersCount = User::all()->count();

        // Jumlah berita
        $newsCount = News::count();

        // Jumlah data anggota
        $memberDataCount = MemberData::count();

        // Jumlah informasi
        $informationCount = Information::count();

        return [
            Stat::make('Users', $activeUsersCount)
                ->descriptionIcon('heroicon-s-user', IconPosition::Before)
                ->description('Number of users in the system')
                ->color('success'),

            Stat::make('News', $newsCount)
                ->descriptionIcon('heroicon-s-book-open', IconPosition::Before)
                ->description('Total news available')
                ->color('info'),

            Stat::make('Member Data', $memberDataCount)
                ->descriptionIcon('heroicon-s-users', IconPosition::Before)

                ->description('Total member records')
                ->color('warning'),

            Stat::make('Informations', $informationCount)
                ->description('Total informational content')
                ->descriptionIcon('heroicon-s-information-circle', IconPosition::Before)

                ->color('primary'),
        ];
    }
}
