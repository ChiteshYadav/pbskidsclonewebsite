<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Second Bar -->
<div class="second-bar">
    <button class="parents-button">
        <span>Parents</span>
    </button>
    <div class="welcome-message">
        Welcome to PBS KIDS! <span class="watch-now">Watch Now</span>
    </div>
    <div class="new-show-badge">
        New Show!
    </div>
</div>

<!-- Main Content Section -->
<div class="main-content-section">
    <!-- Logo Section -->
    <div class="logo-section">
        <img src="<?php echo base_url('assets/images/Logo.png'); ?>" alt="PBS Kids Logo" class="main-logo">
    </div>

    <!-- Sliding Content Section -->
    <div class="sliding-content">
        <div class="slide-container">
            <div class="slide-controls">
            <button class="prev-slide">Previous</button>
            <button class="next-slide">Next</button>
        </div>
            <div class="slide active">
                <h2>Welcome to PBS KIDS!</h2>
                <p>Discover fun games and educational content</p>
                <div class="game-list">
                    <div class="game-item">
                        <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Wild Kratts">
                        <h4>Wild Kratts</h4>
                        <p>Join the Kratt brothers on exciting animal adventures!</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <h2>New Shows</h2>
                <p>Check out our latest educational programs</p>
                <div class="game-list">
                    <div class="game-item">
                        <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Sesame Street">
                        <h4>Sesame Street</h4>
                        <p>Learn letters, numbers, and more with Elmo and friends!</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <h2>Play & Learn</h2>
                <p>Interactive games that make learning fun</p>
                <div class="game-list">
                    <div class="game-item">
                        <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Curious George">
                        <h4>Curious George</h4>
                        <p>Follow George's curious adventures in science!</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- New Section Below Main Content -->
<div class="secondary-content-section">
    <div class="options-bar">
        <a href="<?php echo base_url('videos'); ?>" class="option-button">Videos</a>
        <!-- Smaller Sliding Content Section -->
        <div class="small-sliding-content">
            <div class="slide-container">
                <div class="slide active">
                    <img src="<?php echo base_url('assets/images/placeholder-video.jpg'); ?>" alt="Featured Video">
                </div>
                <div class="slide">
                    <img src="<?php echo base_url('assets/images/placeholder-game.jpg'); ?>" alt="Popular Game">
                </div>
            </div>
        </div>
        <a href="<?php echo base_url('games'); ?>" class="option-button">Games</a>
    </div>
</div>

<!-- New Two-Column Section -->
<div class="two-column-section" id="two-column-start">
    <!-- Scroll Button -->
    <button class="scroll-button" id="scroll-to-top">&uarr;</button>

    <div class="column-one">
        <div class="row-one">
            <button class="game-option-button">New Games</button>
            <button class="game-option-button">Popular Games</button>
        </div>
        <div class="row-two">
            <!-- Games Grid -->
            <div class="game-grid-3x3">
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Wild Kratts">
                    <h4>Wild Kratts</h4>
                </div>
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Sesame Street">
                    <h4>Sesame Street</h4>
                </div>
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Curious George">
                    <h4>Curious George</h4>
                </div>
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Daniel Tiger">
                    <h4>Daniel Tiger</h4>
                </div>
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Arthur">
                    <h4>Arthur</h4>
                </div>
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Super Why">
                    <h4>Super Why</h4>
                </div>
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="WordGirl">
                    <h4>WordGirl</h4>
                </div>
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Nature Cat">
                    <h4>Nature Cat</h4>
                </div>
                <div class="game-card">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Peg + Cat">
                    <h4>Peg + Cat</h4>
                </div>
            </div>
        </div>
        <div class="row-three">
            <button class="all-games-button">All Games</button>
        </div>
    </div>
    <div class="column-two">
        <!-- Banner with Link Placeholder -->
        <a href="#" class="banner-link">
            <img src="<?php echo base_url('assets/images/pd2.png'); ?>" alt="Promotional Banner" class="banner-image">
            <button class="listen-now-button">Listen Now</button>
        </a>
    </div>
</div>

