    <?php include __DIR__ . '/__0819header.php'; ?>
    <?php include __DIR__ . '/__0819nav.php'; ?>
    <div class="container">
    <?php
    require __DIR__ . '/content.php';

    $stmt = $pdo->query("SELECT * FROM `address_book`");

    while ($A = $stmt->fetch()) {
        echo "{$A['name']}{$A['email']} <br>";
    } ?>
    </div>
    <?php include __DIR__ . '/__0819footer.php'; ?>

