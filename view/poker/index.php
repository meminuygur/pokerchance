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

                    <form action="/poker/start" class="form-control" method="post">
                    <select name="suit" id="">
                        <option value="H">Heart</option>
                        <option value="S">Spade</option>
                        <option value="D">Diamonds</option>
                        <option value="C">Clubs</option>
                    </select>

                    <select name="value" id="">
                        <option value="A">A</option>
                        <option value="K">K</option>
                        <option value="Q">Q</option>
                        <option value="J">J</option>
                        <option value="10">10</option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                    </select>

                        <input type="submit" class="button button-large button-success" value="Play">
                    </form>


                </div>

            </div>
        </div>
    </div>

</body>
</html>