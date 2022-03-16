<?php
use Symfony\Component\HttpFoundation\Session\Session;
$session = new Session();
$userid = $session->get('id');

if ($userid !== null) {
    $sessionUsername = $session->get('username');
    echo "<p class='welcome_msg'> BONJOUR ADMIN " . $sessionUsername . "  " . $userid . " </p>";

}

?>
<div class="loguserwrapper">
<!-- left side bar -->
  <div class="left_sidebar">
    <ul>
      <li><a href="/admins/index/">Manage Posts</a></li>
      <li><a href="/admins/manageuser/">Manage Users</a></li>
      <li><a href="/admins/managecomment/">Manage Comments</a></li>
    </ul>
  </div>
<!-- Post contents-->
  <div class="admin_content">

  <div class="content">
    <h3 class="page_title"> Users</h3>
  <table>
  <thread>
    <th>User Id</th>

    <th>User Name</th>
    <th>Email</th>

  </thread>
  <tbody>

<?php

foreach ($users as $user) {?>

    <tr>
    <td><?php echo $user['userId']; ?></td>
    <td><?php echo $user['username']; ?></td>
    <td><?php echo $user['email']; ?></td>



    </tr>
    <?php }?>
    </tbody>
  </table>

  </div>
</div>
