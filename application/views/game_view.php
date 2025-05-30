<div class="main-content-section">
    <!-- Logo Section -->
    <div class="logo-section">
        <img src="/assets/images/Logo.png" alt="PBS Kids Logo" class="main-logo">
    </div>

    <!-- Game Window Section -->
    <div class="game-window-container">
        <div class="game-controls">
            <button class="control-button">Fullscreen</button>
            <button class="control-button">Sound</button>
            <button class="control-button">Help</button>
        </div>
        <div class="game-frame">
            <div class="placeholder-content">
                <h2>Math Adventure</h2>
                <p>Welcome to Math Adventure! This educational game helps you learn math through fun challenges.</p>
                <div class="placeholder-features">
                    <div class="feature">
                        <span class="feature-icon">🎯</span>
                        <p>Practice basic math operations</p>
                    </div>
                    <div class="feature">
                        <span class="feature-icon">🏆</span>
                        <p>Earn points and unlock levels</p>
                    </div>
                    <div class="feature">
                        <span class="feature-icon">🌟</span>
                        <p>Fun characters and animations</p>
                    </div>
                </div>
                <div class="placeholder-loading">
                    <p>Loading game...</p>
                    <div class="loading-bar"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Games Section -->
    <div class="related-games">
        <div class="games-grid">
            <div class="game-card">
                <img src="/assets/images/Logo.png" alt="Word Quest">
                <h4>Word Quest</h4>
                <p>Build your vocabulary!</p>
            </div>
            <div class="game-card">
                <img src="/assets/images/Logo.png" alt="Science Lab">
                <h4>Science Lab</h4>
                <p>Explore the wonders of science!</p>
            </div>
            <div class="game-card">
                <img src="/assets/images/Logo.png" alt="Art Studio">
                <h4>Art Studio</h4>
                <p>Create amazing artwork!</p>
            </div>
        </div>
    </div>
</div>

<style>
.placeholder-content {
    padding: 20px;
    text-align: center;
    color: #FFFFFF;
}

.placeholder-content h2 {
    color: #FFFFFF;
    margin-bottom: 15px;
}

.placeholder-features {
    display: flex;
    justify-content: space-around;
    margin: 30px 0;
}

.feature {
    text-align: center;
    padding: 15px;
    color: #FFFFFF;
}

.feature-icon {
    font-size: 2em;
    margin-bottom: 10px;
    display: block;
}

.placeholder-loading {
    margin-top: 30px;
    color: #FFFFFF;
}

.loading-bar {
    width: 200px;
    height: 10px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    margin: 15px auto;
    overflow: hidden;
    position: relative;
}

.loading-bar::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
    background: #FFFFFF;
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(200%); }
}
</style>
