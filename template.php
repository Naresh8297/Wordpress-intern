<?php

get_header(); ?>

<!-- Banner with contact form -->
<section class="banner">
    <div class="container">
        <h1>Contact Me</h1>
        <p>This is a beautiful banner with a contact form.</p>
        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]'); ?>
    </div>
</section>

<!-- List of Services -->
<section class="services">
    <div class="container">
        <h2>List of Services</h2>
        <ul>
            <li>Service 1</li>
            <li>Service 2</li>
            <li>Service 3</li>
        </ul>
    </div>
</section>


<section class="slider">
    <div class="container">
        <h2>Image Slider</h2>
        <div class="slider-container">
           
        </div>
    </div>
</section>


<section class="faqs">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <h3>Question 1?</h3>
            <p>Answer 1</p>
        </div>
        <div class="faq-item">
            <h3>Question 2?</h3>
            <p>Answer 2</p>
        </div>
        
    </div>
</section>

<?php get_footer(); ?>
