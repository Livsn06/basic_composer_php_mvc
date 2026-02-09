<?php

namespace App\Controllers;

use App\Controller;
use App\Models\CoreValue;
use App\Models\Mission;
use App\Models\QualityPolicyStandard;
use App\Models\StrategicGoal;
use App\Models\Vision;

class AboutController extends Controller
{


    public function index()
    {
        $goal = new StrategicGoal();
        $policy = new QualityPolicyStandard();
        $vision = new Vision();
        $mission = new Mission();
        $coreValues = new CoreValue();

        $goalData = $goal->all();
        $policyData = $policy->all();
        $visionData = $vision->all();
        $missionData = $mission->all();
        $coreValuesData = $coreValues->all();

        $this->render('about_page', compact('goalData', 'policyData', 'visionData', 'missionData', 'coreValuesData'));
    }
}
