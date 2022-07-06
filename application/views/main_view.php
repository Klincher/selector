<html>

<head>
    <title>Selector</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mb-2">
            <div class="col-2">
                <form method="post" action="/mark">
                    <select onchange="this.form.submit()" name="type" class="form-select">
                        <?php foreach ($types as $type) { ?>
                            <option value="<?php echo $type['id']; ?>" <?php if (isset($typeId) && $typeId === $type['id']) { ?> selected <?php } ?>><?php echo $type['name']; ?></option>
                        <?php } ?>
                    </select>
            </div>
            <div class="col-1">
                <input type="submit" class="btn btn-primary btn-sm">
            </div>
            </form>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <form method="post" action="/model">
                    <select onchange="this.form.submit()" name="mark" class="form-select">
                        <?php foreach ($marks as $mark) { ?>
                            <option value="<?php echo $mark['id']; ?>" <?php if (isset($markId) && $markId === $mark['id']) { ?> selected <?php } ?>><?php echo $mark['name']; ?></option>
                        <?php } ?>
                    </select>
            </div>
            <input type="hidden" name="type" value="<?php echo $typeId; ?>">
            <div class="col-1">
                <input type="submit" class="btn btn-primary btn-sm">
            </div>
            </form>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <form method="post">
                    <select name="model" class="form-select">
                        <?php foreach ($models as $model) { ?>
                            <option <?php if (isset($_POST['model']) && $_POST['model'] === $model['id']) { ?> selected <?php } ?>><?php echo $model['name']; ?></option>
                        <?php } ?>
                    </select>
                </form>
            </div>
        </div>
    </div>
</body>

</html>