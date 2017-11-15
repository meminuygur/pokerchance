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

                    <div class="panel-heading">Poker Chance Calculator</div>
                    <div class="panel-body clearfix">

                        <form action="/poker/start" method="post">
                            <div class="form-group">

                                <div class="col-sm-4">
                                    <select name="suit" id="" class="form-control">
                                        <option value="H">Heart</option>
                                        <option value="S">Spade</option>
                                        <option value="D">Diamonds</option>
                                        <option value="C">Clubs</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <select name="value" id="" class="form-control">
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
                                </div>

                                <div class="col-sm-4">
                                    <input type="submit" class="btn btn-block button-large btn-success" value="Play">
                                </div>

                            </div>
                    </form>


                </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>