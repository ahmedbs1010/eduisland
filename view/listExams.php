<?php
include "../controller/ExamsC.php";

$c = new ExamsC();
$tab = $c->listExams();

?>

<center>
    <h1>List of Exams</h1>
    <h2>
        <a href="addExams.php">Add Exam</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Id</th>
        <th>nom</th>
        <th>typee</th>
        <th>langue</th>
        <th>niveau</th>
        <th></th>
       
    </tr>

    <?php
    foreach ($tab as $exams) {
    ?>

        <tr>
            <td><?= $exams['id']; ?></td>
            <td><?= $exams['nom']; ?></td>
            <td><?= $exams['typee']; ?></td>
            <td><?= $exams['langue']; ?></td>
            <td><?= $exams['niveau']; ?></td>
            <td align="center">
                <form method="POST" action="updateExams.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value="<?php echo $exams['id']; ?>" name="id">
                </form>
                <a href="deleteExams.php?id=<?php echo $exams['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
