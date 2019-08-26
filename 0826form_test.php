<?php include __DIR__ . '/__0819header.php' ?>
<?php
$data1 = [
    '2' => '蘋果',
    '3' => '鳳梨',
    '5' => '香蕉',
    '9' => '楊桃',
];

$fruit_a = empty($_POST['fruita']) ? [] : $_POST['fruita'];
$fruit_b = empty($_POST['fruitb']) ? [] : $_POST['fruitb'];
$fruit_c = empty($_POST['fruitc']) ? [] : $_POST['fruitc'];

?>
<div class="container">
    <div>
        <pre>
            <?php
            if (!empty($_POST))
                print_r($_POST);
            ?>
        </pre>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="form-group">
            <?php foreach ($data1 as $k => $v) : ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="fruit-a-<?= $k ?>" value="<?= $k ?>" name="fruita[]" <?= in_array($k, $fruit_a) ? "checked" : "" ?>>
                <label class="form-check-label" for="<?= $k ?>"><?= $v ?></label>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="form-group">
            <?php
            $i = 0;
            foreach ($data1 as $k => $v) : ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fruitb" id="fruit-b-<?= $k ?>" value="<?= $k ?>" <?= $i == 0 ? "checked" : "" ?> <?= $k == $fruit_b ? "checked" : "" ?>>
                <label class="form-check-label" for="fruit-b-<?= $k ?>"><?= $v ?></label>
            </div>
            <?php
                $i++;
            endforeach; ?>
        </div>

        <div class="form-group">
            <label for="fruitc">Example select</label>
            <select class="form-control" id="fruitc" name="fruitc" <?= $k == $fruit_c ? "selected" : "" ?>>
                <!--    <option value="">--請選擇--</option>  -->
                <?php foreach ($data1 as $k => $v) : ?>
                <option value="<?= $k ?>"><?= $v ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>








</div>
<?php include __DIR__ . '/__0819footer.php' ?>