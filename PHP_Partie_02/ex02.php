<?php
$isEasy = false;

if ($isEasy == true) {
    echo "C'est facile !!";
} else {
    echo "C'est difficile !!";
    echo "<br>";
}?>

<?php if ($isEasy == true): ?>
    C'est facile !!
<?php else: ?>
    C'est difficile !!
<?php endif; ?>