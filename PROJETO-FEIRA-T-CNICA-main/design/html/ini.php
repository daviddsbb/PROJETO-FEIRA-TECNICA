<?php 
    include('conexao.php');
    $procurar = $_GET['busca'];
    $sql_cod = "SELECT * FROM filmes WHERE  filme LIKE '%$procurar%'";

    $sql_query = $mysqli -> query($sql_cod);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfinityHUB</title>
    <link rel="stylesheet" href="../css/ini.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../img/icons8-infinito-96.png" alt="RateHub Logo">
        </div>
        <div class="menu">
            <span>Menu</span>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Pesquisar na Biblioteca" name="busca" id="busca">
            <button type="submit">
              <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Magnifying_glass_icon.svg" alt="Lupa">
            </button>
          </div>
        <div class="right-menu">
            <span>Lista de favoritos</span>
            <a style="text-decoration: none; color: aliceblue;" href="desconectar.php"><span>sair</span></a> <!-- por algum caralhos de motivo quando eu coloco text decoration none no css, buga a barra de pesquisa, nao julguem -->
        </div>
    </nav>
    <hr class="espacamento">
    <div class="top-ten-section">
        <h2 class="styletext">Top 10 no InfinityHUB!</h2>
        <div class="top-ten-container">
            <button class="prev-button">&#10094;</button> 
            <div class="top-ten-grid">
                
                <div class="movie-card">
                    <img src="../capaFILMES/1.jpg" alt="Alien: Romulus">
                    <div class="movie-info">
                        <h3>1. Alien: Romulus</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/2.jpeg" alt="Deadpool & Wolverine">
                    <div class="movie-info">
                        <h3>2. Deadpool & Wolverine</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/3.jpg" alt="A Liga">
                    <div class="movie-info">
                        <h3>3. A Liga</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/4.jpg" alt="É Assim que Acaba">
                    <div class="movie-info">
                        <h3>4. É Assim que Acaba</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/5.png" alt="Furiosa: Uma Saga...">
                    <div class="movie-info">
                        <h3>5. Furiosa: Uma Saga...</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/6.jpeg" alt="Twisters">
                    <div class="movie-info">
                        <h3>6. Twisters</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/7.jpg" alt="Duna: Parte 2">
                    <div class="movie-info">
                        <h3>7. Duna: Parte 2</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/8.jpg" alt="Stree 2: Sarkate Ka">
                    <div class="movie-info">
                        <h3>8. Stree 2: Sarkate Ka</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/9.jpg" alt="Kalki 2898-AD">
                    <div class="movie-info">
                        <h3>9. Kalki 2898-AD</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/10.jpeg" alt="A Casa do Dragão">
                    <div class="movie-info">
                        <h3>10. A Casa do Dragão</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/11.jpg" alt="Acima de Qualquer Suspeita">
                    <div class="movie-info">
                        <h3>11. Acima de Qualquer Suspeita</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="../capaFILMES/12.jpg" alt="Alien - O 8º Passageiro">
                    <div class="movie-info">
                        <h3>12. Alien - O 8º Passageiro</h3>
                        <button>+ Lista</button>
                        <button>Trailer</button>
                    </div>
                </div>
            </div>
            <button class="next-button">&#10095;</button> 
        </div>
    </div>
    <script src="../js/ini.js"></script>
</body>
</html>
