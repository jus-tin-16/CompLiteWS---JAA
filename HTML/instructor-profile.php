<?php 
    session_start();
?>
<!--Profile Page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <link href="../CSS/instructor-profile.css" rel="stylesheet">
   
</head>
<body>
    
    <header class="header-bottom">
        <div class="container">
            <div class="logo">COMPLITE</div>
            <nav class="navbar">
                <a href="../HTML/instructor-main.html" class="nav-link">Dashboard</a>
                <a href="../HTML/instructor-section.php" class="nav-link">Section</a>
                <a href="../HTML/instructor-profile.php" class="nav-link">Profile</a>
                <a href="#" id="logoutBtn" class="nav-link logout-link" onclick="logout()">Logout</a>
            </nav>
        </div>
    </header>

    <div class="profile-container">
        <div class="profile-picture">
            <img src="../path/to/profile-picture.jpg" id="profileImage" alt="Profile Picture">
            <label for="upload-picture" class="upload-label">Change Picture</label>
            <input type="file" id="upload-picture" accept="image/*">
        </div>
        <div class="profile-details">
            <h1><?php echo $_SESSION['firstname'].' '. $_SESSION['lastname']; ?></h1>
            <div class="detail-grid">
                <div class="profile-detail">
                    <span class="detail-label">Username</span>
                    <span class="detail-value" id="username"><?php echo $_SESSION['username']; ?></span>
                </div>
                <div class="profile-detail">
                    <span class="detail-label">Full Name</span>
                    <span class="detail-value" id="full-name"><?php echo $_SESSION['firstname'].' '. $_SESSION['lastname']; ?></span>
                </div>
                <div class="profile-detail">
                    <span class="detail-label">Email</span>
                    <span class="detail-value" id="email"><?php echo $_SESSION['e'] ?></span>
                </div>
                <div class="profile-detail">
                    <span class="detail-label">Sex</span>
                    <span class="detail-value" id="sex"><?php echo $_SESSION['s']; ?></span>
                </div>
                <div class="profile-detail">
                    <span class="detail-label">Birth Date</span>
                    <span class="detail-value" id="birth-date"><?php echo $_SESSION['b']; ?></span>
                </div>
            </div>
            <button class="edit-button" id="editProfileBtn">Edit Profile</button>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div id="editProfileModal" class="modal">
        <div class="modal-content">
            <h2>Edit Profile</h2>
            <form class="modal-form" id="editProfileForm">
                <input type="text" id="editFullName" placeholder="Full Name" required>
                <input type="email" id="editEmail" placeholder="Email" required>
                <select id="editSex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <input type="date" id="editBirthDate" required>
                <div class="modal-buttons">
                    <button type="button" class="modal-button cancel" id="cancelEditBtn">Cancel</button>
                    <button type="submit" class="modal-button save">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About COMPLITE</h3>
                <p>Educational platform dedicated to interactive learning</p>
            </div>
            <div class="footer-section">
                <h3>Navigation</h3>
                <ul class="footer-links">
                    <li><a href="../HTML/instructor-main.html">Dashboard</a></li>
                    <li><a href="../HTML/Lessons.html">Lessons</a></li>
                    <li><a href="../HTML/Activity.html">Activities</a></li>
                    <li><a href="../HTML/Activity.html">About</a></li>
                    <li><a href="../HTML/Activity.html">Profile</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: contact@complite.com</p>
                <p>Phone: (123) 456-7890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 COMPLITE. All rights reserved.</p>
        </div>
    </footer>

    <script src="../JS/instructor-profile.js"> </script>
    <script src="../JS/logout.js"></script>
</body>
</html>