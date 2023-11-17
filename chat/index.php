<?php
// function createUserSpace()
// {
//     $username = "test_user";
//     $createdir = mkdir($username);
//     $createfile = fopen($username . '/' . 'index.php', 'x');
// }
// createUserSpace();
?>
<!DOCTYPE html>
<html lang="en">

<!-- ======= Flexomate Header ======= -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Important Meta Tags -->
    <meta content="Get started with Flexomate with a great collection of users, short videos, posts, tapes, music and many more. Showcase your skills by creating short videos, uploading posts, sharing tapes, etc. only on Flexomate." name="description">
    <meta content="Florixer, Flexomate, Social Media, Online Learning, Flex skills, Short Video, Listen Music, Explore, Social Media Company, Flex with your mates, friends, family, skills, create, upload, share, Kaushal Krishna, Chat, Create post, Find people, Enjoy videos" name="keywords">
    <meta property="og:site_name" content="Flexomate" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.flexomate.rf.gd/" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@flexomate" />
    <meta name="twitter:site" content="@flexomate" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta property="og:title" content="Flexomate - Flex with your mates" />
    <meta name="twitter:title" content="Flexomate - Flex with your mates" />
    <meta property="og:description" content="Get started with Flexomate with a great collection of users, short videos, posts, tapes, music and many more. Showcase your skills by creating short videos, uploading posts, sharing tapes, etc. only on Flexomate." />
    <meta name="description" content="Get started with Flexomate with a great collection of users, short videos, posts, tapes, music and many more. Showcase your skills by creating short videos, uploading posts, sharing tapes, etc. only on Flexomate." />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta property="og:image" content="https://flexomate.rf.gd/assets/img/home-preview.png" />
    <meta name="twitter:image" content="https://flexomate.rf.gd/assets/img/home-preview.png" />
    <link rel="canonical" href="https://www.flexomate.rf.gd/" />

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Social Media Company",
            "name": "Flexomate - Flex with your mates",
            "description": "Flexomate - "
            A Social Media Company which enables one to showcase their skills,
            learn from short videos,
            listen to music,
            explore the space,
            find new mates,
            chat with them and enjoy using the platform.
            ",
            "logo": "https://flexomate.rf.gd/assets/img/florixer_logo.png"
        },
        "email": "mailto:mail@flexomate.rf.gd",
        "url": "https://www.flexomate.rf.gd/",
        "sameAs": ["https://twitter.com/flexomate", "https://www.facebook.com/flexomate.fb", "https://www.linkedin.com/company/flexomate", "https://instagram.com/flexomate.ig/", "https://www.youtube.com/flexomate", "https://www.pinterest.com/flexomate/"]
        }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPR2078P09"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DPR2078P09');
    </script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Catamaran&family=PT+Sans&family=Montserrat&family=Ubuntu&family=Orbitron&family=Noto+Sans&display=swap" rel="stylesheet">

    <!-- Flat Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" rel="stylesheet" />

    <!-- Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

    <!-- Box Icons -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- jQuery Minified Version -->
    <script src="../assets/js/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap @5.2.0 Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>

    <!-- Bootstrap @5.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css?ver=<?php $currentTime = date('YmdHis', time());
                                            echo $currentTime ?>" rel="stylesheet">
    <title>Flexomate - Flex with your mates</title>
</head>

