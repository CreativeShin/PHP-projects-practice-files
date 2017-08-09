<?php

# TERNARY OPERATOR

  $loggedIn = true;
  // echo ($loggedIn) ? 'TRUE' : 'FALSE';

# NESTING

  $age = 20;
  $score = 15;
  echo 'Your score is'.($score > 10 ? ($age > 10 ? 'Avg':'Exceptional'): ($age >10? 'Horrible':'Avg') );
