<?php
session_start();
include('header.php');
?>

<main>
  <section class="content-section">
    <div class="contact-box">
      <h1>Contact CampusTrade</h1>
      <p class="intro">
        Have a question or need help? Send us a quick message below, and our team will get back to you soon.
      </p>

      <form class="contact-form" method="post" action="#">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
        <button type="submit" class="button">Send Message</button>
      </form>

      <p class="note">We’ll respond within 1–2 business days.</p>
    </div>
  </section>
</main>

<?php include('footer.php'); ?>

