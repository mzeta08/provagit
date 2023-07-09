<!DOCTYPE html>
<html>
<head>
    <title>Esempio di Integrazione PHP e jQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Esempio di Integrazione PHP e jQuery</h1>

    <button id="btn">Carica Dati dal Server</button>

    <div id="risultato"></div>

    <script>
        $(document).ready(function() {
            $('#btn').click(function() {
                $.ajax({
                    url: 'dati.php',
                    type: 'GET',
                    success: function(response) {
                        $('#risultato').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
