<?php namespace ProcessWire;

$notFound = $assets. "images/404.svg";

?>

<main pw-id="content" style="
    display: flex;
    flex-direction: column;
    align-items: center;
  ">
  <img src="<?= $notFound ?>" alt="" width="500" style="filter: invert(79%) sepia(37%) saturate(353%) hue-rotate(347deg) brightness(88%) contrast(96%);">
    <p style="font-size: 2rem; color: var(--c-primary-70); margin-bottom: var(--gutter-l)">Oops, something went wrong.</p>
  <a href="<?= $home->url ?>" class="btn">Take me home</a>
</main>

