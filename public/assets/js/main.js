// Game Controls
document.addEventListener('DOMContentLoaded', function() {
    // Fullscreen functionality
    const fullscreenButtons = document.querySelectorAll('.control-button');
    fullscreenButtons.forEach(button => {
        if (button.textContent === 'Fullscreen') {
            button.addEventListener('click', function() {
                const gameFrame = document.querySelector('.game-frame');
                if (gameFrame) {
                    if (!document.fullscreenElement) {
                        gameFrame.requestFullscreen().catch(err => {
                            console.log(`Error attempting to enable fullscreen: ${err.message}`);
                        });
                    } else {
                        document.exitFullscreen();
                    }
                }
            });
        }
    });

    // Sound control
    const soundButtons = document.querySelectorAll('.control-button');
    soundButtons.forEach(button => {
        if (button.textContent === 'Sound') {
            button.addEventListener('click', function() {
                const gameFrame = document.querySelector('.game-frame iframe');
                if (gameFrame) {
                    // Toggle sound state
                    const isMuted = gameFrame.getAttribute('data-muted') === 'true';
                    gameFrame.setAttribute('data-muted', !isMuted);
                    button.textContent = isMuted ? 'Sound' : 'Mute';
                }
            });
        }
    });

    // Help button
    const helpButtons = document.querySelectorAll('.control-button');
    helpButtons.forEach(button => {
        if (button.textContent === 'Help') {
            button.addEventListener('click', function() {
                alert('Game Controls:\n- Use arrow keys to move\n- Space to jump\n- ESC to pause\n- Click for interaction');
            });
        }
    });

    // Game card hover effects
    const gameCards = document.querySelectorAll('.game-card');
    gameCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}); 