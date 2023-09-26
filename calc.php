<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!--Navbar-->
        <nav class="nav-top">
            <div>
                <img src="./imgs/Logo.svg">
            </div>
            <div class="search">
                <input type="text" name="search" id="input-search">
                <button class="btn-search"><img src="./imgs/search.svg"></button>
            </div>
        </nav>
        <nav class="nav-bottom">
            <div>
                <ul class="nav-list">
                    <li class="nav-item"><a href="./index.html#home">Home</a></li>
                    <li class="nav-item"><a href="./index.html#about">About me</a></li>
                    <li class="nav-item"><a href="#calc">Calculate</a></li>
                    <li class="nav-item"><a href="./index.html#questions">Questions</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section id="calc">
            <div class="calc">
                <form name="base" method="POST" action="">
                    <p><label for="salario">Digite o seu salário bruto</label><br></p>
                    <p><input type="text" name="salario" id="sal" placeholder="Ex: 1973.88"><br></p>
                    <input id="submit" type="submit" value="Submit" name="enviar">
                    <input id="reset" type="reset" value="Reset" name="enviar">

                    <?php
                    if(isset($_POST['enviar'])){

                        $salario = $_POST['salario'];

                        if($salario < 1903.98){
                            echo "<p>Voce não precisa pagar imposto de renda</p>";
                        } else if ($salario <= 2826.65){
                            $salario = ($salario - (($salario / 100) * 7.5));
                            $salario = number_format($salario,2,',','.');
                            echo "<p>Seu salario após o imposto de renda é: R$$salario</p>";
                        } else if($salario <= 3751.05){
                            $salario = $salario - (($salario / 100) * 15);
                            $salario = number_format($salario,2,',','.');
                            echo "<p>Seu salario após o imposto de renda é: R$$salario</p>";
                        } else if ($salario <= 4664.68){
                            $salario = $salario - (($salario / 100) * 22.5);
                            $salario = number_format($salario,2,',','.');
                            echo "<p>Seu salario após o imposto de renda é: R$$salario</p>";
                        } else if ($salario > 4664.68) {
                            $salario = $salario - (($salario / 100) * 27.5);
                            $salario = number_format($salario,2,',','.');
                            echo "<p>Seu salario após o imposto de renda é: R$$salario</p>";
                        }
                    }
                    ?>
                </form>
            </div>
            <div class="val-table">
                <h4>Valores Imposto de Renda</h4>
                <table>
                    <tr>
                        <th>Salário</th>
                        <th>Valor do imposto</th>
                    </tr>
                    <tr>
                        <td>R$1.903,98</td>
                        <td>Não paga imposto</td>
                    </tr>
                    <tr>
                        <td>R$2.826,65</td>
                        <td>7,5% do salário</td>
                    </tr>
                    <tr>
                        <td>R$3.751,05</td>
                        <td>15% do salário</td>
                    </tr>
                    <tr>
                        <td>R$4.664,68</td>
                        <td>22,5% do salário</td>
                    </tr>
                    <tr>
                        <td>R$4.664,69 ou mais</td>
                        <td>27,5% do salário</td>
                    </tr>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <a href="./index.html#home"><img class="footer-logo" src="./imgs/Logo.svg"></a>
        </div>
        <div>
            Follow me
            <div class="icons">
                <span class="social-media"><img src="./imgs/github.svg"><a target="_blank" href="https://github.com/ViniFajan">GitHub</a></span>
            </div>
        </div>
    </footer>
</body>
</html>