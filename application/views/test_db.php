<?php

echo "array ==>"; print_r($db1);

echo $user;
?>


<table>
    <tbody>
        <?php foreach($db1['test'] as $key => $value){ ?>
            <tr>
                <td><?php echo $value['m_name'];?></td>
                <td><?php echo $value['m_email'];?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>