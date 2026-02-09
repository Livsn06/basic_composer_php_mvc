<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Calendar;
use App\Models\Syllabus;
use App\Models\Schedule;

class PortalController extends Controller
{


    public function index()
    {

        $syllabus = new Syllabus();
        $schedule = new Schedule();
        $calendar = new Calendar();

        $syllabusData = $syllabus->all();
        $scheduleData = $schedule->all();
        $calendarData = $calendar->all();
        $this->render('portal_page', compact('syllabusData', 'calendarData', 'scheduleData'));
    }
}
