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
            <path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line>
            <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line>
        </svg>
    </i>
    <i class="bottom-nav-icon">
        <svg class="video-clips-icon" style="cursor: pointer;" height="1.7rem" onclick="videoClipsIconClick()" fill="#fff" role="img" viewBox="0 0 24 24">
            <title>Play Video Clips</title>
            <path d="m12.823 1 2.974 5.002h-5.58l-2.65-4.971c.206-.013.419-.022.642-.027L8.55 1Zm2.327 0h.298c3.06 0 4.468.754 5.64 1.887a6.007 6.007 0 0 1 1.596 2.82l.07.295h-4.629L15.15 1Zm-9.667.377L7.95 6.002H1.244a6.01 6.01 0 0 1 3.942-4.53Zm9.735 12.834-4.545-2.624a.909.909 0 0 0-1.356.668l-.008.12v5.248a.91.91 0 0 0 1.255.84l.109-.053 4.545-2.624a.909.909 0 0 0 .1-1.507l-.1-.068-4.545-2.624Zm-14.2-6.209h21.964l.015.36.003.189v6.899c0 3.061-.755 4.469-1.888 5.64-1.151 1.114-2.5 1.856-5.33 1.909l-.334.003H8.551c-3.06 0-4.467-.755-5.64-1.889-1.114-1.15-1.854-2.498-1.908-5.33L1 15.45V8.551l.003-.189Z" fill-rule="evenodd"></path>
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
<section id="video-clips">
    <div class="video">
        <div class="video-container">
            <div class="video-clip">
                <video src="../assets/vid/example-clip.mp4" loop autoplay muted></video>
            </div>
            <div class="video-clip">
                <video src="../assets/vid/example-clip.mp4" loop autoplay muted></video>
            </div>
            <div class="video-clip">
                <video src="../assets/vid/example-clip.mp4" loop autoplay muted></video>
            </div>
            <div class="video-clip">
                <video src="../assets/vid/example-clip.mp4" loop autoplay muted></video>
            </div>
            <div class="video-clip">
                <video src="../assets/vid/example-clip.mp4" loop autoplay muted></video>
            </div>
            <div class="video-clip">
                <video src="../assets/vid/example-clip.mp4" loop autoplay muted></video>
            </div>
        </div>
    </div>
</section>
</main>
<script src="../assets/js/main.js"></script>
</body>

</html>