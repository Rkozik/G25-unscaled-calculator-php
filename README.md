# G25-unscaled-calculator-php
An ancestry DNA G25 calculator that accepts 2 known ethnicities as a parameter.


# How To Use (index.php)
## Paste in unscaled coordinate s(No Sample/name label)
$sampleUnscaled = [];

## Select known ethnicities (upto 2)
$knownPopulations = ['North_African:Egyptian', 'North_West_European:German']; 

## Iterate through percentages for the known populations
for ($percentage1 = 25; $percentage1 <= 100; $percentage1++) {

for ($percentage2 = 25; $percentage2 <= (100 - $percentage1); $percentage2++) {

Adjust $percentage1 and $percentage2 to be equal to your known percents for the first and second known ethnicity.
