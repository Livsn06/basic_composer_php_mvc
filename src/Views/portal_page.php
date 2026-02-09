<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSU Student Portal | Academic Records</title>
</head>

<body style="margin: 0; font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f0f4f8; color: #333;">

    <header style="background-color: #003366; color: white; padding: 20px 50px; border-bottom: 5px solid #ffcc00; display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="/assets/images/psu-logo.png" alt="PSU Logo" style="width: 55px; height: 55px; background: white; border-radius: 50%; padding: 2px;">
            <div>
                <h1 style="margin: 0; font-size: 20px; letter-spacing: 1px;">PANGASINAN STATE UNIVERSITY</h1>
                <small style="color: #ffcc00; font-weight: bold;">STUDENT INFORMATION SYSTEM</small>
            </div>
        </div>
        <div style="text-align: right;">
            <div style="font-weight: 600; font-size: 14px;">Academic Year: 2025-2026</div>
            <div style="font-size: 12px; opacity: 0.8;">Second Semester</div>
        </div>
    </header>

    <main style="padding: 40px 50px;">

        <section style="margin-bottom: 50px;">
            <h2 style="color: #003366; font-size: 18px; border-left: 5px solid #ffcc00; padding-left: 10px; margin-bottom: 20px;">ACADEMIC CALENDAR</h2>
            <div style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); overflow: hidden;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                        <tr>
                            <th style="padding: 15px; color: #003366; width: 150px;">Month</th>
                            <th style="padding: 15px; color: #003366; width: 250px;">Inclusive Dates</th>
                            <th style="padding: 15px; color: #003366;">Activity / Event</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['calendarData'] as $event): ?>
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 15px; font-weight: bold; color: #444;"><?= $event['month'] ?></td>
                                <td style="padding: 15px;"><span style="background: #fff3cd; color: #856404; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold;"><?= $event['date'] ?></span></td>
                                <td style="padding: 15px;"><?= $event['activity'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section style="margin-bottom: 50px;">
            <h2 style="color: #003366; font-size: 18px; border-left: 5px solid #003366; padding-left: 10px; margin-bottom: 20px;">WEEKLY CLASS SCHEDULE</h2>
            <div style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); overflow: hidden; overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: center; min-width: 800px;">
                    <thead style="background-color: #003366; color: white;">
                        <tr>
                            <th style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Time Slot</th>
                            <th style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Monday</th>
                            <th style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Tuesday</th>
                            <th style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Wednesday</th>
                            <th style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Thursday</th>
                            <th style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Friday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['scheduleData'] as $row): ?>
                            <tr>
                                <td style="padding: 15px; border: 1px solid #eee; background: #fdfdfd; font-weight: bold; font-size: 13px; color: #666;"><?= $row['time'] ?></td>
                                <?php foreach (['mon', 'tue', 'wed', 'thu', 'fri'] as $day): ?>
                                    <td style="padding: 10px; border: 1px solid #eee; font-size: 12px; <?= !empty($row[$day]) ? 'background-color: #e7f3ff; color: #004085; font-weight: 600;' : 'color: #ccc;' ?>">
                                        <?= !empty($row[$day]) ? $row[$day] : '---' ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h2 style="color: #003366; font-size: 18px; border-left: 5px solid #ffcc00; padding-left: 10px; margin-bottom: 20px;">COURSE SYLLABUS & PREREQUISITES</h2>
            <div style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); overflow: hidden;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead style="background-color: #343a40; color: white;">
                        <tr>
                            <th style="padding: 15px;">Subject Code</th>
                            <th style="padding: 15px;">Descriptive Title</th>
                            <th style="padding: 15px; text-align: center;">Units</th>
                            <th style="padding: 15px;">Term Taken</th>
                            <th style="padding: 15px;">Prerequisites</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['syllabusData'] as $course): ?>
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 15px; font-weight: bold; color: #003366;"><?= $course['code'] ?></td>
                                <td style="padding: 15px;"><?= $course['description'] ?></td>
                                <td style="padding: 15px; text-align: center;"><span style="font-weight: bold;"><?= $course['units'] ?>.0</span></td>
                                <td style="padding: 15px; color: #666; font-size: 13px;"><?= $course['term_taken'] ?></td>
                                <td style="padding: 15px;">
                                    <?php if (!empty($course['prerequisites'])): ?>
                                        <span style="color: #dc3545; font-size: 12px; font-weight: 600;"><?= $course['prerequisites'] ?></span>
                                    <?php else: ?>
                                        <span style="color: #28a745; font-size: 12px;">No Prerequisite</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot style="background: #f8f9fa; font-weight: bold;">
                        <tr>
                            <td colspan="2" style="padding: 15px; text-align: right; color: #003366;">Total Units for this Term:</td>
                            <td style="padding: 15px; text-align: center; color: #003366; font-size: 18px;">
                                <?php
                                $totalUnits = array_sum(array_column($data['syllabusData'], 'units'));
                                echo $totalUnits . '.0';
                                ?>
                            </td>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>

    </main>

    <footer style="background-color: #222; color: #888; padding: 30px; text-align: center; font-size: 12px; border-top: 5px solid #003366;">
        <p>&copy; <?= date('Y') ?> Pangasinan State University. All rights reserved.</p>
        <p>This is a generated student report. For official documents, please visit the Registrar's Office.</p>
    </footer>

</body>

</html>