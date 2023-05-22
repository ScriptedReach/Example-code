<!doctype html>
<html lang="en">
<head>
    <meta name="description" content="English portfolio page">
    <meta charset="UTF-8" content="Meta">
    <meta name="viewport"
          content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
{{--    user-scalable=no,--}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&display=swap" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Portfolio Levi</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <div id="header">
        <div id="links">
            <ul>
                <li class="link1 home-icon"><a href="/"><ion-icon name="code-slash-outline"></ion-icon></a></li>
                <li class="link1"><a href="/nl"><ion-icon name="language-outline"></ion-icon></a></li>
                <li class="link1"><a href="#aboutdiv">ABOUT</a></li>
                <li class="link1"><a href="#projectdiv">PROJECTS</a></li>
                <li class="link1"><a href="#skillsdiv">SKILLS</a></li>
                <li class="link1"><a href="#contactdiv">CONTACT</a></li>

            </ul>
        </div>
    </div>
    <div class="site_name">
        <span class="inner"><h4>Levi Rosheuvel</h4></span>
    </div>

    <div id="s1div">
        <div class="hometext"><p>Get to know me better and find out what experiences I have by taking a look at my
                portfolio.</p></div>
        <div id="links2">
            <ul>
                <li class="link2"><a href="#projectdiv">PROJECTS</a></li>
                <li class="link3"><a href="#aboutdiv">ABOUT</a></li>
            </ul>
        </div>

    </div>

</header>
<div id="aboutdiv">
    <div class="txtabout">
        <div class="about"><h2>About</h2></div>
        <div class="about"><p>Hey! I am Levi, {{$age}} years old and a student at Landstede in Zwolle</p></div>
        <div class="about"><p>I am studying Software Development at MBO level 4.</p></div>
        <div class="about"><p>Here I work a lot with Laravel, using languages such as PHP, HTML, JavaScript and MySql/SQlite.</p></div>
        <div class="about"><p>And I also use Python and MicroPython for my Raspberry pi and Raspberry pi pico.</p></div>
        <br>
        <div class="about">For a full overview of my experience and education, please email to take a look at my resume.</div>

        <figure>
            <img class="avatar" src="/images/avataaars.png" HEIGHT="" WIDTH="" ALT="">
        </figure>
    </div>
</div>

<div id="projectdiv">
    <div class="projects"><h2>Projects</h2></div>
    <div class="projects"><p>Here you can see the projects I have worked on. Click on a project to view it.</p></div>
    <div class="projectboxes">
        <figure>
            <div class="projectboxes">
                <a href="https://pauze.newdeveloper.nl/" target="_blank"> <img class="loading" src="/images/pauze2.png" width="" height="" alt=""></a>
            </div>
            <p>Pauze?</p>
        </figure>

        <figure>
           <a href="https://meestergeest.newdeveloper.nl/" target="_blank"><img class="loading" src="/images/meestergeest.png" width="313" height="163" alt=""></a>
            <p>Meester geest (Beta)</p>
        </figure>

        <figure>
            <img class="loading" src="/images/loading2.gif" width="320" height="163" alt="">
            <p>No project yet.</p>
        </figure>

        <figure>
            <img class="loading" src="/images/loading2.gif" width="320" height="163" alt="">
            <p>No project yet.</p>
        </figure>
    </div>
</div>
<div id="skillsdiv">
    <div class="skillstext"><h2>Skills</h2></div>
    <div class="skilltext"><p>These are the languages I have experience with.</p>
    <div class="skills">
        <figure>
            <img src="/images/HTML5.png" width="102" height="102" alt="HTML" class="center">
            <p>HTML</p>
            <div class="pie" style="--p:75;--b:10px;--c:#639cd3;">75%</div>
        </figure>

        <figure>
            <img src="/images/css.png" width="80" height="102" alt="CSS" class="center">
            <p>CSS</p>
            <div class="pie" style="--p:60;--b:10px;--c:#639cd3;">60%</div>
        </figure>

        <figure>
            <img src="/images/Javascript_Logo.png" width="102" height="102" alt="JS" class="center">
            <P>JavaScript</P>
            <div class="pie" style="--p:30;--b:10px;--c:#639cd3;">30%</div>
        </figure>

        <figure>
            <img src="/images/phpwit1.png" width="140" height="102" alt="PHP" class="center">
            <p>PHP</p>
            <div class="pie" style="--p:25;--b:10px;--c:#639cd3;">25%</div>
        </figure>

        <figure>
            <img src="/images/sqlite.png" width="140" height="102" alt="SQL" class="center">
            <p>sqlite</p>
            <div class="pie" style="--p:25;--b:10px;--c:#639cd3;">25%</div>
        </figure>


    </div>
</div>

</div>
</div>
<footer>
    <div id="contactdiv">
        <div class="contact"><h3>Contact</h3></div>
    <div class="contacts">

        <div class="mailadress">
            <a href="mailto:lrosheuv6991@student.landstede.nl" target="_blank"><i class="fa-solid fa-envelope"></i></a>
        </div>

        <div class="linkedin">
            <a href="https://www.linkedin.com/in/levi-rosheuvel-6763b9255/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </div>

        <div class="twitter">
            <a href="https://twitter.com/UnscriptedReach" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
        </div>
    </div>
</footer>
</body>
</html>





