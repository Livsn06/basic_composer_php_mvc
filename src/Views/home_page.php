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
                <li style="margin-left: 25px;"><a href="/" style="text-decoration: none; color: #003366; font-weight: 700;">Home</a></li>
                <li style="margin-left: 25px;"><a href="/about" style="text-decoration: none; color: #6d6d6d; font-weight: 600;">About</a></li>
                <li style="margin-left: 25px;"><a href="#" style="text-decoration: none; color: #6d6d6d; font-weight: 600;">Academics</a></li>
                <li style="margin-left: 25px;"><a href="#" style="text-decoration: none; color: #6d6d6d; font-weight: 600;">Admission</a></li>
            </ul>
        </nav>
    </header>

    <section style="background: linear-gradient(rgba(0, 51, 102, 0.51), rgba(0, 51, 102, 0.7)), url('/assets/images/psu-bg.png'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 400px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center;">
        <h2 style="font-size: 48px; margin-bottom: 10px;">The Region's Premier University</h2>
        <p style="font-size: 20px; max-width: 700px;">Committed to provide quality education and produce globally competitive professionals.</p>
        <button style="margin-top: 20px; padding: 12px 30px; background-color: #ffcc00; border: none; color: #003366; font-weight: bold; cursor: pointer; border-radius: 5px; text-transform: uppercase;">View More</button>
    </section>

    <main style="background-color: #fff; padding: 0; font-family: 'Segoe UI', Arial, sans-serif;">

        <section style="display: flex; flex-wrap: wrap; background-color: #003366; color: white;">
            <div style="flex: 1; min-width: 300px; padding: 60px 50px; background: linear-gradient(45deg, #002244, #003366); border-right: 1px solid rgba(255,255,255,0.1);">
                <h2 style="color: #ffcc00; text-transform: uppercase; font-size: 14px; letter-spacing: 2px; margin-bottom: 10px;">Our Ambition</h2>
                <h3 style="font-size: 32px; margin: 0 0 20px 0;"><?php echo $data['visionData']['title']; ?></h3>
                <p style="font-size: 20px; line-height: 1.6; color: #e0e0e0; font-style: italic; max-width: 500px;">
                    "<?php echo $data['visionData']['description']; ?>"
                </p>
            </div>
            <div style="flex: 1; min-width: 300px; padding: 60px 50px; background-color: #002b55;">
                <h2 style="color: #ffcc00; text-transform: uppercase; font-size: 14px; letter-spacing: 2px; margin-bottom: 10px;">Our Purpose</h2>
                <h3 style="font-size: 32px; margin: 0 0 20px 0;"><?php echo $data['missionData']['title']; ?></h3>
                <p style="font-size: 18px; line-height: 1.8; color: #fff; max-width: 500px;">
                    <?php echo $data['missionData']['description']; ?>
                </p>
            </div>
        </section>

        <section style="background-color: #003366; padding: 80px 50px; color: white;">
            <div style="max-width: 1200px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 50px;">
                    <h2 style="font-size: 36px; color: #ffcc00; margin-bottom: 10px;"><?php echo $data['coreValuesData']['title']; ?></h2>
                    <div style="width: 60px; height: 3px; background: white; margin: 0 auto; opacity: 0.5;"></div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                    <?php foreach ($data['coreValuesData']['items'] as $value):
                        $parts = explode(' – ', $value); // Splitting name from description
                    ?>
                        <div style="background: rgba(255,255,255,0.05); padding: 30px; border: 1px solid rgba(255,255,255,0.1); border-top: 4px solid #ffcc00;">
                            <div style="font-size: 24px; font-weight: bold; color: #ffcc00; margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                                <span style="background: #ffcc00; color: #003366; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 4px; font-size: 16px;">
                                    <?php echo substr($parts[0], 0, 1); ?>
                                </span>
                                <?php echo $parts[0]; ?>
                            </div>
                            <p style="margin: 0; font-size: 15px; color: #ccc; line-height: 1.6;">
                                <?php echo isset($parts[1]) ? $parts[1] : ''; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section style="max-width: 1200px; margin: 80px auto; padding: 0 50px;">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 style="font-size: 36px; color: #003366; margin-bottom: 10px;"><?php echo $data['goalData']['title']; ?></h2>
                <div style="width: 80px; height: 5px; background: #ffcc00; margin: 0 auto;"></div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                <?php foreach ($data['goalData']['items'] as $index => $item): ?>
                    <div style="display: flex; align-items: flex-start; gap: 20px; padding: 25px; background: #fdfdfd; border: 1px solid #eee;">
                        <span style="font-size: 40px; font-weight: bold; color: rgba(0, 51, 102, 0.1); line-height: 1;"><?php echo sprintf("%02d", $index + 1); ?></span>
                        <p style="margin: 0; color: #444; font-size: 16px; line-height: 1.5; font-weight: 500;">
                            <?php echo $item; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section style="background-color: #f4f4f4; border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; padding: 80px 50px;">
            <div style="max-width: 900px; margin: 0 auto; position: relative;">
                <span style="position: absolute; top: -40px; left: -20px; font-size: 100px; color: #ffcc00; opacity: 0.3; font-family: serif;">&ldquo;</span>
                <h2 style="color: #003366; font-size: 28px; margin-bottom: 30px; text-align: center;"><?php echo $data['policyData']['title']; ?></h2>
                <div style="background: white; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 2px;">
                    <?php foreach ($data['policyData']['items'] as $item): ?>
                        <div style="margin-bottom: 25px; display: flex; gap: 20px;">
                            <div style="min-width: 10px; height: 10px; background: #ffcc00; margin-top: 8px; border-radius: 50%;"></div>
                            <p style="margin: 0; font-size: 17px; color: #555; line-height: 1.7;"><?php echo $item; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

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