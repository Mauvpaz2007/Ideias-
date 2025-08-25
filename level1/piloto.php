<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfabetizador - Nível 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Comic Sans MS', 'Comic Sans', cursive;
        }
        .navbar {
            background-color: #b5eac0;
            width: 100vw;
            height: 12vh;
            padding-bottom: 1vh;
        }
        .container-fluid {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 10vh;
            padding-bottom: 1vh;
            padding-left: 1vw;
        }
        .top_title {
            font-size: 3rem;
            font-family: 'Comic Sans MS', 'Comic Sans', cursive;
            margin-top: -1vh;
            margin-left: 1vw;
            margin-bottom: 1vh;
        }
        .layout-center {
            max-width: 640px;
            margin: 1rem auto 3rem auto;
            text-align: center;
        }
        .btn-sound {
            background-color: #a2d9a1;
            border: none;
            width: 72px;
            height: 72px;
            border-radius: 0.5rem;
            font-size: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 140px;
        }
        .btn-sound:hover, .btn-sound:focus {
            background-color: #8ac48d;
            outline: none;
        }
        .letter {
            background-color: transparent;
            border: none;
            width: 72px;
            height: 72px;
            border-radius: 0.5rem;
            font-weight: 900;
            font-size: 36px;
            font-family: 'Fredoka One', cursive, Arial, sans-serif;
            user-select: none;
            cursor: default;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 140px;
        }
        .back-btn {
            margin-top: 20px;
            width: 56px;
            height: 56px;
            font-size: 32px;
            font-weight: 700;
            border-radius: 0.5rem;
            background-color: #a2d9a1;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.2s;

        }
        .back-btn:hover,
        .back-btn:focus {
            background-color: #8ac48d;
            outline: none;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1"><h2 class="top_title">Alfabetizador</h2></span>
        </div>
    </nav>

    <main class="container layout-center">
        <div class="row justify-content-center gy-4">
            <div class="col-4 d-flex justify-content-end align-items-center">
                <div class="letter me-2" aria-label="Letra A" title="Letra A">A</div>
                <button class="btn-sound small-sound-btn" data-letter="A" aria-label="Ouvir som da letra A" title="Ouvir som da letra A">
                    <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M3 9v6h4l5 5V4L7 9H3z" fill="currentColor"></path>
                        <path d="M16.5 12c0-1.77-.96-3.29-2.4-4.11v8.22A4.497 4.497 0 0 0 16.5 12z" fill="currentColor"></path>
                        <path d="M19 12c0-3.04-1.64-5.64-4-7.03v2.06a5.974 5.974 0 0 1 0 9.94v2.06c2.36-1.39 4-3.99 4-7.03z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
            <div class="col-4 d-flex justify-content-between align-items-center">
                <div class="letter me-2" aria-label="Letra I" title="Letra I" style="margin-left: 30px;">I</div> <!-- Aumentei a margem à esquerda -->
                <button class="btn-sound small-sound-btn" data-letter="I" aria-label="Ouvir som da letra I" title="Ouvir som da letra I">
                    <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M3 9v6h4l5 5V4L7 9H3z" fill="currentColor"></path>
                        <path d="M16.5 12c0-1.77-.96-3.29-2.4-4.11v8.22A4.497 4.497 0 0 0 16.5 12z" fill="currentColor"></path>
                        <path d="M19 12c0-3.04-1.64-5.64-4-7.03v2.06a5.974 5.974 0 0 1 0 9.94v2.06c2.36-1.39 4-3.99 4-7.03z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
            <div class="col-4 d-flex justify-content-start align-items-center">
                <div class="letter me-2" aria-label="Letra U" title="Letra U">U</div>
                <button class="btn-sound small-sound-btn" data-letter="U" aria-label="Ouvir som da letra U" title="Ouvir som da letra U">
                    <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M3 9v6h4l5 5V4L7 9H3z" fill="currentColor"></path>
                        <path d="M16.5 12c0-1.77-.96-3.29-2.4-4.11v8.22A4.497 4.497 0 0 0 16.5 12z" fill="currentColor"></path>
                        <path d="M19 12c0-3.04-1.64-5.64-4-7.03v2.06a5.974 5.974 0 0 1 0 9.94v2.06c2.36-1.39 4-3.99 4-7.03z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center mt-3">
                <div class="letter me-2" aria-label="Letra E" title="Letra E">E</div>
                <button class="btn-sound small-sound-btn" data-letter="E" aria-label="Ouvir som da letra E" title="Ouvir som da letra E">
                    <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M3 9v6h4l5 5V4L7 9H3z" fill="currentColor"></path>
                        <path d="M16.5 12c0-1.77-.96-3.29-2.4-4.11v8.22A4.497 4.497 0 0 0 16.5 12z" fill="currentColor"></path>
                        <path d="M19 12c0-3.04-1.64-5.64-4-7.03v2.06a5.974 5.974 0 0 1 0 9.94v2.06c2.36-1.39 4-3.99 4-7.03z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
            <div class="col-4 d-flex justify-content-start align-items-center mt-3">
                <div class="letter me-2" aria-label="Letra O" title="Letra O">O</div>
                <button class="btn-sound small-sound-btn" data-letter="O" aria-label="Ouvir som da letra O" title="Ouvir som da letra O">
                    <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M3 9v6h4l5 5V4L7 9H3z" fill="currentColor"></path>
                        <path d="M16.5 12c0-1.77-.96-3.29-2.4-4.11v8.22A4.497 4.497 0 0 0 16.5 12z" fill="currentColor"></path>
                        <path d="M19 12c0-3.04-1.64-5.64-4-7.03v2.06a5.974 5.974 0 0 1 0 9.94v2.06c2.36-1.39 4-3.99 4-7.03z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Back button -->
        <button id="btn-back" class="back-btn mt-4" aria-label="Voltar" title="Voltar">
            &#x21a9;
        </button>
    </main>

    <script>
        // Sounds for each vowel
        const sounds = {
            A: new Audio('caminho/para/seu/audio/letra_a.mp3'),
            E: new Audio('letra a (online-audio-converter.com).mp3'),
            I: new Audio('caminho/para/seu/audio/letra_i.mp3'),
            O: new Audio('caminho/para/seu/audio/letra_o.mp3'),
            U: new Audio('caminho/para/seu/audio/letra_u.mp3'),
            CENTRAL: new Audio('https://actions.google.com/sounds/v1/cartoon/cartoon_boing.ogg'),
        };

        // Play sound for a given letter
        function playSound(letter) {
            if (sounds[letter]) {
                sounds[letter].currentTime = 0;
                sounds[letter].play();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Play central sound button - cycle through vowels sounds in order
            const centralBtn = document.getElementById('play-central-sound');
            const vowelsOrder = ['A', 'E', 'I', 'O', 'U'];
            let vowelIndex = 0;

            centralBtn.addEventListener('click', () => {
                playSound(vowelsOrder[vowelIndex]);
                vowelIndex = (vowelIndex + 1) % vowelsOrder.length;
            });

            // Play individual vowel sounds on small sound buttons
            document.querySelectorAll('.btn-sound.small-sound-btn').forEach((btn) => {
                btn.addEventListener('click', () => {
                    const letter = btn.getAttribute('data-letter');
                    playSound(letter);
                });
            });

            // Back button action
            document.getElementById('btn-back').addEventListener('click', () => {
                alert('Voltar pressionado. Implementar navegação conforme necessário.');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
<?php
// Recupera as opções salvas na sessão (ou cookies)
$corMenu = isset($_SESSION['corMenu']) ? $_SESSION['corMenu'] : '#b5eac0';
$petImagem = isset($_SESSION['petImagem']) ? $_SESSION['petImagem'] : 'petCat.gif';
?>

<script>
// Aplica cor do menu dinamicamente
document.addEventListener('DOMContentLoaded', function() {
    var navbar = document.querySelector('.navbar');
    if (navbar) {
        navbar.style.backgroundColor = "<?php echo $corMenu; ?>";
    }
});
</script>
