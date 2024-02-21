<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-Fundamentals</title>
    <link rel="stylesheet" href="css/master.css">
    <style>
        section{

            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 10px;
        
            h2{
                margin: 0;
            }

            figure{
                font-size: 6rem;
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
                private $name;
                private $age;
                private $number;


                //Methods
                public function __construct($name, $age, $number){
                    $this->name = $name;
                    $this->age = $age;
                    $this->number = $number;
                }

                public function run(){
                    return "🏃‍♀️";
                }

                public function stop(){
                    return "🚶‍♀️";
                }

                public function jump(){
                    return "🤸‍♂️";
                }
            }

            $runner = new Runner('Johanna', 29, 107);
            echo $runner->run();
            echo $runner->stop();
            echo $runner->jump();
            echo $runner->run();
            ?>


        </section>
    </main>
</body>
</html>