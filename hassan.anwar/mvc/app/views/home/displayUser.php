<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/18/16
 * Time: 4:54 PM
 */
?>

<h1>All users</h1>

<div>

<table>

    <tbody>
    <tr>
        <th>Sr#</th>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <?php $count=1;
    foreach ( $data as $user ) {

        ?>

        <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['password'] ?></td>
        </tr>

    <?php } ?>
    </tbody>

</table>

</div>