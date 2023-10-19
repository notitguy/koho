<?php namespace ProcessWire;

$spider = $assets ."images/hero/halloween/EtCPE3S.webp";
$pumpkin01 = $assets ."images/hero/halloween/VlAEovB.webp";
$pumpkin02 = $assets ."images/hero/halloween/z1sM4My.webp";
$spiderweb = $assets ."images/hero/halloween/7XIEQS1.webp";

?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Nosifer&display=swap');

  body.dev header {
    width:100%;
    position: fixed;
    background: rgb(11,6,31);
    background: linear-gradient(180deg, rgba(11,6,31,1) 0%,  rgba(11,6,31,0) 100%);
  }  
  body.dev section.halloween {
    position: relative;
    min-height: 70vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #0b061f;
  }
  .halloween .spider {
    position: absolute;
    top: 0;
    animation: animateSpider 15s ease-in-out infinite;
  }
  @keyframes animateSpider {
    0%,100%
    {
      transform: translateY(-500px);
    }
    50% 
    {
      transform: translateY(0px);
    }
  }
  .pumpkin01 {
    position: absolute;
    top: 100px;
    right: 200px;
    animation: animatePumpkin 8s ease-in-out infinite;
  }
  .pumpkin02 {
    position: absolute;
    bottom: 20px;
    left: 50px;
    scale: 0.5;
    animation: animatePumpkin 4s ease-in-out infinite;
  }

  @keyframes animatePumpkin {
    0%,100% 
    {
      transform: translateY(-50px);
    }
    50% 
    {
      transform: translateY(50px);
    }
  }

@media screen and (max-width: 500px) {
  .pumpkin01 {
    right: -20vw;
  }  
  .pumpkin02 {
    left: -40vw;
  }
  .halloween .body {
    width: 100%;
  } 
}

  .halloween .spiderWeb {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    mix-blend-mode: screen;
  }
  h2 {

  }
  
  @keyframes animate {
      0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%
      {
        color: rgba(255, 255, 255, 0.1);
        text-shadow: none;
      }
      18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%
      {
        color: #ffac09;
        text-shadow: 0 0 10px #ffac09,
                      0 0 20px #ffac09,
                      0 0 40px #ffac09,
                      0 0 80px #ffac09,
                      0 0 160px #ffac09;
      }
  }
  .halloween .body {
    background: linear-gradient(180deg, rgba(11,6,31,0) 0%, rgba(11,6,31,0.8) 30%, rgba(11,6,31,0.8) 70%, rgba(11,6,31,0) 100%);
    z-index: 1;
  }
  .halloween h2 {
    font-family: 'Nosifer', cursive;
    font-size: clamp(2rem,5vw,3.2rem);
    color: #0e3742;
    text-shadow: none;
    animation: animate 5s infinite linear;
  }
  .halloween h3 {
    font-family: 'Nosifer', cursive;
    font-size: clamp(2rem,5vw,2.1rem);
  }
  .halloween p {
    color: #aaa;
    font-size: clamp(1rem,2vw,1.3rem);
  }
  .halloween p span {
    font-family: var(--font-hm);
    color: var(--c-primary-50);
    display: block;
    font-weight: 800;
    text-transform: uppercase;
    font-size: 1.4rem;
  }

</style>

<main pw-id="content">
  <section class="halloween hero">
    <img src="<?= $spider ?>" class="spider">
    <img src="<?= $pumpkin01 ?>" class="pumpkin01">
    <img src="<?= $pumpkin02 ?>" class="pumpkin02">
    <img src="<?= $spiderweb ?>" class="spiderWeb">
    <div class="body container --small">
      <h2>
        <span style="--i:1;">H</span>
        <span style="--i:2;">a</span>
        <span style="--i:3;">l</span>
        <span style="--i:4;">l</span>
        <span style="--i:5;">o</span>
        <span style="--i:6;">w</span>
        <span style="--i:7;">e</span>
        <span style="--i:8;">e</span>
        <span style="--i:9;">k</span>
      </h2>
      <h3>20.10 - 31.10</h3>
      <p>Come to taste the special <span>Halloween Edition cockerel!</span></p>
      <div class="cta">
      <a href="https://kohoutek-restaurace.reservio.com/" class="btn --primary" target="_blank" rel="nofollow" data-event="orderClickHero">
        Reserve your table
      </a>
    </div>
    </div>
  </section>
</main>