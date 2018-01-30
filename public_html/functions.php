<?php
  function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

  function mb_trim($str) {
   return mb_ereg_replace('\A(\s| )+|(\s| )+\z','',$str);
  }
