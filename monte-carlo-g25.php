ini_set('memory_limit', '2G');

$csvData = "..."; // Assume CSV data is loaded here
$lines = explode("\n", $csvData);
$referencePopulations = [];

foreach ($lines as $line) {
    $parts = explode(',', $line);
    $populationName = array_shift($parts);
    $referencePopulations[$populationName] = array_map('floatval', $parts);
}

// Sample G25 coordinates
$sampleUnscaled = []; // Your UNSCALED coord here

function calculateEuclideanDistance(array $coords1, array $coords2) {
    $sum = 0;
    for ($i = 0; $i < count($coords1); $i++) {
        $sum += pow(($coords1[$i] - $coords2[$i]), 2);
    }
    return sqrt($sum);
}

// Monte Carlo simulation parameters
$iterations = 100000;
$bestDistance = PHP_FLOAT_MAX;
$bestCombination = null;

for ($iter = 0; $iter < $iterations; $iter++) {
    $randomPopulations = array_rand($referencePopulations, 4); // Select 4 random populations
    $randomPercentages = array_map(function () { return mt_rand(1, 100); }, range(1, 4));
    $total = array_sum($randomPercentages);
    $randomPercentages = array_map(function ($val) use ($total) { return $val / $total; }, $randomPercentages);

    $averageCoords = array_fill(0, count($sampleUnscaled), 0);
    foreach ($randomPopulations as $index => $population) {
        $percent = $randomPercentages[$index];
        for ($i = 0; $i < count($sampleUnscaled); $i++) {
            $averageCoords[$i] += $referencePopulations[$population][$i] * $percent;
        }
    }

    $distance = calculateEuclideanDistance($sampleUnscaled, $averageCoords);
    if ($distance < $bestDistance) {
        $bestDistance = $distance;
        $bestCombination = array_combine($randomPopulations, $randomPercentages);
    }
}

// Output the best combination found
echo "Best combination of ancestries:<br><br>";
foreach ($bestCombination as $population => $percentage) {
    echo "$population: " . round($percentage * 100, 2) . "%, ";
}
echo "<br>Distance: $bestDistance<br><br>";
