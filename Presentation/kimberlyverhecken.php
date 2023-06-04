<?php
//index.php
declare(strict_types=1);

namespace presentation;
?>

<!------------------------------------------------start nav----------------------------------->
<?php
include("header.php");
?>
<!------------------------------------------------end nav----------------------------------->

<!-------------------------------------------start header------------------------------------->
<main>
  <!----------------start home------------------>
  <section id="home" class="background scroll-page" style="--background-img-mobile: url('../art/backgroundIndex-360x800.svg');
  --background-img-desktop: url('../art/backgroundIndex-1920x1080.svg');">
    <!--start socialmedia bar-->
    <ul class="socials glass">
      <li>
        <a class="soc-link" href="https://www.facebook.com/Kimmy.Mayhem" target="_blank">
          <img class="icons" src="presentation/icons/facebook.svg" alt="facebook-icon" width="30px" height="30px" />
        </a>
      </li>
      <li>
        <a class="soc-link" href="https://www.instagram.com/kimmy.mayhem" target="_blank">
          <img class="icons" src="presentation/icons/instagram.svg" alt="instagram-icon" width="30px" height="30px" />
        </a>
      </li>
      <li>
        <a class="soc-link" href="#"><img class="icons" src="presentation/icons/linkedin.svg" alt="linkedin-icon" width="30px" height="30px" /></a>
      </li>
      <li>
        <a class="soc-link" href="https://www.etsy.com/shop/KimmyMayhemGoods" target="_blank">
          <img class="icons" src="presentation/icons/etsy.svg" alt="Etsy-icon" width="30px" height="30px" />
        </a>
      </li>
    </ul>
    <!--end socialmedia bar-->

    <!--start title-->
    <div class="openingContainer">
      <h3 id="name">Kimberly Verhecken</h3>
      <h1 id="header-title">Full-Stack Webdeveloper<br><span class="sm-h1">in training</span></h1>
      <!--end title-->
      <!--
      <a href="#projects" class="home-buttons">Projects</a>
      <a href="#" class="resume-button">Resume</a>
      -->
    </div>
    <!--end layout header content-->
  </section>

  <!-------------end home---------------->

  <!--------------start about----------->
  <div id="about" class="scroll-page page-margin">
    <div class="content-container">
      <section class="about-txt">
        <h1>About</h1>
        <h2>Ready for inspiring new creations and chalenging projects</h2>
        <p>I'm Kimberly an individual young by heart with a love for creating.</p>
        <p>
          After having the pleasure of experiencing mostly services in retail, i decided to change course.
          I took part in an intensive educationprogam at VDAB and dedicated to become a valuable asset in the world of IT.
          Packed with my achieved knowledge i'm ready to help creating new exciting projects.
        </p>
        <p>
          Besides being a developer, i'm also an artist. Which also transelates in my work.
          I love to incorperate my own illustrations and icons in projects and i'm continiously looking to teach myself new skills
          to support my visions.
        </p>
        <p>
          When i'm not coding you can often find me swallowed by my sketchbook, messing around with adobe cloud or just enjoying a nice game
          all while listening to my favorite podcasts.
        </p>
      </section>
      <img class="selfie" src="presentation/img/selfie.svg" alt="picture of me">
    </div>
  </div>

  <!------------end about--------->

  <!-------------start skills------->
  <div id="skills" class="scroll-page page-margin">
    <div class="content-container">
      <section class="skills-txt">
        <h1>Skills</h1>
        <h2>Front-end and Back-end</h2>
        <p>
          I specialized in front-end and back-end development using HTML 5, CSS 3, Javascript and PHP,
          in wich i push myself further with every assignment through study and own created projects.
          Like they say:"practice makes perfect".
        </p>
        <p>
          And eventhough noone is accually perfect, I do strive to do the best to my abilities to provide quality and stay up to my game.
        </p>
      </section>
      <div id="skill-set" class="scroll-page">
        <div class="list code-list">
          <h3>Languages</h3>
          <ul>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" alt="HTML5 icon" />
              <span class="list-text">HTML 5</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" alt="CSS3 icon" />
              <span class="list-text">CSS 3</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-plain.svg" alt="javascript icon" />
              <span class="list-text">Javascript
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-plain.svg" alt="Bootstrap icon" />
              <span class="list-text">Bootstrap</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP icon" />
              <span class="list-text">PHP</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL icon" />
              <span class="list-text">MySQL</span>
            </li>
          </ul>
        </div>

        <div class="list tools-list">
          <h3>Tools</h3>
          <ul>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" alt="VS Code icon" />
              <span class="list-text">VS Code</span>
            </li>
            <li>
              <img class="skill-icon" src="presentation/icons/xampp.svg" alt="Xampp icon" />
              <span class="list-text">Xampp</span>
            </li>
            <li>
              <img class="skill-icon" src=" https://cdn.jsdelivr.net/gh/devicons/devicon/icons/filezilla/filezilla-plain.svg" alt="Filezilla icon" />
              <span class="list-text">FileZilla</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="Github icon" />
              <span class="list-text">Github</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-plain.svg" alt="GIT icon" />
              <span class="list-text">GIT</span>
            </li>
          </ul>
        </div>

        <div class="list graphical-list">
          <h3>Design and Illustration</h3>
          <ul>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-line.svg" alt="Adobe Photoshop icon" />
              <span class="list-text">Adobe Photoshop</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-line.svg" alt="Adobe Illustrator icon" />
              <span class="list-text">Adobe Illustrator</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/xd/xd-line.svg" alt="Adobe XD icon" />
              <span class="list-text">Adobe XD</span>
            </li>
            <li>
              <img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma icon" />
              <span class="list-text">Figma</span>
            </li>
            <!--<li><imgc class="skill-icon" src="presentation/icons/procreate.svg" alt="procreate-icon">
            <span class="list-text">Proceate</span></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-------------end skills ------>

  <!--------------start projects------->
  <div id="projects" class="scroll-page page-margin">

    <div class="content-container">
      <section class="projects-txt">
        <h1>Projects</h1>

        <article class="project-block glass">
          <div class="project-img" style="--projectImg: url('../img/kvThumbnail.png');">
            <ul class="usedInProduction glass">
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" alt="HTML5 icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" alt="CSS3 icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-plain.svg" alt="javascript icon" /></li>
            </ul>
          </div>
          <div class="project-description">
            <h1>KimberlyVerhecken.com</h1>
            <p>This portfolio website containing a contact form with send e-mail and sends out an confirmation</p>
            <p>Layout created using own illustrations and some own socialmedia icons.</p>
          </div>
          <a class="project-btn glass" href="https://github.com/kimberlyVH/KimberlyVerheckenCOM" target="_blank">Source code
            <svg class="btn-arrow">
              <polygon points="0 0, 0 10, 10 5" fill="rgba(255, 255, 255, 0.836)" stroke="rgba(255, 255, 255, 0.836)" stroke-linejoin="round" />
            </svg>
          </a>
        </article>

        <article class="project-block glass">
          <div class="project-img" style="--projectImg: url('../img/sonThumbnail.png');">
            <ul class="usedInProduction glass">
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" alt="HTML5 icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" alt="CSS3 icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL icon" /></li>
            </ul>
          </div>
          <div class="project-description">
            <h1>Spells Of Nimhdora</h1>
            <p>Base of a Strategy Card game with register,login and the ability to adjust a mini profilepage.</p>
            <p>Layout created using own illustrations.</p>
          </div>
          <!--<a class="project-btn glass" href='SpellsOfNimhdora'>Demo
            <svg class="btn-arrow">
              <polygon points="0 0, 0 10, 10 5" fill="rgba(255, 255, 255, 0.836)" stroke="rgba(255, 255, 255, 0.836)" stroke-linejoin="round" />
            </svg></a>-->
          <a class="project-btn glass" href="https://github.com/kimberlyVH/SpellsOfNimhdora" target='_blank'>Source code
            <svg class="btn-arrow">
              <polygon points="0 0, 0 10, 10 5" fill="rgba(255, 255, 255, 0.836)" stroke="rgba(255, 255, 255, 0.836)" stroke-linejoin="round" />
            </svg>
          </a>
        </article>

        <article class="project-block glass">
          <div class="project-img" style="--projectImg: url('../img/prulariaThumbnail.png');">
            <ul class="usedInProduction glass">
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" alt="HTML5 icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" alt="CSS3 icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL icon" /></li>
            </ul>
          </div>
          <div class="project-description">
            <h1>Prularia</h1>
            <p>A webshop build in team using scrum/agile workflow. Having a login/register, shoppingcart
              and a catalogue generated through connection with the provided database.</p>
            <p>Since this was a project provided by VDAB, i'm not allowed to share my code publicly,
              But i'll glady demonstrate it in person or invite you to my private github repo.</p>
          </div>
          <a class="project-btn glass" href="#contact">Contact me
            <svg class="btn-arrow">
              <polygon points="0 0, 0 10, 10 5" fill="rgba(255, 255, 255, 0.836)" stroke="rgba(255, 255, 255, 0.836)" stroke-linejoin="round" />
            </svg>
          </a>
        </article>

        <article class="project-block glass">
          <div class="project-img" style="--projectImg: url('../img/sandwichThumbnail.png');">
            <ul class="usedInProduction glass">
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" alt="HTML5 icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" alt="CSS3 icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP icon" /></li>
              <li><img class="skill-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL icon" /></li>
            </ul>
          </div>
          <div class="project-description">
            <h1>Sandwich Orderservice</h1>
            <p>A little Orderservice with register with generated password wich is send to the users email,
              login and a menu to specify your order.</p>
            <p>Since this was a project provided by VDAB, i'm not allowed to share my code publicly,
              But i'll glady demonstrate it in person or invite you to my private github repo.</p>
          </div>
          <a class="project-btn glass" href="#contact">Contact me
            <svg class="btn-arrow">
              <polygon points="0 0, 0 10, 10 5" fill="rgba(255, 255, 255, 0.836)" stroke="rgba(255, 255, 255, 0.836)" stroke-linejoin="round" />
            </svg>
          </a>
        </article>
      </section>
    </div>
  </div>
  <!--------------end projects------->

  <!-------start contact--------->
  <div id="contact" class="scroll-page page-margin">
    <div class="content-container">
      <section class="form-section">
        <h1>Contact</h1>
        <h2>Wanna get in touch?</h2>

        <fieldset>
          <?php if ((isset($error)) && ($error !== '')) { ?>
            <?= '<p class="error">' . $error . '</p>'; ?>
          <?php } ?>
          <?php if ((isset($succes)) && ($succes !== '')) { ?>
            <?= '<p class="succes">' . $succes . '</p>'; ?>
          <?php } ?>

          <form id="contactform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#contact" method="POST">
            <span class="required">*</span></br>
            <label for="firstname">firstname</label>
            <input class="fields" type="text" name="firstname" placeholder="yourName">

            <span class="required">*</span></br>
            <label for="emailSender">From</label>
            <input class="fields" type="text" name="emailSender" placeholder="yourEmail@example.com">

            <span class="required">*</span></br>
            <label for="mailSubject">Subject</label>
            <input class="fields" type="text" name="mailSubject" placeholder="What is your question?">


            <label for="message">Message</label>
            <textarea class="fields" name="message" placeholder="Your message"></textarea><br>

            <button class="send-button" id="btnSend" name="btnSend">Send</button>
          </form>
        </fieldset>
      </section>

      <section class="more-info">
        <?php
        $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
        if ($isMob) {
        ?>
          <h3>Prefering a more personal approach?</h3>
          <p>
            No problem!<br>
            Just press the button and ...
          </p>
          <div class='qr-frame'>
            <a class="call-btn" href="tel:+32494163784"><img src="presentation/icons/phone.svg" alt="telephone icon"></a>
            <p>Give me a call!</p>
          </div>
        <?php
        } else {
        ?>
          <h3>Did you know?</h3>
          <p>
            This website is responsive!<br>
            check it out!
          </p>
          <div class='qr-frame'>
            <img id="qr" src="presentation/icons/qr-code.svg" alt="scanable qr-code">
            <p>Scan me</p>
          </div>
        <?php
        }
        ?>
      </section>
    </div>
  </div>
  <!----------------end contact--------------->
</main>
<!------------------------------------------------start footer----------------------------------->
<?php
include("footer.php");
?>
<!------------------------------------------------end footer----------------------------------->