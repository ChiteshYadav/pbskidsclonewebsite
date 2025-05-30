<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="game-player-container">
    <div class="game-header">
        <h1><?php echo ucwords(str_replace('-', ' ', $game_name)); ?></h1>
        <a href="/games" class="back-button">← Back to Games</a>
    </div>
    
    <div class="game-frame">
        <?php
        // This is where the actual game would be embedded
        // For now, we'll show a placeholder
        switch($game_name) {
            case 'math-adventure':
                echo '<div class="game-placeholder">Math Adventure Game Coming Soon!</div>';
                break;
            case 'word-wizard':
                echo '<div class="game-placeholder">Word Wizard Game Coming Soon!</div>';
                break;
            case 'science-explorer':
                echo '<div class="game-placeholder">Science Explorer Game Coming Soon!</div>';
                break;
            case 'art-studio':
                echo '<div class="game-placeholder">Art Studio Game Coming Soon!</div>';
                break;
            default:
                echo '<div class="game-placeholder">Game Not Found</div>';
        }
        ?>
    </div>
</div>

<style>
.game-player-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    position: relative;
    min-height: 100vh;
    background-image: url('/assets/images/bkmc.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.game-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    position: relative;
    z-index: 2;
}

.game-header h1 {
    color: #00ABC9;
    font-size: 2em;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.back-button {
    color: #00ABC9;
    text-decoration: none;
    font-size: 1.1em;
    padding: 10px 20px;
    border: 2px solid #00ABC9;
    border-radius: 25px;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.9);
}

.back-button:hover {
    background-color: #00ABC9;
    color: white;
}

.game-frame {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    min-height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 2;
}

.game-placeholder {
    text-align: center;
    color: #666;
    font-size: 1.5em;
    padding: 40px;
    background: rgba(245, 245, 245, 0.9);
    border-radius: 10px;
    width: 100%;
}

@media (max-width: 768px) {
    .game-header {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .game-frame {
        min-height: 400px;
    }
}
</style> 