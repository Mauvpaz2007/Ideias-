<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontro Vocálico</title>
      <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"
  />
</head>
<body>
   <style>
      body{
            background-color: #f0f0f0;



       }
       
       .container-fluid.full-width-container {
            background-color: #b5eac0;
            padding: 20px;
            height: 120px;
          

        }
        .text-center{
            color: #131414ff;
            text-align: center;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 35px;
            margin-top: 10px;
            font-weight: bold;


        }

        #audioBtn {
            font-size: 24px;
            padding: 10px 20px;
            height: 100px;
            width: 100px;
            bottom: 20px;
            cursor: pointer;
            border: black 2px solid;
            margin-top: 200px;
            border-radius: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
              background-color: #46cf62ff;
            &:hover {
                background-color: #7d857eff;
            }
            
        }
       
    </style>


<div class="container-fluid full-width-container">
        <h1 class="text-center">Alfabetizador - ENCONTROS VOCÁLICOS</h1>
    </div>

    <div class="container text-center mt-4">
        <button id="audioBtn" class="btn btn-success">
            🔊 AI
        </button>
        <audio id="audioPlayer" src="audio/exemplo.mp3"></audio>
    </div>
    <script>
        document.getElementById('audioBtn').addEventListener('click', function() {
            var audio = document.getElementById('audioPlayer');
            audio.play();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     
</body>
</html>