<!-- Text at the bottom of two-column-section -->
<div class="powered-by-text">
    <img src="<?php echo base_url('assets/images/Logo.png'); ?>" alt="Logo" class="powered-by-logo">
    <p><strong>Powered by Chitesh Yadav</strong></p>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.querySelector('.prev-slide');
        const nextButton = document.querySelector('.next-slide');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Auto slide every 5 seconds
        setInterval(nextSlide, 5000);

        // Button controls
        nextButton.addEventListener('click', nextSlide);
        prevButton.addEventListener('click', prevSlide);

        // Script for the small sliding content (if controls are added)
        // const smallSlides = document.querySelectorAll('.small-sliding-content .slide');
        // let currentSmallSlide = 0;

        // function showSmallSlide(index) {
        //     smallSlides.forEach(slide => slide.classList.remove('active'));
        //     smallSlides[index].classList.add('active');
        // }

        // // Auto slide for small slider (if needed)
        // setInterval(() => {
        //     currentSmallSlide = (currentSmallSlide + 1) % smallSlides.length;
        //     showSmallSmallSlide(currentSmallSlide);
        // }, 7000); // Slide every 7 seconds

        // // Button controls for small slider (if needed)
        // const smallPrevButton = document.querySelector('.small-sliding-content .prev-slide');
        // const smallNextButton = document.querySelector('.small-sliding-content .next-slide');
        // if(smallPrevButton && smallNextButton) {
        //     smallNextButton.addEventListener('click', () => {
        //         currentSmallSlide = (currentSmallSlide + 1) % smallSlides.length;
        //         showSmallSlide(currentSmallSlide);
        //     });
        //     smallPrevButton.addEventListener('click', () => {
        //         currentSmallSlide = (currentSmallSlide - 1 + smallSlides.length) % smallSlides.length;
        //         showSmallSlide(currentSmallSlide);
        //     });
        // }

    });

    // Script for the scroll button
    const scrollButton = document.getElementById('scroll-to-top');
    const twoColumnSection = document.getElementById('two-column-start');

    // Function to check scroll position and update button
    function updateScrollButton() {
        // Check if the user is at the very top of the page
        if (window.scrollY === 0) {
            // Show the down arrow to scroll to the two-column-section
            scrollButton.innerHTML = '&darr;';
            scrollButton.dataset.direction = 'down';
        } else {
            // Show the up arrow to scroll to the top of the page
            scrollButton.innerHTML = '&uarr;';
            scrollButton.dataset.direction = 'up';
        }
    }

    // Add scroll event listener to update button visibility and direction
    window.addEventListener('scroll', updateScrollButton);

    // Initial call to set button state on page load
    updateScrollButton();

    // Add click event listener to button
    scrollButton.addEventListener('click', () => {
        const direction = scrollButton.dataset.direction;
        if (direction === 'up') {
            // Scroll to the top of the page
            window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
            // Scroll to the top of the two-column-section
            twoColumnSection.scrollIntoView({ behavior: 'smooth' });
        }
    });

</script>

<style>
/* Main Content Section Styles */
.main-content-section {
    width: 100%;
    margin: 0;
    padding: 40px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
    background: url('<?php echo base_url('assets/images/bkmc.jpg'); ?>') center/cover no-repeat fixed;
    position: relative;
    overflow: hidden;
}

.main-content-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2));
    z-index: 1;
}

/* Logo Section Styles */
.logo-section {
    width: 100%;
    text-align: left;
    margin-bottom: 20px;
    padding: 0 40px;
    position: relative;
    z-index: 2;
}

.main-logo {
    max-width: 150px;
    height: auto;
    transition: transform 0.3s ease;
    filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
}

.main-logo:hover {
    transform: scale(1.05);
}

/* Sliding Content Styles */
.sliding-content {
    width: 100%;
    margin: 0;
    position: relative;
    background: rgba(255, 255, 255, 0.1);
    padding: 40px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    transition: all 0.3s ease;
    z-index: 2;
}

.sliding-content:hover {
    background: rgba(255, 255, 255, 0.08);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
}

.slide-container {
    position: relative;
    width: 100%;
    min-height: 400px;
    max-width: 1400px;
    margin: 0 auto;
    perspective: 1000px;
    z-index: 2;
}

.slide {
    position: absolute;
    width: 100%;
    opacity: 0;
    transition: all 0.5s ease-in-out;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transform: translateY(20px);
}

.slide.active {
    opacity: 1;
    position: relative;
    transform: translateY(0);
}

.slide h2 {
    color: #FFFFFF;
    font-size: 42px;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    font-weight: 700;
    letter-spacing: 0.5px;
}

.slide p {
    color: #FFFFFF;
    font-size: 22px;
    margin-bottom: 30px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    max-width: 800px;
    line-height: 1.6;
}

/* Game List Styles */
.game-list {
    display: flex;
    justify-content: center;
    margin-top: 30px;
    width: 100%;
    max-width: 1400px;
    position: relative;
    z-index: 2;
}

