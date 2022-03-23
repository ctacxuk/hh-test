<?php

namespace App\Services;

use App\Models\Answer;
use App\Models\Question;

class WebhookService
{
    public function input(int $answerId, int $respondentId)
    {

        $answer = Answer::find($answerId);

        if (!$next_question_id = $answer->next_question_id){
            $next_question_id = $answer->question->next_question_id;
        }

        if ($next_question_id){
            $question = Question::where(['id' => $next_question_id])->with('answers')->first();
        }

        // job SendToChat($respondentId, $question)

        return true;

    }
}
