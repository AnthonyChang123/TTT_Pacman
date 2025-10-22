<?php
include('header.php');
?>

<style>
/* Hero Section with Search */
.hero-section {
  background: linear-gradient(135deg, #003748 0%, #005a70 50%, #004d5e 100%);
  padding: 70px 20px 50px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.hero-content {
  position: relative;
  z-index: 1;
}

.hero-title {
  color: #FFFFFF;
  font-size: 3.2rem;
  font-weight: bold;
  margin-bottom: 15px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  letter-spacing: -1px;
}

.hero-subtitle {
  color: #FFD8A8;
  font-size: 1.3rem;
  margin-bottom: 40px;
  font-weight: 300;
}

.search-container {
  max-width: 750px;
  margin: 0 auto 35px;
  background-color: #FFFFFF;
  border-radius: 50px;
  padding: 8px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  display: flex;
  align-items: center;
  gap: 10px;
  transition: transform 0.3s ease;
}

.search-container:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
}

.search-container input[type="text"] {
  flex: 1;
  border: none;
  padding: 16px 20px;
  font-size: 1.1rem;
  border-radius: 50px;
  background-color: transparent;
  margin: 0;
  color: #333;
}

.search-container input[type="text"]::placeholder {
  color: #999;
}

.search-container input[type="text"]:focus {
  outline: none;
}

.search-container .search-icon {
  color: #FF8351;
  font-size: 1.6rem;
  padding-left: 20px;
}

.cancel-btn {
  background-color: #FFFFFF;
  color: #003748;
  padding: 14px 28px;
  border: 2px solid #e0e0e0;
  border-radius: 50px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 1rem;
}

.cancel-btn:hover {
  background-color: #f5f5f5;
  border-color: #FF8351;
  color: #FF8351;
}

/* Buy/Sell Buttons */
.action-buttons {
  display: flex;
  justify-content: center;
  gap: 25px;
  margin-top: 35px;
}

.buy-sell-btn {
  background: linear-gradient(135deg, #FF8351 0%, #FF6600 100%);
  color: #FFFFFF;
  padding: 20px 70px;
  border: none;
  border-radius: 12px;
  font-size: 1.4rem;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 6px 20px rgba(255, 131, 81, 0.4);
  text-transform: uppercase;
  letter-spacing: 2px;
  position: relative;
  overflow: hidden;
}

.buy-sell-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.2);
  transition: left 0.5s ease;
}

.buy-sell-btn:hover::before {
  left: 100%;
}

