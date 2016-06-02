<h1>Here is a list of all members:</h1>
<table>
<?php foreach($members as $member) { ?>
    <tr>
        <td class="name"><?php echo $member->fName; ?> <?php echo $member->lName; ?></td>
        <td><a href='?controller=members&action=show&id=<?php echo $member->id; ?>'>Member details</a></td>
    </tr>
<?php } ?>
</table>
