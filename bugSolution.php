function myFunc() {
  for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
      // Use a flag to control the outer loop
      $skipOuter = true;
      break;
    }
    echo $i . " ";
  }
  if (!isset($skipOuter)) {
     echo "Done!";
  }
}

myFunc(); // Output: 0 1 2 3 4 