<?php
//Presentation/footer.php;
declare(strict_types=1);

namespace presentation;
?>
<footer>
  <div id="footerlist1">
    <h3>Check it out!</h3>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>

  <div id="footerlist2">
    <h3>Follow me on</h3>
    <ul>
      <li><a href="https://www.facebook.com/Kimmy.Mayhem" target="_blank">
          <img class="icons" src="presentation/icons/facebook_blue.svg" alt="facebook-icon" width="30px" height="30px" />
          <span class="footer-txt">Facebook</span></a>
      </li>
      <li>
        <a href="https://www.instagram.com/kimmy.mayhem" target="_blank">
          <img class="icons" src="presentation/icons/instagram_blue.svg" alt="instagram-icon" width="30px" height="30px" />
          <span class="footer-txt">Instagram</span></a>
      </li>
      <li>
        <a href="#" target="_blank">
          <img class="icons" src="presentation/icons/linkedin_blue.svg" alt="linkedin-icon" width="30px" height="30px" />
          <span class="footer-txt">LinkedIn</span></a>
      </li>
    </ul>
  </div>

  <div id="footerlist3">
    <h3>Wanna get in touch?</h3>
    <ul>
      <?php
      $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
      if ($isMob) {
      ?><?= '<li><a href="tel:+32494163784">+32 494/16.37.84</a></li>';
      } else {
        ?><?= '<li>+32 494/16.37.84</li>';
        }
          ?>
      <li><a href="mailto:contact@kimberlyverhecken.com">contact@kimberlyverhecken.com</a></li>
    </ul>
  </div>


  <div id="footerlist4">
    <h3>Download my resume!</h3>
    <a href="presentation/resume/kimberlyverhecken_resume" class="resume-button" download>Resume</a>
    <h3>Show support and shop for some art!</h3>
    <a href="https://www.etsy.com/shop/KimmyMayhemGoods" target="_blank">
      <img class="icons" src="presentation/icons/etsy_blue.svg" alt="Etsy-icon" width="30px" height="30px" />
      <span class="footer-txt">Visit my Etsy</span></a>
  </div>


</footer>
<script src="presentation/js/byeAnchor.js"></script>
</body>

</html>