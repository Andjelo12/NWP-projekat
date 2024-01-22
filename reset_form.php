<?php
require_once 'config.php';
require_once 'functions_def.php';
if (isset($_GET['token'])) {
    $token = trim($_GET['token']);
    $email=getEmail($pdo, $token);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>

    <title>Reset lozinke</title>
</head>
<body>
<div class="container">
    <div class="row m-2">
        <div class="col-6 p-3">
            <h1>Reset lozinke</h1>
            <form action="forget.php" method="post" id="resetForm">
                <input type="hidden" name="resetEmail" value="<?php echo $email?>">

                <div class="pt-3 field">
                    <label for="resetPassword" class="form-label">Lozinka <i class="bi bi-eye-slash-fill"
                                                                                 id="passwordEye"></i></label>
                    <input type="password" class="form-control passwordVisibiliy" name="resetPassword" id="resetPassword"
                           placeholder="Lozinka (min 8 karaktera)">
                    <small></small>
                    <span id="strengthDisp" class="badge displayBadge">Slaba</span>
                </div>

                <div class="pt-3 field">
                    <label for="resetPasswordConfirm" class="form-label">Potvrdite lozinku <i class="bi bi-eye-slash-fill"
                                                                                              id="passwordEye2"></i></label>
                    <input type="password" class="form-control passwordVisibiliy2" name="resetPasswordConfirm" id="resetPasswordConfirm"
                           placeholder="Ponovite lozinku">
                    <small></small>
                </div>

                <div class="pt-3">
                    <input type="hidden" name="action" value="resetPassword">
                    <input type="hidden" name="token" value="<?php echo $token ?>">
                    <button type="submit" class="btn btn-primary">Pošalji</button>
                    <button type="reset" class="btn btn-primary resetButton">Otkaži</button>
                </div>
            </form>

            <?php
            $rf = 0;

            if (isset($_GET["rf"]) and is_numeric($_GET['rf'])) {
                $rf = (int)$_GET["rf"];

                if (array_key_exists($rf, $messages)) {
                    echo '
                    <div class="alert alert-info alert-dismissible fade show m-3" role="alert">
                        ' . $messages[$rf] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    ';
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>