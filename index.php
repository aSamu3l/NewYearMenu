<?php
$menu_file = 'menu.json';
$menu_content = file_get_contents($menu_file);
$menu = json_decode($menu_content, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💥 New Year Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #000000, #1f216e) no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            overflow-x: hidden;
        }
        .menu-section {
            margin-bottom: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .menu-title {
            color: #a632fa;
            text-align: center;
            margin-top: 20px;
            text-transform: uppercase;
        }
        .menu-item {
            font-size: 1.1rem;
            color: #495057;
        }
        .firework1 {
            position: fixed;
            bottom: -10px;
            color: #ffffff;
            font-size: 1.5rem;
            animation: rise1 10s linear infinite;
        }

        @keyframes rise1 {
            0% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
            50% {
                transform: translateY(-50vh) scale(1.5);
                opacity: 1;
            }
            51% {
                transform: translateY(-50vh) scale(4);
                opacity: 1;
            }
            55% {
                transform: translateY(-55vh) scale(0.5);
                opacity: 0;
            }
            100% {
                transform: translateY(-55vh) scale(0.5);
                opacity: 0;
            }
        }

        .firework2 {
            position: fixed;
            bottom: -10px;
            color: #ffffff;
            font-size: 1.5rem;
            animation: rise2 10s linear infinite;
        }

        @keyframes rise2 {
            0% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
            50% {
                transform: translateY(-70vh) scale(1.5);
                opacity: 1;
            }
            51% {
                transform: translateY(-70vh) scale(4);
                opacity: 1;
            }
            55% {
                transform: translateY(-75vh) scale(0.5);
                opacity: 0;
            }
            100% {
                transform: translateY(-75vh) scale(0.5);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center text-info my-4">💥 New Year Menu 💥</h1>

    <?php foreach ($menu as $section => $items): ?>
        <div class="menu-section">
            <h2 class="menu-title"> <?= htmlspecialchars(ucfirst($section)) ?> </h2>
            <ul class="list-group">
                <?php foreach ($items as $item): ?>
                    <li class="list-group-item menu-item"> <?= htmlspecialchars($item) ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>

<!-- Fireworks Effect -->
<div id="fireworks-container" style="position: fixed; bottom: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: -1;">
    <?php for ($i = 0; $i < 25; $i++): ?>
        <div class="firework1 fw" style="left: <?= rand(0, 100) ?>%; animation-duration: <?= rand(5, 15) ?>s; font-size: <?= rand(10, 20) ?>px;">🎆</div>
    <?php endfor; ?>
    <?php for ($i = 0; $i < 25; $i++): ?>
        <div class="firework2 fw" style="left: <?= rand(0, 100) ?>%; animation-duration: <?= rand(5, 15) ?>s; font-size: <?= rand(10, 20) ?>px;">🎆</div>
    <?php endfor; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const fireworks = document.querySelectorAll('.fw');

        fireworks.forEach(firework => {
            const duration = parseFloat(getComputedStyle(firework).animationDuration) * 1000;

            setInterval(() => {
                firework.textContent = firework.textContent === '🎆' ? '💥' : '🎆';
            }, duration / 2);
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
