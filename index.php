<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <form action='file.php?newparam=34345' id='our_form'>
                <p>Имя *:
                    <input type="text" required="true" minlength="3" name="user_name" class="form-control" >
                </p>
                <p>Email *:
                    <input type="email" name="user_email" class="form-control">
                </p>
                <input type="submit" name="send_button" value="Отправить данные" class="btn btn-success" >
            </form>
        </div>
    </body>
</html>