.buy-sell-btn:hover {
  background: linear-gradient(135deg, #e6733f 0%, #E65C00 100%);
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(255, 131, 81, 0.5);
}

.buy-sell-btn:active {
  transform: translateY(0);
}

/* Content Section */
.content-section {
  max-width: 95%;
  margin: 70px auto;
  padding: 0 40px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
  align-items: start;
}

/* Why Campus Trade Box */
.info-box {
  background: linear-gradient(135deg, #FFFFFF 0%, #FFF9F5 100%);
  border: 3px solid #FF8351;
  border-radius: 20px;
  padding: 60px 50px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  height: fit-content;
  min-height: 650px;
}

.info-box h2 {
  color: #FF8351;
  font-size: 2.5rem;
  margin-bottom: 25px;
  font-weight: bold;
}

.info-box .intro-text {
  color: #003748;
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 30px;
  line-height: 1.7;
}

.info-box p {
  color: #444;
  line-height: 1.9;
  font-size: 1.1rem;
  margin-bottom: 25px;
}

.features-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
  margin: 30px 0;
}

.feature-item {
  background-color: #FFFFFF;
  padding: 25px;
  border-radius: 12px;
  border-left: 4px solid #FF8351;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease;
}

.feature-item:hover {
  transform: translateX(5px);
}

.feature-item h3 {
  color: #003748;
  font-size: 1.3rem;
  margin-bottom: 10px;
  font-weight: bold;
}

.feature-item p {
  color: #555;
  font-size: 1.05rem;
  margin: 0;
  line-height: 1.7;
}

.cta-box {
  background-color: #003748;
  color: #FFFFFF;
  padding: 30px;
  border-radius: 12px;
  margin-top: 30px;
  text-align: center;
}

.cta-box p {
  color: #FFFFFF;
  font-size: 1.15rem;
  margin: 0;
  line-height: 1.7;
}

.cta-box strong {
  color: #FFD8A8;
}

/* Book Grid */
.books-grid {
  background: linear-gradient(135deg, #FFFFFF 0%, #FFF9F5 100%);
  border: 3px solid #FF8351;
  border-radius: 20px;
  padding: 60px 50px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  min-height: 650px;
}

.books-grid h3 {
  color: #003748;
  font-size: 2.5rem;
  margin-bottom: 15px;
  font-weight: bold;
}

.books-grid .subtitle {
  color: #666;
  font-size: 1.15rem;
  margin-bottom: 40px;
}

.book-items {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
  gap: 35px;
  justify-items: center;
  margin-bottom: 40px;
}

.book-item {
  width: 150px;
  height: 210px;
  background: linear-gradient(135deg, #003748 0%, #005a70 100%);
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  position: relative;
  cursor: pointer;
  transition: all 0.3s ease;
  overflow: hidden;
}

.book-item:hover {
  transform: translateY(-10px) rotate(3deg);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
}

.book-item .book-cover {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.book-item .bookmark {
  position: absolute;
  top: 0;
  right: 20px;
  width: 40px;
  height: 60px;
  background: linear-gradient(135deg, #FF8351 0%, #FF6600 100%);
  clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 75%, 0 100%);
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
  z-index: 2;
}

.book-item .book-spine {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 18px;
  background: rgba(0, 0, 0, 0.3);
  border-radius: 10px 0 0 10px;
}

.book-placeholder {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 4rem;
  color: rgba(255, 255, 255, 0.3);
}

.browse-more {
  text-align: center;
  margin-top: 35px;
}

.browse-btn {
  background-color: #003748;
  color: #FFFFFF;
  padding: 18px 50px;
  border: none;
  border-radius: 10px;
  font-size: 1.2rem;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.3s ease;
}

.browse-btn:hover {
  background-color: #005a70;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

/* Responsive Design */
@media (max-width: 1200px) {
  .content-section {
    grid-template-columns: 1fr;
    max-width: 900px;
  }

  .info-box, .books-grid {
    min-height: auto;
  }
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 2.3rem;
  }

  .hero-subtitle {
    font-size: 1.1rem;
  }

  .action-buttons {
    flex-direction: column;
    align-items: center;
  }

  .buy-sell-btn {
    width: 90%;
    max-width: 350px;
  }

  .info-box, .books-grid {
    padding: 40px 30px;
  }

  .book-items {
    grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
    gap: 25px;
  }

  .book-item {
    width: 130px;
    height: 180px;
  }
}

@media (max-width: 600px) {
  .hero-title {
    font-size: 1.9rem;
  }

  .search-container {
    flex-direction: column;
    padding: 15px;
  }

  .cancel-btn {
    width: 100%;
  }
}
</style>

<!-- Section with Search -->
<div class="hero-section">
  <div class="hero-content">
    <h1 class="hero-title">CampusTrade</h1>
    <p class="hero-subtitle">Buy and sell directly with Minnesota State students</p>

    <div class="search-container">
      <span class="search-icon">🔍</span>
      <input type="text" placeholder="Search by title, author, ISBN, or course code...">
      <button class="cancel-btn">Cancel</button>
    </div>

    <div class="action-buttons">
      <button class="buy-sell-btn" onclick="window.location.href='buyer.php'">Buy</button>
      <button class="buy-sell-btn" onclick="window.location.href='seller.php'">Sell</button>
    </div>
  </div>
</div>

<!-- Main Content Section -->
<div class="content-section">
  <!-- Why Campus Trade -->
  <div class="info-box">
    <h2>Why Campus Trade?</h2>
    <p class="intro-text">A student-to-student marketplace built for the Minnesota State system.</p>

    <p>Textbooks are expensive, and buying new isn't always necessary. Campus Trade connects you with other MinnState students who are selling the exact books you need at prices that won't break the bank.</p>

    <div class="features-grid">
      <div class="feature-item">
        <h3>Save Money</h3>
        <p>Buy used textbooks at significantly reduced prices compared to campus bookstores.</p>
      </div>

      <div class="feature-item">
        <h3>Sell Fast</h3>
        <p>List your books quickly and connect with buyers in your campus community.</p>
      </div>

      <div class="feature-item">
        <h3>Stay Local</h3>
        <p>Meet on campus for safe, convenient exchanges. No shipping required.</p>
      </div>

      <div class="feature-item">
        <h3>Verified Students</h3>
        <p>Only MinnState students with verified email addresses can join.</p>
      </div>
    </div>

    <div class="cta-box">
      <p>Join students across Minnesota State colleges who are trading textbooks and saving money each semester.</p>
    </div>
  </div>

  <!-- Featured Books -->
  <div class="books-grid">
    <h3>Featured Books</h3>
    <p class="subtitle">Recently listed textbooks from students across MinnState campuses</p>
    <div class="book-items">
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
    </div>
    <div class="browse-more">
      <button class="browse-btn" onclick="window.location.href='buyer.php'">Browse All Books</button>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>