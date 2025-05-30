<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="games-page">
    <h1><?php echo $heading; ?></h1>
    
    <div class="games-grid-container">
        <!-- Popular Games Section -->
        <h2 class="section-title">Popular Games</h2>
        <div class="games-grid">
            <!-- Game 6 -->
            <div class="game-box">
                <div class="game-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Peg + Cat">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="game-info">
                    <h3>Peg + Cat: Math Adventures</h3>
                    <p>Solve problems with Peg and her cat through math!</p>
                    <a href="<?php echo base_url('games/view/peg-cat'); ?>" class="play-button">Play Now</a>
                </div>
            </div>

            <!-- Game 7 -->
            <div class="game-box">
                <div class="game-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Super Why">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="game-info">
                    <h3>Super Why: Reading Power</h3>
                    <p>Join the Super Readers on reading adventures!</p>
                    <a href="<?php echo base_url('games/view/super-why'); ?>" class="play-button">Play Now</a>
                </div>
            </div>

            <!-- Game 8 -->
            <div class="game-box">
                <div class="game-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="WordGirl">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="game-info">
                    <h3>WordGirl: Vocabulary Heroes</h3>
                    <p>Learn new words with WordGirl and her sidekick!</p>
                    <a href="<?php echo base_url('games/view/wordgirl'); ?>" class="play-button">Play Now</a>
                </div>
            </div>

            <!-- Game 9 -->
            <div class="game-box">
                <div class="game-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Molly of Denali">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="game-info">
                    <h3>Molly of Denali: Alaska Stories</h3>
                    <p>Explore Alaska with Molly and learn about native culture!</p>
                    <a href="<?php echo base_url('games/view/molly-denali'); ?>" class="play-button">Play Now</a>
                </div>
            </div>

            <!-- Game 10 -->
            <div class="game-box">
                <div class="game-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Nature Cat">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="game-info">
                    <h3>Nature Cat: Outdoor Adventures</h3>
                    <p>Discover nature with Fred the house cat turned outdoor explorer!</p>
                    <a href="<?php echo base_url('games/view/nature-cat'); ?>" class="play-button">Play Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.games-page {
    padding: 20px;
    background-image: url('<?php echo base_url('assets/images/bkmc.jpg'); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
}

.section-title {
    color: #ffffff;
    margin: 40px 0 25px;
    font-size: 28px;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    font-weight: bold;
}

.games-grid-container {
    max-width: 1400px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.games-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
    width: 100%;
    align-items: stretch;
}

.game-box {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 280px;
    display: flex;
    flex-direction: column;
    width: 100%;
    align-self: stretch;
}

.game-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.game-image {
    width: 100%;
    height: 160px;
    overflow: hidden;
    position: relative;
    flex: 0 0 auto;
}

.game-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.play-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2.5em;
    opacity: 0;
    transition: opacity 0.3s ease;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.game-box:hover .play-overlay {
    opacity: 1;
}

.game-box:hover .game-image img {
    transform: scale(1.05);
}

.game-info {
    padding: 15px;
    text-align: center;
    display: flex;
    flex-direction: column;
    flex: 1 1 auto;
    justify-content: space-between;
    min-height: 120px;
}

.game-info h3 {
    color: #333;
    margin: 0 0 8px 0;
    font-size: 1.2em;
    font-weight: 600;
    line-height: 1.3;
}

.game-info p {
    color: #666;
    margin: 0 0 12px 0;
    font-size: 0.9em;
    line-height: 1.4;
}

.play-button {
    display: inline-block;
    padding: 8px 20px;
    background-color: #00ABC9;
    color: white;
    text-decoration: none;
    border-radius: 20px;
    transition: background-color 0.3s ease;
    font-size: 0.9em;
    font-weight: 500;
    margin-top: auto;
}

.play-button:hover {
    background-color: #008BA3;
}

@media (max-width: 1200px) {
    .games-grid {
        grid-template-columns: repeat(2, minmax(300px, 1fr));
        gap: 25px;
    }
}

@media (max-width: 768px) {
    .games-grid {
        grid-template-columns: minmax(280px, 1fr);
        gap: 20px;
    }

    .game-box {
        height: 260px;
    }

    .game-image {
        height: 140px;
    }

    .game-info {
        padding: 12px;
        min-height: 120px;
    }

    .game-info h3 {
        font-size: 1.1em;
    }

    .game-info p {
        font-size: 0.85em;
    }

    .play-button {
        padding: 6px 15px;
        font-size: 0.85em;
    }

    .section-title {
        font-size: 24px;
        margin: 30px 0 20px;
    }
}
</style>
