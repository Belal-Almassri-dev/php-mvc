<h1>This is the requested member:</h1>
<table>
    <tr>
        <td class="name"><?php echo $member->fName; ?></td>
        <td class="name"><?php echo $member->lName; ?></td>
        <td><?php echo $member->email; ?></td>
        <td><img class="img_avatar" src="images/avatar/<?php echo $member->id; ?>.png"</td>
    </tr>
</table>