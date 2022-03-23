<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\WebhookService;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function input(Request $request, WebhookService $service)
    {
        $data = $request->all();
        $answerId = $data['answer_id'];
        $respondentId = $data['respondent_id'];

        return $service->input($answerId, $respondentId);
    }
}
