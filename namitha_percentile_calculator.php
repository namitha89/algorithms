<?php
//Student Data
$dataString = '471908US,Randy Perez,1.60
957625US,Alice Brown,3.50
909401US,Maria Russell,3.90
342575US,Shirley Evans, 3.5
780367US,Daniel Bell,2.20
841786US,Willie Richardson,3.60
881365US,Ruby Lee,2.70
848124US,Peter Powell,2.30
497579US,Bruce Nelson,3.70
756454US,Bonnie Murphy,3.50
551871US,Chris Mac Cooper,2.70
734476US,Christine Walker,2.70
138197US,Alan Robinson,1.80
755435US,Philip Allen,2.90
744270US,Justin Scott,3.80
140419US,James Edwards,2.40
263737US,Ann Mitchell,3.60
522471US,Eugene Rivera,3.50
022169US,Irene Simmons,2.20
690697US,Joshua Über,3.60
094778US,Jonathan Reed,3.50
73780US,Johnny Ross,2.20
256090US,Jessica Howard,3.60
775011US,Frank Kelly,2.20
333218US,Kathy Patterson,3.7';

$dataStringArr = explode("\n", $dataString);

$studentDataArr = [];

foreach ($dataStringArr as $eachDataString) {
    list($id, $name, $gpa,) = explode(',', $eachDataString);
    $allGpaArr[]      = (float)$gpa;
    $studentDataArr[] = [
        'id'   => $id,
        'name' => $name,
        'gpa'  => (float)$gpa,
    ];
}

array_multisort($allGpaArr, SORT_ASC, $studentDataArr);

//KEEP: This counts the number of elements in the array
$noOfElements = count($studentDataArr);

/**
 * Formula:
 * PR% = L + ( 0.5 x S ) / N  Where,
 * L = Number of below rank,
 * S = Number of same rank,
 * N = Total numbers.
 **/

$percentiles = [];

foreach ($studentDataArr as $eachStudent) {

    $studentGpa  = $eachStudent['gpa'];
    $studentName = $eachStudent['name'];
    $studentUsn  = $eachStudent['id'];
    $percentileRank = getPercentileRank($studentDataArr, $studentGpa);

    $percentiles[] = [
    	'usn' => $studentUsn,
        'name' => $studentName,
        'rank' => (int)$percentileRank,
    ];

}

$allRanks = array_column($percentiles, 'rank');

//sort array in ascending order
array_multisort($allRanks, SORT_ASC, $percentiles);

//function to calculate percentile for each student

function getPercentileRank($studentDataArr, $percentile)
{
    $noOfStudentsBelow = 0;
    $noOfStudentsSame  = 0;
    $totalNumbers      = count($studentDataArr);
    foreach ($studentDataArr as $studentData) {
        $studentGpa = $studentData['gpa'];

        if ($studentGpa == $percentile) {
            $noOfStudentsSame++;
        } else if ($studentGpa < $percentile) {
            $noOfStudentsBelow++;
        }

    }

    $percentileRank = (($noOfStudentsBelow + (0.5 * $noOfStudentsSame)) / $totalNumbers) * 100;

    return $percentileRank;

}


echo "<table border='1' style='border-collapse: 
    collapse;border-color: silver;'>";
echo "<tr style='font-weight: bold;'>";
echo "<td width='150' align='center'>Sl no</td>";
echo "<td width='150' align='center'>USN</td>";
echo "<td width='150' align='center'>Name</td>";
echo "<td width='150' align='center'>Rank</td>";
echo "</tr>";

$slNo = 1;
foreach ($percentiles as $percentileRow)
{
    echo '<td width="150" align=center>' . $slNo++ . '</td>';
    echo '<td width="150" align=center>' . $percentileRow['usn']. '</td>';
    echo '<td width="150" align=center>' . $percentileRow['name'] . '</td>';
    echo '<td width="150" align=center>' . $percentileRow['rank'] . '</td>';
    echo '</tr>';
}
echo "</table>";