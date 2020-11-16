<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="big-info bg-light">
        <?php 
            require_once './db/weather.php';
            require './data.php';
        ?>
        <div class="container">
            <h1 class="pt-1 pl-5 pr-5">Weather forecast
            <img src="https://freepngimg.com/thumb/weather/23648-2-weather-picture-thumb.png" class="pl-5"></h1>
            <hr class="bg-dark">
            <?php require_once "./display.php"?>
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#country").change(function(){
                        var cid = $("#country").val();
                        $.ajax({
                            url: 'data.php',
                            method: 'post',
                            data: 'cid=' + cid
                        }).done(function(state){
                            $('#city').empty();
                            $('#city').append("<option>Select City</option>")
                            $('#date').empty();
                            $('#date').append("<option>Select Date</option>")
                            $('#display').empty();
                            $('#state').html(state);
                        })
                    })

                    $("#state").change(function(){
                        var sid = $("#state").val();
                        $.ajax({
                            url: 'data.php',
                            method: 'post',
                            data: 'sid=' + sid
                        }).done(function(city){
                            $('#date').empty();
                            $('#display').empty();
                            $('#date').append("<option>Select Date</option>")
                            $('#city').html(city);
                        })
                    })

                    $("#city").change(function(){
                        var city_id = $("#city").val();
                        $.ajax({
                            url: 'data.php',
                            method: 'post',
                            data: 'city_id=' + city_id
                        }).done(function(date){
                            $('#display').empty();
                            $('#date').html(date);
                        })
                    })

                    $("#date").change(function(){
                        var tid = $("#date").val();
                        $.ajax({
                            url: 'data.php',
                            method: 'post',
                            data: 'tid=' + tid
                        }).done(function(temp){
                            $('#display').html(temp);
                        })
                    })
                })
	        </script>
        </div>
    </body>
</html>