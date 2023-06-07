<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use App\Services\PengumumanService;
use App\Traits\HttpResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    use HttpResponses;

    private $service;

    public function construct(PengumumanService $PengumumanService)
    {
        $this->service = $PengumumanService;
    }

    public function index(Request $request): JsonResponse
    {
        if ($request->user()->cant('viewAny', Pengumuman::class)) {
            return $this->error('Forbidden', 403);
        }

        $query = $request->search;

        try {
            $datapgm = $this->service->findAllStories($query);
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }

        return $this->success($datapgm, 'There All Your Data');
    }

    public function show(Pengumuman $datapgm): JsonResponse
    {
        if (auth()->user()->cant('viewAny', $datapgm)) {
            return $this->error('Forbidden', 403);
        }

        try {
            $result = $this->service->findStoryById($datapgm);
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }

        return $this->success($result, 'this is your data');
    }
}