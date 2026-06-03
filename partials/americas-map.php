<?php /* Stylized, abstract map of the Americas — decorative reach diagram. */ ?>
<svg class="americas" viewBox="0 0 380 460" role="img" aria-label="Network of regions across the Americas" style="max-width:380px;">
  <defs>
    <radialGradient id="amGlow" cx="55%" cy="40%" r="70%">
      <stop offset="0%" stop-color="#235e8c" stop-opacity="0.18"/>
      <stop offset="100%" stop-color="#235e8c" stop-opacity="0"/>
    </radialGradient>
  </defs>

  <rect width="380" height="460" fill="url(#amGlow)"/>

  <!-- faint lat/long grid -->
  <g stroke="#c7d0da" stroke-width="1" opacity="0.55">
    <path d="M40 60h300M40 130h300M40 200h300M40 270h300M40 340h300M40 410h300" fill="none"/>
    <path d="M70 40v400M140 40v400M210 40v400M280 40v400" fill="none"/>
  </g>

  <!-- stylized Americas silhouette -->
  <g fill="#dbe3ec" stroke="#aebccb" stroke-width="1.5" opacity="0.85">
    <path d="M120 55c34-8 78-6 96 12 9 9 6 24-4 33-13 12-9 27-22 35-10 6-25 3-33 13-7 9-2 22-12 28-12 7-28-1-36-12-10-13-7-33-19-44-12-11-30-12-33-28-3-15 9-28 24-34 12-5 26-3 39-3z"/>
    <path d="M196 196c14 2 27 10 30 24 4 18-6 33-9 51-3 22 4 45-6 65-7 14-9 31-22 40-11 8-27 4-32-9-7-17 2-35 1-53-1-22-11-43-7-65 3-19 14-37 31-46 4-2 9-5 14-7z"/>
  </g>

  <!-- connecting routes -->
  <path d="M150 96 L132 168 200 196 156 244 214 358" fill="none" stroke="#235e8c" stroke-width="2" stroke-dasharray="2 7" stroke-linecap="round" opacity="0.85"/>

  <!-- region pins -->
  <?php
  $pins = [
    ['United States', 150, 96],
    ['Mexico', 132, 168],
    ['Caribbean', 214, 196],
    ['Central America', 156, 244],
    ['South America', 214, 358],
  ];
  foreach ($pins as [$label, $x, $y]):
  ?>
    <g>
      <circle cx="<?= $x ?>" cy="<?= $y ?>" r="13" fill="#235e8c" opacity="0.12"/>
      <circle cx="<?= $x ?>" cy="<?= $y ?>" r="6" fill="#235e8c"/>
      <circle cx="<?= $x ?>" cy="<?= $y ?>" r="2.5" fill="#fff"/>
    </g>
  <?php endforeach; ?>
</svg>
