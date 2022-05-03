<?php 

$Levels = new Level;
$displayLevels = $Levels->display();
?>
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="/admin_panal/assets/img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="/admin_panal/assets/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a title="Landing Page" href="/admin_panal/" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                        </li>

                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Subjects</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <?php foreach($displayLevels as $level): ?>
                                <li><a title="frist groub" href="/admin_panal/padges/subjects/?ref=<?php echo $level['id'] ?>"><span class="mini-sub-pro"><?php echo $level['name'] ?></span></a></li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="/admin_panal/padges/students/"><span class="mini-sub-pro">All Students</span></a></li>
                                <li><a title="Add Students" href="/admin_panal/padges/students/add_student.php"><span class="mini-sub-pro">Add Student</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="/admin_panal/padges/auth/admins.php"><span class="mini-sub-pro">All Admins</span></a></li>
                                <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Professor</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">