<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Poker Chance Calculator</title>
</head>
<body>

<div class="row">
    <div class="container">


        <div class="col-md-6 col-md-offset-3">
            <div class="card-select panel panel-default " style="margin-top: 40px">

                <div class="panel-heading"><?php echo $selected_card['suit'] . $selected_card['value']; ?></div>
                <div class="panel-body">

                    <?php if (!$is_finished) : ?>

                        <form action="/poker/draft" class="" method="post">
                            <input type="submit" class="btn btn-large btn-success" value="Draft a Card">
                        </form>

                        <?php echo 'Chance :' . $chance; ?>

                    <?php else: ?>
                        <p>Got It, the chance was <?php echo $chance ?></p>
                        <a href="/poker/index" class="btn btn-success btn-lg">Restart Game</a>
                    <?php endif ?>


                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>