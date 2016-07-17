<?PHP

  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
  echo ("seed made!");
  srand(make_seed());




//Load all the jokes about Pokemon Go being down! 
	//Creates and array of strings from the funny.txt file.
	$fp = @fopen('funny.txt', 'r'); 
	if ($fp) {
	   $funnyarray = explode("\n", fread($fp, filesize('funny.txt')));
	}

	//Creates and array of strings from the noun.txt file.
	$fp2 = @fopen('noun.txt', 'r'); 
	if ($fp2) {
	   $nounarray = explode("\n", fread($fp2, filesize('noun.txt')));
	}

	//Figures out how many lines there are in the file. 
	$file="funny.txt";
	$linecount = 0;
	$handle = fopen($file, "r");
	while(!feof($handle)){
	  $line = fgets($handle);
	  $linecount++;
	}

	fclose($handle);

	$funnylines = $linecount; //Sets the line count to the correct number. 

	//Figures out how many lines there are in the file. 
	$file="noun.txt";
	$linecount = 0;
	$handle = fopen($file, "r");
	while(!feof($handle)){
	  $line = fgets($handle);
	  $linecount++;
	}

	fclose($handle);

	$nounlines = $linecount; //Sets the line count to the correct number. 

	echo ("Load Jokes Done");


	$funnyword = $funnyarray[rand(0,$funnylines - 1)];
	$noun = $nounarray[rand(0,$nounlines - 1)];

	//Checks for empty lines that may be added, makes them the first one in the array.
	if ($funnyword == "")
	{
	$funnyword = $funnyarray[1];
	}
	if ($noun == "")
	{
	$noun = $nounarray[1];
	}

	echo ("Create Jokes Done");

function togglePogoDown() {
	$isDown = !$isDown;
}

echo ("Done!");




?>
