<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Poker Chance Calculator</title>
</head>
<body>

<div class="row">
    <div class="container">

        <div class="card-select panel panel-default">

            <div class="panel-body">

                <?php if( !$is_finished ) :?>

                <form action="/poker/draft" class="form-control" method="post">
                    <input type="submit" class="button button-large button-success" value="Draft a Card">
                </form>
                    <?php echo 'Chance :'.$chance; ?>
                <?php else:?>
                    <p>Got It, the chance was <?php echo $chance ?></p>
                    <a href="/poker/index">Restart Game</a>
                <?php endif?>


            </div>

        </div>
    </div>
</div>

</body>
</html>