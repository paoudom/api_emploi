<?php 
/**
 * @file
 * Default theme implementation for each paragraph in the summary module.
 *
 * Available variables:
 * - $title: titre de la page
 * - $recherche : paramètres de la recherche
 * - $content: Content of the paragraph
 */
?>
<li class="summary_item">
  <h3><?php print $title ?></h3>
  <div class="summary_content"><?php print $recherche ?></div>
  <div class="summary_content"><?php print $content ?></div>
</li>