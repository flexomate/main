<?php
include "../assets/page/header.php";
?>
<nav id="mobile-bottom-navbar">
    <i class="bottom-nav-icon">
        <svg class="home-icon" style="cursor: pointer;" height="1.7rem" onclick="homeIconClick()" role="img" viewBox="0 0 24 24">
            <title>Home</title>
            <path d="M9.005 16.545a2.997 2.997 0 0 1 2.997-2.997A2.997 2.997 0 0 1 15 16.545V22h7V11.543L12 2 2 11.543V22h7.005Z" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="2"></path>
        </svg>
    </i>
    <i class="bottom-nav-icon">
        <svg class="search-icon" style="cursor: pointer;" height="1.7rem" onclick="searchIconClick()" role="img" viewBox="0 0 24 24">
            <title>Search Flexomate</title>
            <path d="M19 10.5A8.5 8.5 0 1 1 10.5 2a8.5 8.5 0 0 1 8.5 8.5Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            <line fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="16.511" x2="22" y1="16.511" y2="22"></line>
        </svg>
    </i>
    <i class="bottom-nav-icon">
        <svg class="new-post-icon" style="cursor: pointer;" height="1.7rem" onclick="newPostIconClick()" role="img" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <title>New Post</title>
            <path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552Z" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            <line fill="none" stroke="#151515" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line>
            <line fill="none" stroke="#151515" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line>
        </svg>
    </i>
    <i class="bottom-nav-icon">
        <svg class="video-clips-icon" style="cursor: pointer;" height="1.7rem" onclick="videoClipsIconClick()" fill="currentColor" role="img" viewBox="0 0 24 24">
            <title>Play Video Clips</title>
            <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="2.049" x2="21.95" y1="7.002" y2="7.002"></line>
            <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="13.504" x2="16.362" y1="2.001" y2="7.002"></line>
            <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="7.207" x2="10.002" y1="2.11" y2="7.002"></line>
            <path d="M2 12.001v3.449c0 2.849.698 4.006 1.606 4.945.94.908 2.098 1.607 4.946 1.607h6.896c2.848 0 4.006-.699 4.946-1.607.908-.939 1.606-2.096 1.606-4.945V8.552c0-2.848-.698-4.006-1.606-4.945C19.454 2.699 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.546 2 5.704 2 8.552Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            <path d="M9.763 17.664a.908.908 0 0 1-.454-.787V11.63a.909.909 0 0 1 1.364-.788l4.545 2.624a.909.909 0 0 1 0 1.575l-4.545 2.624a.91.91 0 0 1-.91 0Z" fill-rule="evenodd"></path>
        </svg>
    </i>
    <i class="bottom-nav-icon">
        <div class="user-profile <?php echo (!isset($_SESSION['loggedin'])) ? 'hidden' : ''; ?> <?php echo (isset($_SESSION['loggedin'])) ? 'visible' : ''; ?>">
            <?php if ($image == NULL) {
                echo '<img class="user-profile-icon" src="../assets/img/demo-person.jpg" onclick="myProfileIconClick()" title="My Profile">';
            } else {
                echo '<img class="user-profile-icon" src="../auth/assets/img/uploads/profile/' . $image . '" onclick="myProfileIconClick()" title="My Profile">';
            } ?>
        </div>
    </i>
</nav>
<section id="new-post">

</section>
</main>
<script src="../assets/js/main.js"></script>
</body>

</html>