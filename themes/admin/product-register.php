
<?php
    $this->section("content");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=url("assets/web/css/register.css"); ?>">
    <title>eEletronics - Products Register</title>
</head>
<body>
    
    <div class="container">
        <div class="form__image">
        <img src="./assets/web/img/main-logo-1.png" class="logo" alt="">

            <!-- <img src="./assets/assetsRegister/img/undraw_online_stats_0g94.png" alt=""> -->
        </div>
        <div class="form">
            <form id="user-register" method="post">
                <div class="form__header">
                    <div class="title">
                        <h1>Cadastre um produto</h1>
                    </div>
                </div>
                <div class="input__group">
                    <div class="input__box">
                        <label for="name">Nome</label>
                        <input id="name" name="name" type="text" placeholder="Digite o nome do produto">
                    </div>

                    <div class="input__box">
                        <label for="price">Preço</label>
                        <input id="price" name="price" type="price" placeholder="Digite o preço do produto">
                    </div>
                    
                    <div class="input__box">
                        <label for="description">Descrição</label>
                        <input id="description" name="description" type="description" placeholder="Dê uma descrição desse produto">
                    </div>

                    <div class="input__box">
                        <label for="categories">Categoria</label>
                        <input id="categories" name="categories" type="categories" placeholder="Qual a categoria">
                    </div>
<!-- 
                    <div class="input__box">
                        <label for="password">Imagem</label>
                        <input id="password" name="password" type="password" minlength="8" placeholder="Digite sua senha">
                    </div> -->

                </div>

                <div class="response">
					<p class="response__p" ></p>
				</div>
                
                <div class="continue__button"> 
                    <button type="submit"><a>Cadastrar</a></button>
                </div>
            </form>
        </div>
    </div>
    
    
    <script type="text/javascript" async>
    const form = document.querySelector("form");

    /*
    const headers = {
        email: "alexachillesk@gmail.com",
        password: "12345678"
    };
    */

    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        const data = await fetch(`<?= url("api/user");?>`,{
            method: "POST",
            body: new FormData(form)
        });
        const user = await data.json();
        console.log(user);

    if (user.success.type === "success"){
        let responseDiv = document.querySelector(".response__p");
        responseDiv.innerHTML = "Registro feito com sucesso!";
        responseDiv.classList.remove("alert__danger");
        responseDiv.classList.add("alert__success");
        // return
    }
    else if (user.success.type !== "success"){
        let responseDiv = document.querySelector(".response__p");
        responseDiv.innerHTML = "Algo deu errado!";
        responseDiv.classList.remove("alert__success");
        responseDiv.classList.add("alert__danger");
    }

    });
    </script>
    </body>