<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/login.css">

        <script src="/app.js"></script>
        
    </head>
    <body>


        <header class="w3-padding">

            

            <a href="/">Return to My Portfolio</a>

        </header>

        <hr>

        <div class="w3-padding container">

            <form method="post" action="/console/login" novalidate>
            <h1 class="w3-text-red">Portfolio Console</h1>

                <?= csrf_field() ?>

                <div class="w3-margin-bottom form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= old('email') ?>" required>
                    
                    <?php if($errors->first('email')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" required>

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn">Log In</button>

            </form>

                    </div>

    </body>
</html>


        