<body id="body">
    <main class="main" id="main">
        <nav id="mobile-bottom-navbar">
            <i class="bottom-nav-icon">
                <svg class="home-icon" style="cursor: pointer;" height="1.7rem" onclick="homeIconClick()" role="img" viewBox="0 0 24 24">
                    <title>Home</title>
                    <path d="M9.005 16.545a2.997 2.997 0 0 1 2.997-2.997A2.997 2.997 0 0 1 15 16.545V22h7V11.543L12 2 2 11.543V22h7.005Z" fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="0"></path>
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
        <section id="chat">
            <div class="chat-container">
                <div class="chat-top-nav">
                    <div class="chat-top-nav-left-icons">
                        <i class="far fa-arrow-left chat-top-nav-icon"></i>
                    </div>
                    <b class="chat-top-nav-username">test_user</b>
                    <i class="fa fa-sync-alt chat-top-nav-reload-btn"></i>
                    <div class="chat-top-nav-right-icons">
                        <i class="chat-top-nav-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="camera-plus-icon" viewBox="0 0 256 256">
                                <path fill="#000" d="M85.9,32.5c-0.9,0.7-2.2,4.7-6.2,19.6l-5,18.8l-24.2,0.3l-24.1,0.3L23,73.1c-4.8,2.3-8.7,6.1-11.1,10.9L10,87.8v60v59.9l1.7,3.4c2.1,4.2,5.3,7.9,8.9,10c5.8,3.4-1.3,3.2,107.4,3.2c107.8,0,101.6,0.2,106.9-2.9c3.7-2.2,7.4-6.2,9.3-10.2l1.7-3.6v-59.9V87.9l-1.6-3.5c-2.3-4.8-6.1-8.7-10.9-11.1l-3.9-1.9l-24.2-0.3l-24.2-0.3l-5-18.8c-4-15-5.2-18.9-6.1-19.6c-1.1-0.9-3.6-0.9-42.2-0.9C89.6,31.6,86.9,31.6,85.9,32.5z M169.1,58.7c2.7,10.1,5.2,18.8,5.8,19.4c0.8,1.1,1.3,1.1,27,1.3c25.1,0.3,26.2,0.3,28.4,1.3c2.8,1.3,5.8,4.5,6.7,7.2c0.6,1.6,0.7,12.2,0.7,60.1c0,52.1-0.1,58.3-0.8,59.9c-1.3,2.9-3.6,5.2-6.4,6.5l-2.6,1.2H128H28l-2.6-1.2c-2.8-1.3-5-3.6-6.4-6.5c-0.7-1.6-0.8-7.8-0.8-59.9c0-47.9,0.1-58.5,0.7-60.1c0.9-2.7,4-5.9,6.7-7.2c2.2-1,3.3-1.1,28.4-1.3c25.7-0.3,26.2-0.3,27-1.3c0.5-0.6,3.1-9.3,5.8-19.4l4.8-18.4H128h36.3L169.1,58.7z" />
                                <path fill="#000" d="M101.8,53.4v4.4H128h26.2v-4.4v-4.4H128h-26.2V53.4z" />
                                <path fill="#000" d="M118.5,89.5c-18.1,3.2-34,15.5-42,32.3c-3.9,8.4-6,19.1-5.3,27.3c2.1,25.8,20.9,47,46,52.2c7,1.5,17.5,1.2,24.2-0.5c23.5-6.2,40.5-25.9,43.2-50c1.7-15.6-4.5-33-16.3-44.8C155,92.5,136.3,86.3,118.5,89.5z M134,97.6c13.1,1,26.7,9.3,34.3,20.8c10.3,15.5,10.6,37,0.8,52.9c-4.9,8.1-11.4,13.8-20.1,17.9c-5.7,2.7-9.2,3.7-16,4.5c-9.2,1.1-18.3-0.6-27.4-5.1c-15.5-7.7-25-22.6-25.8-40.7c-1-22.8,12.7-42.4,34-48.6c4.4-1.2,12.3-2.3,15.2-2C129.7,97.3,132,97.5,134,97.6z" />
                                <path fill="#000" d="M125.2,116.2l-1.3,1.2v11.9v11.8h-11.3c-6.2,0-11.9,0.2-12.6,0.5c-1.5,0.6-2.8,3.1-2.4,4.9c0.1,0.7,0.8,1.7,1.5,2.3c1.2,1,2.1,1,13,1h11.8v11.8v11.9l1.3,1.2c0.8,0.8,1.9,1.3,2.8,1.3c1,0,2.1-0.5,2.8-1.3l1.3-1.2v-11.9v-11.8h11.8c11.1,0,11.8-0.1,13.1-1.1c1.6-1.3,1.9-4.3,0.4-6.2c-1-1.2-1.1-1.2-13.1-1.4l-12.1-0.2v-11.8v-11.8l-1.3-1.2c-0.8-0.8-1.9-1.3-2.8-1.3S125.9,115.3,125.2,116.2z" />
                            </svg>
                        </i>
                        <i class=" chat-top-nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="video-plus-icon" viewBox="0 0 24 24">
                                <path d="M23.08,6.15c-.568-.285-1.236-.223-1.799,.205l-2.281,2.301v-.157c0-2.481-2.019-4.5-4.5-4.5H4.5C2.019,4,0,6.019,0,8.5v7c0,2.481,2.019,4.5,4.5,4.5H14.5c2.481,0,4.5-2.019,4.5-4.5v-.19l2.336,2.327c.295,.222,.645,.334,.997,.334,.253,0,.509-.058,.747-.177,.568-.284,.92-.854,.92-1.489V7.64c0-.635-.353-1.206-.92-1.489Zm-8.58,12.85H4.5c-1.93,0-3.5-1.57-3.5-3.5v-7c0-1.93,1.57-3.5,3.5-3.5H14.5c1.93,0,3.5,1.57,3.5,3.5v7c0,1.93-1.57,3.5-3.5,3.5Zm8.5-2.695c0,.257-.138,.48-.368,.595-.231,.117-.491,.092-.643-.017l-2.989-2.986v-3.821l2.936-2.97c.206-.154,.466-.177,.697-.062,.23,.115,.368,.337,.368,.595v8.666Zm-9.5-4.305c0,.276-.224,.5-.5,.5h-3v3c0,.276-.224,.5-.5,.5s-.5-.224-.5-.5v-3h-3c-.276,0-.5-.224-.5-.5s.224-.5,.5-.5h3v-3c0-.276,.224-.5,.5-.5s.5,.224,.5,.5v3h3c.276,0,.5,.224,.5,.5Z" />
                            </svg>

                        </i>
                    </div>
                </div>
                <div class="search-container">
                    <div class="search-box">
                        <i class="far fa-search search-icon"></i>
                        <input type="text" class="search-input-field" placeholder="Search Mates...">
                        <i class="fa fa-times-circle search-cross-icon hidden"></i>
                    </div>
                </div>
                <div class="chat-list">
                    <label class="chat-messages-heading">
                        <b>Messages</b>
                    </label>
                    <div class="chat-list-item">
                        <img class="chat-list-item-profile-img" src="../assets/img/demo-person.jpg">
                        <div class="chat-list-item-main">
                            <b class="chat-list-item-username">user_me.23</b>
                            <div class="chat-list-item-message">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                        <i class="fa fa-chevron-right chat-list-item-right-icon"></i>
                    </div>
                    <div class="chat-list-item">
                        <img class="chat-list-item-profile-img" src="../assets/img/kaushal_krishna.jpg">
                        <div class="chat-list-item-main">
                            <b class="chat-list-item-username">user_me.23</b>
                            <div class="chat-list-item-message">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                        <i class="fa fa-chevron-right chat-list-item-right-icon"></i>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="../assets/js/main.js?ver=<?php $currentTime = date('YmdHis', time());
                                                        echo $currentTime ?>"></script>
</body>

</html>