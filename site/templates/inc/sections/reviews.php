<?php namespace ProcessWire;

$iconStar = $assets ."/icons/star.svg";

?>
<div class="border --80 gradient"><div></div></div>
<section>
  <article class="reviews container">
    <div class="body">
      <h2>Top Rated Restaurant</h2>
      <p>When we share a meal, more than just food and drinks are exchanged. Stories are told, connections are made, and friendships are forged.</p>
      <!-- <p>When the food is as good as the company, we’re able to enjoy the experience just a bit more. We believe that good foods and drinks bring out the best in us.</p> -->
      <p>Every dish is made with 100% authentic Italian flavors. And we make sure to give you the attention and service that you deserve, allowing you to focus on what really matters – your friends and family.</p>
    </div>
    <!-- Slider main container -->
    <div class="swiper reviews__slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <span>R</span>
          <h4>Regards Suki</h4>
          <div class="stars"></div>
          <cite class="review__text">
            Stumbled across this place, and at first was taken back by what looked like a cool restaurant but with a  McDonald's restaurant ordering system by the door.
            Regardless the food came in good time was delicious, and steak cook and rested perfectly.  The staff were pleasant and friendly. Didn't get to stay for dessert so will be back to try.
            <!-- <p>Extra info... card or cash payments can be made but you have to pay upfront for you meal first when using the ordering system, however you can order additional items and pay at the end.</p> -->
          </cite>
        </div>
        <div class="swiper-slide">
          <span>M</span>
          <h4>Martin Kupka</h4>
          <div class="stars"></div>
          <cite class="review__text">
            Amazing experience, down to earth place with honest delicious food and great atmosphere. From starter through amazing main (I highly recommend getting the 3 different cockerels with grilled veggies and fries) to delicious desert. They also have good local beer (we had Vršovice 11°). Highly recommended, we will visit again! And service was amazing too!
          </cite>
        </div>
        <div class="swiper-slide">
          <span>U</span>
          <h4>Usman Riaz</h4>
          <div class="stars"></div>
          <cite class="review__text">
          Visit this place quite frequently, by far one of my favorite places in Prague to dine in. Exceptional service and food. Actually a pretty great place to organize some small events as well, a couple of my friends hosted their graduation parties here and everyone loved it. Last time I went here with my friends was on Christmas and they had an amazing Christmas menu. A small tip for first timers, it’s not ‘Chicken’, it’s‘ Cockerel’ :D
          </cite>
        </div>
        <div class="swiper-slide">
          <span>M</span>
          <h4>Michaela Zackova</h4>
          <div class="stars"></div>
          <cite class="review__text">
          It was amazing food! We ordered meat platter with chicken, sausages, beef, pork ribs with some french fries and salad. I would highlight delicious chicken and pork ribs, probably the best in Prague, we also has tiramisu which was just great! Staff was very friendly, and we will definitely come back soon!!
          </cite>
        </div>
        <div class="swiper-slide">
          <span>T</span>
          <h4>Tomas Tittl</h4>
          <div class="stars"></div>
          <cite class="review__text">
          A tiny bistro on the upper side of the Prague city center serves litteraly the best poultry I have ever tasted. The glazed rooster and their broth is simply the must when you come to Vinohrady.
          </cite>
        </div>
        <div class="swiper-slide">
          <span>G</span>
          <h4>Gonçalo Soeiro</h4>
          <div class="stars"></div>
          <cite class="review__text">
          This restaurant has a very interesting concept: when you get there you have 2 machines (eng and cz) where you can order your meal (a staff member will help you when needed). Its very easy to use and you can select the main dish, side dishes, drinks, sauces, desserts and coffee (you can even select the order they are delivered at your table!)
          </cite>
        </div>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
  </article>
</section>