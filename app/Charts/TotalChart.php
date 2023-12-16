<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {


        return $this->chart->lineChart()
            ->setTitle('Total Konsumsi')
            ->setSubtitle('Penggunaan Daya dan Arus')
            ->addData('Arus', [40, 93, 35, 42, 18, 82])
            ->addData('Daya', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
