<?php
    $pokec = 'ditto';
    $poka = file_get_contents("https://pokeapi.co/api/v2/pokemon/$pokec");
    $pokeapi = file_get_contents("https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0");
    $pokeapiButBetter = json_decode($pokeapi,true);; 
    $pokaButBetter = json_decode($poka,true);
    
    for ($i=0; $i < 4; $i++) { 
        $pokemon = $pokeapiButBetter['results'][$i];

        $todas_as_api = file_get_contents($pokemon['url']);
        $smol[] = json_decode($todas_as_api,true); 
    }
?>



<html>
<head>
    <title>Pokedex</title>

    <style>
        #pesquisa {
            background: #c92626;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
            
            text-align: center;
            
        }

        #pesquisa input{
            width: 300px;
            padding-top: 10px;
            padding-bottom:10px;
        }
        .pokemon {
            background: #cabc63;
            width: 20%;
            border: solid 4px ;
            padding: 5px;
            margin: 10px;
            float: left;
        }
        .pokemon img {
            max-width: 50%;
        }

    </style>


</head>
<body>
    <div id="pesquisa">
        <form method = "get">
            <input type="text" name = "campo_busca" placeholder = "Escolhe um pokémon aí"> 
            <input type="submit" value = "buscar">
        
        </form>




    </div>        
    <div id="pokemons">


        <?php for($i=0; $i < 4; $i++): ?>
            
        
        <div class="pokemon">
            <img src=<?= $smol[$i]['sprites']['other']['home']['front_default']    ?> alt="HA" width="400px">
            <h1><?= $pokeapiButBetter['results'][$i]['name'];  ?></h1>
            <p>peso: <?=  $smol[$i]['weight']/10 . "kg" ?></p>
            <p>altura: <?=  $smol[$i]['height']/10 ."m" ?></p>
        </div>

    </div>
        <?php endfor; ?>            


</body>
</html>