.game-item {
    text-align: center;
    transition: all 0.3s ease;
    cursor: pointer;
    width: 400px;
    background: rgba(255, 255, 255, 0.15);
    padding: 30px;
    border-radius: 20px;
    backdrop-filter: blur(8px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.game-item:hover {
    transform: translateY(-5px) scale(1.02);
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.game-item img {
    width: 300px;
    height: 300px;
    border-radius: 15px;
    object-fit: cover;
    margin-bottom: 25px;
    border: 3px solid rgba(255, 255, 255, 0.8);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.game-item:hover img {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.game-item h4 {
    color: #FFFFFF;
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    letter-spacing: 0.5px;
}

.game-item p {
    color: #FFFFFF;
    margin: 0;
    font-size: 18px;
    line-height: 1.6;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

/* Slide Controls */
.slide-controls {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
    position: relative;
    z-index: 2;
}

.slide-controls button {
    background: rgba(0, 171, 201, 0.8);
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 16px;
    font-weight: 600;
    backdrop-filter: blur(5px);
    text-transform: uppercase;
    letter-spacing: 1px;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.slide-controls button:hover {
    background: rgba(0, 139, 163, 0.9);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

@media (max-width: 768px) {
    .main-content-section {
        padding: 20px 0;
        gap: 20px;
    }

    .logo-section {
        padding: 0 20px;
    }

    .main-logo {
        max-width: 120px;
    }

    .sliding-content {
        padding: 20px;
        border-radius: 15px;
    }

    .slide h2 {
        font-size: 32px;
    }

    .slide p {
        font-size: 18px;
    }

    .game-item {
        width: 280px;
        padding: 20px;
        border-radius: 15px;
    }

    .game-item img {
        width: 200px;
        height: 200px;
        border-radius: 10px;
    }

    .game-item h4 {
        font-size: 22px;
    }

    .game-item p {
        font-size: 16px;
    }

    .slide-controls button {
        padding: 12px 24px;
        font-size: 14px;
    }
}

/* Two Column Section Styles */
.two-column-section {
    display: flex;
    gap: 30px;
    padding: 40px;
    background: rgba(57, 255, 20, 0.15);
    backdrop-filter: blur(8px);
    border-radius: 20px;
    margin: 20px;
    position: relative;
    box-shadow: 0 0 20px rgba(57, 255, 20, 0.2),
                inset 0 0 20px rgba(57, 255, 20, 0.1);
    border: 1px solid rgba(57, 255, 20, 0.3);
}

.two-column-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, 
        rgba(57, 255, 20, 0.1),
        rgba(57, 255, 20, 0.05));
    border-radius: 20px;
    z-index: -1;
}

.column-one {
    flex: 2;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.column-two {
    flex: 1;
}

/* Game Grid Styles */
.game-grid-3x3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 20px;
    background: rgba(57, 255, 20, 0.05);
    border-radius: 15px;
    box-shadow: inset 0 0 15px rgba(57, 255, 20, 0.1);
}

.game-card {
    background: rgba(57, 255, 20, 0.1);
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 1px solid rgba(57, 255, 20, 0.2);
    box-shadow: 0 4px 15px rgba(57, 255, 20, 0.1);
}

.game-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(57, 255, 20, 0.2);
    background: rgba(57, 255, 20, 0.15);
    border-color: rgba(57, 255, 20, 0.4);
}

.game-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-bottom: 1px solid rgba(57, 255, 20, 0.2);
}

.game-card h4 {
    color: #FFFFFF;
    padding: 15px;
    margin: 0;
    font-size: 16px;
    text-align: center;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

/* Button Styles */
.game-option-button {
    background: rgba(57, 255, 20, 0.2);
    color: white;
    border: 1px solid rgba(57, 255, 20, 0.3);
    padding: 12px 25px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 16px;
    font-weight: 600;
    backdrop-filter: blur(5px);
    box-shadow: 0 4px 15px rgba(57, 255, 20, 0.1);
}

.game-option-button:hover {
    background: rgba(57, 255, 20, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(57, 255, 20, 0.2);
    border-color: rgba(57, 255, 20, 0.5);
}

.all-games-button {
    background: rgba(57, 255, 20, 0.15);
    color: white;
    border: 1px solid rgba(57, 255, 20, 0.3);
    padding: 15px 30px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 16px;
    font-weight: 600;
    backdrop-filter: blur(5px);
    width: 100%;
    box-shadow: 0 4px 15px rgba(57, 255, 20, 0.1);
}

.all-games-button:hover {
    background: rgba(57, 255, 20, 0.25);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(57, 255, 20, 0.2);
    border-color: rgba(57, 255, 20, 0.5);
}

/* Banner Styles */
.banner-link {
    display: block;
    text-decoration: none;
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(57, 255, 20, 0.1);
    border: 1px solid rgba(57, 255, 20, 0.2);
}

.banner-link:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(57, 255, 20, 0.2);
    border-color: rgba(57, 255, 20, 0.4);
}

.banner-image {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 12px;
}

.listen-now-button {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(57, 255, 20, 0.3);
    color: white;
    border: 1px solid rgba(57, 255, 20, 0.4);
    padding: 12px 25px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 16px;
    font-weight: 600;
    backdrop-filter: blur(5px);
    box-shadow: 0 4px 15px rgba(57, 255, 20, 0.2);
}

.listen-now-button:hover {
    background: rgba(57, 255, 20, 0.4);
    transform: translateX(-50%) translateY(-2px);
    box-shadow: 0 8px 20px rgba(57, 255, 20, 0.3);
    border-color: rgba(57, 255, 20, 0.6);
}

@media (max-width: 1024px) {
    .two-column-section {
        flex-direction: column;
        padding: 20px;
    }

    .game-grid-3x3 {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .game-grid-3x3 {
        grid-template-columns: 1fr;
    }

    .game-card img {
        height: 200px;
    }
}
</style> 