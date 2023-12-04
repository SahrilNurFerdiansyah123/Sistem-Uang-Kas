<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Repositories\DashboardChartRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DashboardChartController extends Controller
{
    public function __construct(
        private DashboardChartRepository $dashboardChartRepository,
    ) {
    }

    public function __invoke(): JsonResponse
    {
        $data = $this->dashboardChartRepository->sumCashTransactionPerMonths();

        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $data
        ]);
    }
}
