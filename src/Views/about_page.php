<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangasinan State University Style UI</title>
</head>

<body style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f4;">

    <div style="background-color: #003366; color: white; padding: 10px 50px; display: flex; justify-content: space-between; align-items: center; font-size: 14px;">
        <span>Announcements: Enrollment for Second Semester is now open!</span>
        <div>
            <a href="/portal" style="color: white; text-decoration: none; margin-left: 15px;">Student Portal</a>
            <a href="#" style="color: white; text-decoration: none; margin-left: 15px;">Library</a>
        </div>
    </div>

    <header style="background-color: #ffffff; padding: 20px 50px; display: flex; justify-content: space-between; align-items: center; border-bottom: 4px solid #ffcc00; position: sticky; top: 0; z-index: 1000;">
        <div style="display: flex; align-items: center; gap: 10px;">
            <img src="/assets/images/psu-logo.png" alt="psu logo" style="width: 50px; height: 50px;">
            <h1 style="margin: 0; font-size: 24px; color: #003366; text-transform: uppercase; letter-spacing: 1px;">Pangasinan State University</h1>
        </div>
        <nav>
            <ul style="list-style: none; display: flex; margin: 0; padding: 0;">
                <li style="margin-left: 25px;"><a href="/" style="text-decoration: none; color: #6d6d6d; font-weight: 600;">Home</a></li>
                <li style="margin-left: 25px;"><a href="/about" style="text-decoration: none; color: #003366; font-weight: 700;">About</a></li>
                <li style="margin-left: 25px;"><a href="#" style="text-decoration: none; color: #6d6d6d; font-weight: 700;">Academics</a></li>
                <li style="margin-left: 25px;"><a href="#" style="text-decoration: none; color: #6d6d6d; font-weight: 600;">Admission</a></li>
            </ul>
        </nav>
    </header>


    <main style="padding-bottom: 80px;">

        <section style="background: linear-gradient(rgba(0, 51, 102, 0.85), rgba(0, 51, 102, 0.85)), url('/assets/images/psu-banner.jpg'); background-size: cover; background-position: center; padding: 70px 50px; text-align: center; color: white;">
            <h2 style="margin: 0; font-size: 38px; text-transform: uppercase; letter-spacing: 2px;">Institutional Profile</h2>
            <p style="margin-top: 10px; opacity: 0.9; font-size: 18px;">Pangasinan State University: The Region's Premier University</p>
        </section>

        <div style="max-width: 1200px; margin: -50px auto 60px; padding: 0 20px; display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-top: 6px solid #ffcc00; text-align: center;">
                <h3 style="color: #003366; margin-top: 0; text-transform: uppercase; letter-spacing: 1px;"><?= $visionData['title'] ?></h3>
                <p style="color: #555; line-height: 1.8; font-size: 18px; font-style: italic;">
                    "<?= $visionData['description'] ?>"
                </p>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-top: 6px solid #003366; text-align: center;">
                <h3 style="color: #003366; margin-top: 0; text-transform: uppercase; letter-spacing: 1px;"><?= $missionData['title'] ?></h3>
                <p style="color: #555; line-height: 1.8; font-size: 17px;">
                    <?= $missionData['description'] ?>
                </p>
            </div>
        </div>

        <div style="max-width: 1200px; margin: 0 auto 70px; padding: 0 20px;">
            <div style="background: #003366; border-radius: 15px; padding: 50px; color: white; text-align: center; position: relative; overflow: hidden;">
                <h2 style="color: #ffcc00; margin-top: 0; text-transform: uppercase; margin-bottom: 40px;"><?= $coreValuesData['title'] ?></h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; text-align: left;">
                    <?php foreach ($coreValuesData['items'] as $value):
                        $parts = explode(' – ', $value); // Splitting the bold title from the description
                    ?>
                        <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 10px; border-left: 4px solid #ffcc00;">
                            <strong style="color: #ffcc00; display: block; margin-bottom: 5px; font-size: 16px;"><?= $parts[0] ?></strong>
                            <span style="font-size: 14px; opacity: 0.9; line-height: 1.4;"><?= $parts[1] ?? '' ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div style="max-width: 1100px; margin: 0 auto 70px; padding: 0 20px;">
            <h2 style="color: #003366; text-align: center; margin-bottom: 30px; text-transform: uppercase; border-bottom: 3px solid #ffcc00; display: inline-block; padding-bottom: 10px;">University Strategic Goals</h2>
            <div style="background: white; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); overflow: hidden; border: 1px solid #eee;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tbody>
                        <?php foreach ($goalData['items'] as $index => $goal): ?>
                            <tr style="border-bottom: 1px solid #f0f0f0;">
                                <td style="padding: 25px; width: 80px; text-align: center; background: #f9f9f9; font-weight: 800; color: #003366; font-size: 20px;">
                                    <?= $index + 1 ?>
                                </td>
                                <td style="padding: 25px; color: #444; font-size: 16px; line-height: 1.6;">
                                    <?= $goal ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="max-width: 1100px; margin: 0 auto; padding: 0 20px;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h2 style="color: #003366; text-transform: uppercase; margin: 0;"><?= $policyData['title'] ?></h2>
                <p style="color: #777;">Our commitment to Excellence and ASEAN Recognition</p>
            </div>
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <?php foreach ($policyData['items'] as $policy): ?>
                    <div style="background: white; padding: 30px; border-radius: 50px; box-shadow: 0 4px 10px rgba(0,0,0,0.03); border: 1px solid #e0e0e0; display: flex; align-items: center; gap: 20px;">
                        <div style="min-width: 40px; height: 40px; background: #ffcc00; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #003366; font-weight: bold;">
                            ✓
                        </div>
                        <p style="margin: 0; color: #555; font-size: 15px; line-height: 1.5;"><?= $policy ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>

    <footer style="background-color: #222; color: #bbb; padding: 40px 50px; text-align: center; border-top: 10px solid #003366;">
        <p>&copy; 2026 Pangasinan State University. All Rights Reserved.</p>
        <div style="margin-top: 10px;">
            <a href="#" style="color: #ffcc00; text-decoration: none;">Privacy Policy</a> |
            <a href="#" style="color: #ffcc00; text-decoration: none; margin-left: 10px;">Contact Us</a>
        </div>
    </footer>

</body>

</html>