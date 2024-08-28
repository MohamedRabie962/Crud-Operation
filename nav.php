<?php
global$page_active;
?>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item  <?php if($page_active=="home"){echo "active";} ?> ">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php if($page_active=="users"){echo "active";} ?>">
            <a class="nav-link" href="users.php">users</a>
        </li>
        <li class="nav-item <?php if($page_active=="add-user"){echo "active";} ?>">
            <a class="nav-link" href="add_user.php">Add User</a>
        </li>
        
        </ul>
    </div>
</nav>
