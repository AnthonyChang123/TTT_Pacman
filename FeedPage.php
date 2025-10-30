<?php
session_start();
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusTrade Community</title>
    <link rel="stylesheet" href="CSS/FeedPage.css">
</head>
<body>
    <main class="feed-main-container">
        <div class="feed-container">
            <!-- Left Sidebar - Profile & Navigation -->
            <div class="left-sidebar">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-avatar">
                            <img src="Images/ProfileIcon.png" alt="Profile Picture">
                        </div>
                        <h3>Student User</h3>
                        <p>Metropolitan State University</p>
                        <p class="user-major">Computer Science</p>
                    </div>

                    <div class="profile-stats">
                        <div class="stat">
                            <span class="stat-number">24</span>
                            <span class="stat-label">Posts</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">156</span>
                            <span class="stat-label">Following</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Followers</span>
                        </div>
                    </div>

                    <div class="sidebar-nav">
                        <a href="buyerpage.php" class="nav-item active">
                            <span class="nav-icon">🏠</span>
                            Feed
                        </a>
                        <a href="buyerpage.php" class="nav-item">
                            <span class="nav-icon">🛒</span>
                            Browse Books
                        </a>
                        <a href="SellerPage.php" class="nav-item">
                            <span class="nav-icon">💰</span>
                            Sell Books
                        </a>
                        <a href="#" class="nav-item">
                            <span class="nav-icon">👥</span>
                            My Connections
                        </a>
                        <a href="#" class="nav-item">
                            <span class="nav-icon">🔔</span>
                            Notifications
                        </a>

                        <!-- Logout Button -->
                        <form method="post" action="logout.php" class="logout-form">
                            <button type="submit" class="nav-item logout-btn">
                                <span class="nav-icon">🚪</span>
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Campus Events -->
                <div class="campus-events">
                    <h3>Upcoming Events</h3>
                    <div class="event-item">
                        <div class="event-date">
                            <span class="event-day">24</span>
                            <span class="event-month">OCT</span>
                        </div>
                        <div class="event-details">
                            <h4>Book Swap Meet</h4>
                            <p>Friday, 3 PM @ Student Center</p>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-date">
                            <span class="event-day">25</span>
                            <span class="event-month">OCT</span>
                        </div>
                        <div class="event-details">
                            <h4>Study Group Session</h4>
                            <p>Tomorrow, 6 PM @ Library</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Feed Content -->
            <div class="main-feed">
                <!-- Create Post Section -->
                <div class="create-post-card">
                    <div class="post-input">
                        <img src="Images/ProfileIcon.png" alt="Your profile" class="post-avatar">
                        <input type="text" placeholder="What's on your mind, Student?" onclick="showPostForm()">
                    </div>
                    <div class="post-options">
                        <button class="post-option-btn" onclick="showPostForm('photo')">
                            <span class="option-icon">📷</span>
                            Photo
                        </button>
                        <button class="post-option-btn" onclick="showPostForm('book')">
                            <span class="option-icon">📚</span>
                            Book
                        </button>
                        <button class="post-option-btn" onclick="showPostForm('event')">
                            <span class="option-icon">📅</span>
                            Event
                        </button>
                    </div>
                </div>

                <!-- Feed Posts -->
                <div class="posts-container">
                    <!-- Post 1 - Book Sale -->
                    <div class="post-card">
                        <div class="post-header">
                            <img src="Images/ProfileIcon.png" alt="User" class="post-avatar">
                            <div class="post-user-info">
                                <h4>Sarah Johnson</h4>
                                <span class="post-meta">2 hrs ago · <span class="post-location">Metro State</span></span>
                            </div>
                            <button class="post-menu">⋯</button>
                        </div>
                        <div class="post-content">
                            <p>Just finished my Computer Science degree! Selling all my programming books at great prices.</p>
                            <div class="post-book">
                                <div class="book-cover">
                                    <div class="book-placeholder">📘</div>
                                </div>
                                <div class="book-details">
                                    <h5>Introduction to Algorithms</h5>
                                    <p class="book-author">By Thomas H. Cormen</p>
                                    <div class="book-meta">
                                        <span class="book-price">$35</span>
                                        <span class="book-condition">Like New</span>
                                        <span class="book-course">CS-301</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-stats">
                            <span class="likes-count">👍 24 people</span>
                            <span class="comments-count">💬 8 comments</span>
                        </div>
                        <div class="post-actions">
                            <button class="post-action-btn like-btn">
                                <span class="action-icon">👍</span>
                                Like
                            </button>
                            <button class="post-action-btn comment-btn">
                                <span class="action-icon">💬</span>
                                Comment
                            </button>
                            <button class="post-action-btn share-btn">
                                <span class="action-icon">🔄</span>
                                Share
                            </button>
                        </div>
                    </div>

                    <!-- Post 2 - Book Request -->
                    <div class="post-card">
                        <div class="post-header">
                            <img src="Images/ProfileIcon.png" alt="User" class="post-avatar">
                            <div class="post-user-info">
                                <h4>Mike Chen</h4>
                                <span class="post-meta">5 hrs ago · <span class="post-location">St. Cloud State</span></span>
                            </div>
                            <button class="post-menu">⋯</button>
                        </div>
                        <div class="post-content">
                            <p>Looking for Calculus II textbook for next semester! Anyone selling or know where I can find a good deal?</p>
                            <div class="book-request">
                                <div class="request-details">
                                    <h5>Calculus: Early Transcendentals</h5>
                                    <p class="book-author">By James Stewart</p>
                                    <span class="request-course">MATH-224</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-stats">
                            <span class="likes-count">👍 18 people</span>
                            <span class="comments-count">💬 5 comments</span>
                        </div>
                        <div class="post-actions">
                            <button class="post-action-btn like-btn">
                                <span class="action-icon">👍</span>
                                Like
                            </button>
                            <button class="post-action-btn comment-btn">
                                <span class="action-icon">💬</span>
                                Comment
                            </button>
                            <button class="post-action-btn share-btn">
                                <span class="action-icon">🔄</span>
                                Share
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar - Connections & Trending -->
            <div class="right-sidebar">
                <!-- Online Friends -->
                <div class="friends-section">
                    <h3>Online Now</h3>
                    <div class="friends-list">
                        <div class="friend-item">
                            <div class="friend-avatar">
                                <img src="Images/ProfileIcon.png" alt="Friend">
                                <span class="online-dot"></span>
                            </div>
                            <span class="friend-name">Alex Kim</span>
                        </div>
                        <div class="friend-item">
                            <div class="friend-avatar">
                                <img src="Images/ProfileIcon.png" alt="Friend">
                                <span class="online-dot"></span>
                            </div>
                            <span class="friend-name">Maria Garcia</span>
                        </div>
                        <div class="friend-item">
                            <div class="friend-avatar">
                                <img src="Images/ProfileIcon.png" alt="Friend">
                                <span class="online-dot"></span>
                            </div>
                            <span class="friend-name">David Wilson</span>
                        </div>
                    </div>
                </div>

                <!-- Trending Books -->
                <div class="trending-section">
                    <h3>Trending Textbooks</h3>
                    <div class="trending-list">
                        <div class="trending-item">
                            <span class="trending-rank">1</span>
                            <div class="trending-info">
                                <h5>Organic Chemistry</h5>
                                <p>12 posts this week</p>
                            </div>
                        </div>
                        <div class="trending-item">
                            <span class="trending-rank">2</span>
                            <div class="trending-info">
                                <h5>Introduction to Psychology</h5>
                                <p>9 posts this week</p>
                            </div>
                        </div>
                        <div class="trending-item">
                            <span class="trending-rank">3</span>
                            <div class="trending-info">
                                <h5>Financial Accounting</h5>
                                <p>7 posts this week</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="links-section">
                    <h3>Quick Links</h3>
                    <div class="links-list">
                        <a href="AboutPage.php" class="quick-link">About CampusTrade</a>
                        <a href="ContactPage.php" class="quick-link">Contact Support</a>
                        <a href="#" class="quick-link">Help Center</a>
                        <a href="#" class="quick-link">Campus Guidelines</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>

        document.querySelectorAll('.like-btn').forEach(button => {
            button.addEventListener('click', function() {
                if (this.classList.contains('liked')) {
                    this.classList.remove('liked');
                    this.innerHTML = '<span class="action-icon">👍</span> Like';
                } else {
                    this.classList.add('liked');
                    this.innerHTML = '<span class="action-icon">👍</span> Liked';
                }
            });
        });

        // Active nav item
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>

<?php include('footer.php'); ?>