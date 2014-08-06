<?php get_header(); ?>

      <section id="pagetitle">
        <h1>Dispensaries</h1>
      </section>




<?php get_account(); ?>
      
<?php get_state_selection(); ?>

          <a class="close-reveal-modal">&#215;</a>
        </div>
        <div class="profilepic" data-dropdown="accounthover" data-options="is_hover:true"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/p148x148/10341854_10152397299124655_2049244265428842388_n.jpg?oh=00cad4455c33d40ec2390a38ad4e0667&oe=541E4889&__gda__=1412488433_7aae6bb7c6f19d34536bb3c1cc40086a"></div>
        <div id="accounthover"  data-dropdown-content  class="large f-dropdown content">
          <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/p148x148/10341854_10152397299124655_2049244265428842388_n.jpg?oh=00cad4455c33d40ec2390a38ad4e0667&oe=541E4889&__gda__=1412488433_7aae6bb7c6f19d34536bb3c1cc40086a">
          <h4>Dakota Michael Berg</h4>
          <h6>dakota@deviine.com</h6>
          <ul>
            <li href="#">View Profile</li>
            <li href="#">Edit Profile</li>
            <h5>Favorite Dispensary:<br> <a href="html/walkingraven.html">Walking Raven MMC</a></h5>
            <li href="#" class="signout">Sign Out</li>
          </ul>
        </div>
      </section>

      <a href="#top" class="uptotop"><img src="../img/rocketicon.png"></a>

<?php get_dispensary_listing(); ?>

<?php get_mobile_dispensary_listing(); ?>

<?php get_footer(); ?>
