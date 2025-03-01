                <?php
    include 'connection.php';
                $q = "SELECT * FROM user_review ur
               INNER JOIN register ri ON ur.uid = ri.uid ";
                $rs = mysqli_query($cn, $q);
                $i = 1;
                while ($data = mysqli_fetch_assoc($rs)) {
                ?>
                  <tr urid="<?php echo $data['urid'] ?>">
                    <td data-target="urid"><?php echo $i ?></td>
                    <td><?php echo $data['unm'] ?></td>
                    <td><?php echo $data['urmsg'] ?></td>
                    <td data-target="urstatus"><?php echo $data['urstatus'] ?></td>
                    <td>
                      <a href="#" onclick="alert('Review Published')" class="btn btn-sm btn-danger" data-urid=<?php echo $data['urid'] ?>>Status</a>
                    </td>
                  </tr>
                <?php
                  $i++;
                }

                ?>
                <input type="hidden" name="urid" value="<?php echo $data['urid'] ?>" id="urid">