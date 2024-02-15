<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AnalyticsData;
use Illuminate\Http\Request;

class AnalyticsDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataAnalytics = AnalyticsData::orderByDesc('page_views')->get();
        return response()->json(['dataAnalytics' => $dataAnalytics]);
    }

    public function update(Request $request)
    {
        $visit = AnalyticsData::findOrFail($request->id);
        $visit->page_views +=1;
        $visit->save();
    }


}
