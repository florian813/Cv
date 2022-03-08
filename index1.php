
<html>
    <head>

            <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equip="X-UA-Compatible" content="ie=edge">
            <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    </head>

    <body id="body" style="background:white ; color=#191A19;">
        <header>
            <?php include("pages/navbar.html"); ?>
        </header>
                fsdfd

        <?php include("pages/footer.php")?>
        <script>
            function darkFunction() {
                var body = document.body;
                
                if(body.style.background=="white"){
                    body.style.background="#191A19";
                    body.style.color="white";
                    document.getElementById("light-button").textContent="light mode";
                }else{
                    body.style.background="white";
                    body.style.color="#191A19";
                    document.getElementById("light-button").textContent="dark mode";
                }
            }
        </script>

    </body>

</html>