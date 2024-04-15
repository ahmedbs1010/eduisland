<?php
include '../controller/reclamC.php';

$c = new reclamsC();
$tab = $c->listreclam();

?>

<center>
    <h1>List of reclamation</h1>
    <h2>
        <a href="addreclam.php">Add reclamation</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th style="padding: 10px;">IdR</th>
        <th style="padding: 10px;">IdU</th>
        <th style="padding: 10px;">Subject</th>
        <th style="padding: 10px;">Description</th>
        <th style="padding: 10px;">Feedback</th>
        <th></th>
    </tr>

    <?php
    foreach ($tab as $reclams) {
    ?>
        <tr>
            <td style="padding: 10px;"><?= $reclams['idR']; ?></td>
            <td style="padding: 10px;"><?= $reclams['idU']; ?></td>
            <td style="padding: 10px;"><?= $reclams['subjectt']; ?></td>
            <td style="padding: 10px;"><?= $reclams['descriptionn']; ?></td>
            <td style="padding: 10px;"><?= $reclams['feedback']; ?></td>
            <td align="center">
                <a href="deletreclam.php?id=<?php echo $reclams['idR']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<center style="margin-top: 20px;">
    <form method="POST" action="updatereclam.php">
        <input type="submit" name="update" value="Update">
    </form>
</center>
