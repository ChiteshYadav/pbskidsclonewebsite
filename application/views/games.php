<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="games-container">
    <h1 class="games-title">Educational Games</h1>
    
    <div class="games-grid">
        <!-- Game Card 1 -->
        <div class="game-card">
            <div class="game-image">
                <img src="/assets/images/games/math-adventure.jpg" alt="Math Adventure">
            </div>
            <div class="game-info">
                <h3>Math Adventure</h3>
                <p>Learn math through fun adventures!</p>
                <a href="/games/math-adventure" class="play-button">Play Now</a>
            </div>
        </div>

        <!-- Game Card 2 -->
        <div class="game-card">
            <div class="game-image">
                <img src="/assets/images/games/word-wizard.jpg" alt="Word Wizard">
            </div>
            <div class="game-info">
                <h3>Word Wizard</h3>
                <p>Build your vocabulary with magical words!</p>
                <a href="/games/word-wizard" class="play-button">Play Now</a>
            </div>
        </div>

        <!-- Game Card 3 -->
        <div class="game-card">
            <div class="game-image">
                <img src="/assets/images/games/science-explorer.jpg" alt="Science Explorer">
            </div>
            <div class="game-info">
                <h3>Science Explorer</h3>
                <p>Discover the wonders of science!</p>
                <a href="/games/science-explorer" class="play-button">Play Now</a>
            </div>
        </div>

        <!-- Game Card 4 -->
        <div class="game-card">
            <div class="game-image">
                <img src="/assets/images/games/art-studio.jpg" alt="Art Studio">
            </div>
            <div class="game-info">
                <h3>Art Studio</h3>
                <p>Express your creativity!</p>
                <a href="/games/art-studio" class="play-button">Play Now</a>
            </div>
        </div>
    </div>
</div>

<style>
.games-container {
    margin: 0 auto;
    padding: 40px 20px;
}

.games-title {
    text-align: center;
    color: #00ABC9;
    font-size: 2.5em;
    margin-bottom: 40px;
}

.games-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    padding: 20px;
}

.game-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.game-card:hover {
    transform: translateY(-5px);
}

.game-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.game-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.game-info {
    padding: 20px;
    text-align: center;
}

.game-info h3 {
    color: #333;
    margin-bottom: 10px;
    font-size: 1.4em;
}

.game-info p {
    color: #666;
    margin-bottom: 20px;
}

.play-button {
    display: inline-block;
    padding: 10px 25px;
    background-color: #00ABC9;
    color: white;
    text-decoration: none;
    border-radius: 25px;
    transition: background-color 0.3s ease;
}

.play-button:hover {
    background-color: #008BA3;
}

@media (max-width: 768px) {
    .games-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }
}
</style> 