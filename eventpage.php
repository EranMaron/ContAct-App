<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="includes/jquery-3.3.1.min.js"></script>
        <title>Main Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        
        <script src="includes/eventpagefunc.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="wrapper">
            <header id="topHeader">
                <a class="logoContainer" href="#">
                    <h1 id="logoTitle">CONTACT</h1>
                    <article id="logo"></article>
                </a>
                <section id="hamburger">
                    <button id="hamburgerBtn" type="button">
                        <article class="bar1"></article>
                        <article class="bar2"></article>
                        <article class="bar3"></article>
                    </button>
                </section>
                <a id="userPic" href="#">
                    <img src="./images/user.png">
                </a>
                <nav id="navBar">
                    <ul>
                        <i id="backButton" class="fas fa-arrow-left"></i>
                        <li class="pageTitle"><a href="#">Event Page</a></li>
                    </ul>
                </nav>
            </header>
            <main class="mainSection">
                
                    <?php 
                        include('eventPageBuild.php');
                    ?>

            </main>
            <footer>
                <section id="bottomNav">
                    <a href="#" class="bottomIcon"><img src="./images/profile.png" alt="Profile Icon"></a>
                    <a href="#" class="bottomIcon"><img src="./images/messagesicon.png" alt="Message Icon"></a>
                    <a href="#" class="bottomIcon"><img src="./images/eventsiconbottombar.png" alt="Event Icon"></a>
                    <a href="#" class="bottomIcon"><img src="./images/businesscardsicon.png" alt="Business Card Icon"></a>
                    </section>
            </footer>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
