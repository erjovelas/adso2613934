<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04-Inheritance</title>
    <link rel="stylesheet" href="css/master.css">
    <style>
        section{
            background-color: #0009;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 10px;

            h2 {
                margin: 0;
            } 
            div.pks {
                display: flex;
                gap: 1rem;
                div.pk {
                    background-repeat: no-repeat;
                    display: flex;
                    position: relative;
                    flex-direction: column;
                    height: 308px;
                    overflow: hidden;
                    padding: 4px;
                    width: 141px;
                    img{
                        height: 10rem;
                        align: center;
                    }
                    div.info {
                        background-color: #0009;
                        border-bottom: 2px solid #fffc;
                        color: #fffa;
                        display: flex;
                        flex-direction: column;
                        position: absolute;
                        bottom: -52px;
                        left: 2px;
                        padding: 4px;
                        transition: bottom 0.4s ease-in;
                        width: 128px;
                        span:nth-child(1) {
                            background-color: #0009;
                            color: #fff;
                            text-align: center;
                            margin-bottom: 4px;
                        }
                    }
                }
                div.pk:hover div.info {
                    bottom: 0;
                }
            }
        }
            
    </style>
</head>

<body>
<nav class="controls">
        <a href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#74C0FC" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
        </a>
    </nav>
<main>
    <h1>04-inheritance</h1>
    <section>
        <?php
            class Pokemon{
                //Atributes
                protected $name;
                protected $type;
                protected $healt;
                protected $img;

                //Methods
                public function __construct($name, $type, $healt, $img){
                    $this->name = $name;
                    $this->type = $type;
                    $this->healt = $healt;
                    $this->img = $img;
                }

                public function attack() {
                    return "Attack";
                }

                public function defense() {
                    return "Defense";
                }
                public function show(){
                    return
                    "<div class='pk'>" . 
                    "<img src='" . $this->img . "'>" .
                    "<div class='info'>" . 
                        "<span>" . $this->name  . "</span>" .
                        "<span> Type: " . $this->type  . "</span>" .
                        "<span> Healt: " . $this->healt . "</span>" .
                    "</div>" . 
                "</div>";
                }
                
            }

            class Evolve extends Pokemon{
                public function levelUp($name, $type, $healt, $img) {
                    parent::__construct($name, $type, $healt, $img);
                }
            }
            ?>
            <h2>Evolve your Pokemon</h2>
            <div class="pks">
            <?php
                $pk = new Evolve('abra','psychic', 100, 'images/Abra.png');
                echo $pk->show();
                $pk->levelUp('kadabra','psychic', 200, 'images/Kadabra.png');
                echo $pk->show();
                $pk->levelUp('alakazam','psychic', 300, 'images/Alakazam.png');
                echo $pk->show();
            ?>
            </div>
        </section>
    </main>
</body>

</html>