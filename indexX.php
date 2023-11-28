<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cih-bank</title>
    <link rel="stylesheet" href="styleE.css">
</head>
<body>

<style>

.home {
    padding: 0 5%;
    margin: 100px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: calc(100vh - 200px);
}

header .logo img {
    width: 100px;
    height: 40px;
}

.home .left h1 {
    font-size: 100px;
    color: rgb(255, 94, 0);
    font-weight: 600;
    padding: 0;
    margin-left: -8px;
    margin-bottom: -10px;
}
.home .left h1 span {
    color: rgb(20, 50, 158);
}

.button-link {
    margin-top: 30px;
    border: 0;
    background:transparent;
}
.button-link a {
    font-size: 14px;
    color: #fff;
    padding: 10px 25px;
    background: rgb(20, 50, 158);
    border-radius: 60px;
    text-transform: uppercase;
    line-height: 1px;
}

</style>
    <header>
        <div class="logo">
            <img src="OIP (3).jpeg" alt="">
        </div>
        <ul class="menu">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Plans</a></li>
            <li><a href="#">Alimentation</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Biologie</a></li>
            <li><a href="#">Ecologie</a></li>
        </ul>
        <div class="small_menu">
            <span>
                <div></div>
                <div></div>
            </span>
            <span>
                <div></div>
                <div></div>
            </span>
        </div>

    </header>


<!-- home -->

    <section class="home">
        <div class="left">
            <h1>CIH<span>bank</span></h1>
            <button class="button-link">
                <a href="index.php">login</a>
            </button>
        </div>
        <div class="right">
            <img src="images/Untitled design.png">
        </div>
    </section>


    <!-- services -->
    
    

    <!-- contact -->
    <section class="contact">
        <h1 class="title">Contactez nous</h1>
        <div class="form-image">
            <form>
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="Adresse Mail">
                <input type="text" placeholder="Objet du Message">
                <textarea  id="" cols="30" rows="10" placeholder="Votre Message"></textarea>
                <button class="button-link form_btn">
                    <a href="#">Envoyer Votre message</a>
                </button>
            </form>
            <div class="image">
                <img src="pexels-energepiccom-2988232.jpg" >
            </div>
        </div>
    </section>

    <footer>
        <p>Site réalisé par cihbank | Tous les droits sont réservés.</p>
    </footer>



    <script>
        var small_menu = document.querySelector(".small_menu");
        var menu = document.querySelector(".menu");
        small_menu.onclick = function(){
            small_menu.classList.toggle('active');
            menu.classList.toggle('small');
        }
    </script>

</body>
</html>