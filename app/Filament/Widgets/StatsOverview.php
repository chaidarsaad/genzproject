<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Team;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 0;

    protected function getStats(): array
    {
        $totalClients = Client::count();
        $totalServices = Service::count();
        $totalPortofolios = Portofolio::count();
        $totalTeams = Team::count();

        return [
            Stat::make('Total Clients', $totalClients),
            Stat::make('Total Services', $totalServices),
            Stat::make('Total Portofolios', $totalPortofolios),
            Stat::make('Total Teams', $totalTeams),
        ];
    }
}
