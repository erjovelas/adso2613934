<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-Fundamentals</title>
    <link rel="stylesheet" href="css/master.css">
    <style>
        section {
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

            ul {
                padding: 0;
                margin: 0;
            }

            figure {
                background-color: #fff3;
                border: 2px solid #fff6;
                border-radius: 8px;
                font-size: 6rem;
                margin: 0;
                img{
                    width: 80px;
                }
            }

            form {
                display: flex;
                justify-content: space-between;
                gap: 1rem;
                width: 100%;
                button {
                    border: 2px solid #fff6;
                    background-color: #994bde;
                    border-radius: 8px;
                    color: #fff9;
                    cursor: pointer;
                    font-size: 1rem;
                    width: 100px;
                    padding: 0.6rem;
                }
            }
        }
    </style>
</head>
<body>
    <main>
        <h1>02-fundamentals</h1>
        <section>
            <?php
            
            class Runner {
                //Attributes
                public $name;
                public $age;
                public $number;


                //Methods
                public function __construct($name, $age, $number){
                    $this->name = $name;
                    $this->age = $age;
                    $this->number = $number;
                }

                public function run(){
                    return "<img src='gif/run.gif'>";
                }

                public function stop(){
                    return "<img src='gif/stop.png'>";
                }

                public function jump(){
                    return "<img src='gif/jump.gif'>";
                }
            }

            $runner = new Runner('Johanna', 29, 107);
            ?>
<h2>Class Runner</h2>
            <ul>
                <li>Name:   <?=$runner->name ?></li>
                <li>Age:    <?=$runner->age ?></li>
                <li>Number: <?=$runner->number ?></li>
            </ul>
            <figure>
            <?php
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["accion"])) {
                    $accion = $_POST["accion"];
                    switch ($accion) {
                        case "run":
                            echo $runner->run();
                            break;
                        case "stop":
                            echo $runner->stop();
                            break;
                        case "jump":
                            echo $runner->jump();
                            break;
                        default:
                            echo "error.";
                    }
                }
            }

                ?>
            </figure>
            <form action="" method="post">
                <button type="submit" name="accion" value="run"> Run </button>
                <button type="submit" name="accion" value="stop"> Stop </button>
                <button type="submit" name="accion" value="jump"> Jump </button>
            </form>

        </section>
    </main>
</body>
</html>