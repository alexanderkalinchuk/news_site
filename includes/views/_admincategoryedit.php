<!--отображает категории новостей в редакторе-->
<tr>
  <td>
    <?php echo ($admincategoryedit->name)?>
  </td>
  <td>
    <a href='?delete=<?php echo $admincategoryedit->id ?>'>Delete category</a> <br>
  </td>
</tr>
