function myFunc() {
  for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
      continue 2; // This will jump out of the outer loop!
    }
    echo $i . " ";
  }
  echo "Done!";
}

myFunc(); // Output: 0 1 2 3 4 Done!