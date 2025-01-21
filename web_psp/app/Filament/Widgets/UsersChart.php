<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class UsersChart extends ChartWidget
{
    protected static ?string $heading = 'User Growth by Month';

    protected function getData(): array
    {
        $monthlyUsers = User::selectRaw("strftime('%m', created_at) as month, COUNT(*) as count")
            ->whereRaw("strftime('%Y', created_at) = ?", [Carbon::now()->year]) // Filter tahun berjalan
            ->groupBy('month')
            ->pluck('count', 'month'); // Hasilkan array [bulan => jumlah pengguna]

        // Inisialisasi data bulan (1-12) dengan nilai default 0
        $data = array_fill(1, 12, 0);

        // Masukkan data pengguna per bulan
        foreach ($monthlyUsers as $month => $count) {
            $data[(int)$month] = $count; // Convert bulan ke integer
        }

        return [
            'datasets' => [
                [
                    'label' => 'New Users',
                    'data' => array_values($data), // Ambil nilai dari array
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
