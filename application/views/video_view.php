<div class="main-content-section">
    <!-- Logo Section -->
    <div class="logo-section">
        <img src="/assets/images/Logo.png" alt="PBS Kids Logo" class="main-logo">
    </div>

    <!-- Video Window Section -->
    <div class="video-window-container">
        <div class="video-controls">
            <button class="control-button">Fullscreen</button>
            <button class="control-button">Quality</button>
            <button class="control-button">Subtitles</button>
        </div>
        <div class="video-frame">
            <div class="placeholder-content">
                <h2>Wild Kratts</h2>
                <p>Join the Kratt brothers on wild animal adventures!</p>
                <div class="placeholder-features">
                    <div class="feature">
                        <span class="feature-icon">🦁</span>
                        <p>Learn about wild animals</p>
                    </div>
                    <div class="feature">
                        <span class="feature-icon">🌍</span>
                        <p>Explore different habitats</p>
                    </div>
                    <div class="feature">
                        <span class="feature-icon">🔍</span>
                        <p>Discover animal powers</p>
                    </div>
                </div>
                <div class="placeholder-loading">
                    <p>Loading video...</p>
                    <div class="loading-bar"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Videos Section -->
    <div class="related-videos">
        <div class="videos-grid">
            <div class="video-card">
                <img src="/assets/images/Logo.png" alt="Sesame Street">
                <h4>Sesame Street</h4>
                <p>Learn and laugh with friends!</p>
            </div>
            <div class="video-card">
                <img src="/assets/images/Logo.png" alt="Curious George">
                <h4>Curious George</h4>
                <p>Follow George's adventures!</p>
            </div>
            <div class="video-card">
                <img src="/assets/images/Logo.png" alt="Daniel Tiger">
                <h4>Daniel Tiger</h4>
                <p>Learn life's little lessons!</p>
            </div>
        </div>
    </div>
</div>

<style>
.video-window-container {
    background-image: url('<?php echo base_url('assets/images/bkmc.jpg'); ?>');
    border-radius: 8px;
    padding: 30px;
    margin: 30px auto;
    width: 800px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.video-controls {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

.control-button {
    background: #00ABC9;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

.video-frame {
    width: 100%;
    aspect-ratio: 16/9;
    background: #000;
    border-radius: 4px;
    overflow: hidden;
}

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

.related-videos {
    margin: 40px 0;
    padding: 0 20px;
    color: whitesmoke;
}

.videos-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 20px;
}

.video-card {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.video-card:hover {
    transform: translateY(-5px);
}

.video-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.video-card h4 {
    padding: 10px;
    margin: 0;
    text-align: center;
    color: #333;
}

.video-card p {
    padding: 0 10px 10px;
    margin: 0;
    text-align: center;
    color: #666;
}
</style> 