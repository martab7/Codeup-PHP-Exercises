<?php
fwrite(STDOUT, "What is your name? ");
$name = trim(fgets(STDIN));

do {
  fwrite(STDOUT, "Type in the subject for calculation - If done, type x - ");
  $subject = trim(fgets(STDIN));
  if($subject == 'x') {
    break;
  }
  $grades = [];
  do{
    fwrite(STDOUT, "Enter grade for {$subject} - If done, type x - ");
    $enteredGrade = trim(fgets(STDIN));
    if($enteredGrade == 'x') {
      break;
    };
    $grades[] = $enteredGrade;
  } while($enteredGrade != 'x');
  $subjectGrades[] = average($grades);
  $subjects[] = $subject;
} while($subject != 'x');


function average(&$grades) {
  $total = 0;
  $average = 0;
  $numberOfGrades = count($grades);
  foreach($grades as $grade) {
    $total += $grade;
  };
  $average = $total / $numberOfGrades;
  return $average;
}

foreach (array_combine($subjects, $subjectGrades) as $subject => $subjectGrade) {
  if($subjectGrade >= 80) {
    echo "{$name}, your average for {$subject} is {$subjectGrade}. Good work.\n";
  } else {
    echo "{$name}, your average for {$subject} is {$subjectGrade}. Try harder.\n";
  }
}
