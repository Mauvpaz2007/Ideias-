<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel 2</title>
      <link
    href=""
  />
</head>
<body>
<style>
 .container-fluid.full-width-container {
            background-color: #b5eac0;
            padding: 25px;
            height: 150px;
            width:100%;
            
 }
   .text-center{
      color: #0f1113ff;
            text-align: center;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 35px;
            margin-top: 30px;
            font-weight: bold;
          
            

   }

     #backButton {
        position:relative;
        background-color:  #b5eac0;
        width: : 60px;
        height:  60px;
        
        border-radius: 50%;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-left: 31%;
            background-color: #b5eac0;
            &:hover {
                background-color: #d5e9d8ff;
            }


     }

     #backButton img{
        width: 30px;
        height: 30px;
     }



   </style>        
   
   <div class="container-fluid full-width-container">
        <h1 class="text-center">NIVEL 2</h1>
    </div>

    <button id="backButton" aria-label="Voltar à página anterior" title="Voltar">
        <img src="retorno.png" alt="retorno">


         <script>
    document.getElementById('backButton').addEventListener('click', function () {
      window.history.back();
    });
  </script>
   
</body>
</html>