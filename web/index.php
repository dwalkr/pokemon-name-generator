<!DOCTYPE html>
<html>
    <head>
        <title>Pokemon Name Generator</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css" />
    <head>
    <body>
        <div class="container">
            <h1>Pokemon Name Generator</h1>
            <h2>Your Pokemon's Name Is:</h2>
            <div id="generatedName"></div> 
            <button id="generateName">New Name</button>
        </div>
        <script>
            (function($){
                $(document).ready(function(){
                    $('#generateName').click(function(){
                        $.get('generate.php', function(data){
                            $('#generatedName').text(data);
                        },'text');
                    });
                    $('#generateName').trigger('click');
                });
            })(jQuery);
        </script>
    </body>
</html>
