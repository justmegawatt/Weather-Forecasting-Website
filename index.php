<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Weather Checker</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <style type="text/css">
            html {
                height: 100%;
            }
            body {
                background-image:
                    linear-gradient(
                        rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)
                    ), url("background.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 100%;
            }
            .container {
                padding-top: 150px;
            }
            .center {
                text-align: center;
            }
            .white {
                color: white;
            }
            p {
                padding: 10px 0;
            }

            button {
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 center white">
                    <h1>Weather Checker</h1>
                    <p>Enter your city below to get a weather forecast.</p>
                    <form type="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="Enter your City, e.g. London, Paris, San Francisco">
                        </div>
                        <button id="checkMyWeather" class="btn btn-primary">Check My Weather</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">

        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>