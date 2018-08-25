
<?php require_once 'vendor/autoload.php'; ?>
<?php
use xreload\Xreload;
use xreload\Datas;
use xreload\Str;
Xreload::init();
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles.css" rel="stylesheet">
<body>
    <form method=POST >
    <div class=header>
        <input type=submit value=save class=button>
        <span class=saved><?= Str::saved() ?></span>
    </div>

    <?php foreach(Datas::get() as $i => $row): ?>
    <div>
        <input
            type="checkbox"
            name="checkboxes[]"
            id="<?= $i ?>"
            class="regular-checkbox" value="<?= $row->name ?>"
            <?= Str::checked($row->name) ?>
            tabindex="<?= $i ?>"
            >
        <label
            for="<?= $i ?>">
            <?= $row->name ?> - <?= Str::upper($row->color) ?> <?= Str::msg($row->msg) ?>
        </label>

    </div>
    <?php endforeach; ?>
</form>
</body>
</html>
