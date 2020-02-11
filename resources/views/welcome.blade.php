<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <form method="POST" action="/index.php/api/clients">
                <input typr="text" name="first_name" placeholder="First name">
                <input typr="text" name="last_name" placeholder="Last name">
                <input typr="text" name="email" placeholder="Email">
                <input typr="password" name="password" placeholder="Password">
                <button type="submit">Add client</button>
            
            </form>
        </div>
        <div class="flex-center position-ref full-height">
            <form method="POST" action="/index.php/api/products">
                <input typr="text" name="name" placeholder="Name">
                <textarea name="description" placeholder="Description"></textarea>
                
                <select name="status">
                    <option value="planned">planned</option>
                    <option value="running">running</option>
                    <option value="on hold">on hold</option>
                    <option value="finished">finished</option>
                    <option value="cancel">cancel</option>
                </select>
                <button type="submit">Add product</button>
            
            </form>
        </div>
    </body>
</html>
