<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <?php 
    
    $Lama = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD" ];
    
    ?>

    <h3>Macam-Macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($Lama as $lm) : ?>
                <li>
                    <?= "$lm"; ?>
                </li>
        <?php endforeach ?>
    </ol>

    <?php 
    
    $Lama[] = "Card Reader";
    $Lama[] = "Modem";
    sort($Lama);
    ?>
    <h3>Macam-Macam perangkat keras komputer baru</h3>
    <ol>
    <?php foreach ($Lama as $lm) : ?>
                <li>
                    <?= "$lm"; ?>
                </li>
        <?php endforeach ?>
    </ol>
</body>
</html>