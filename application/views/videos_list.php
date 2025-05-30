<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="videos-page">
    <h1><?php echo $heading; ?></h1>
    
    <div class="videos-grid-container">
        <!-- New Videos Section -->
        <h2 class="section-title">New Videos</h2>
        <div class="videos-grid">
            <!-- Video 1 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Wild Kratts">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Wild Kratts: Animal Adventures</h3>
                    <p>Join the Kratt brothers on exciting animal adventures!</p>
                    <a href="<?php echo base_url('videos/view/wild-kratts'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Sesame Street">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Sesame Street: Learning Fun</h3>
                    <p>Learn letters, numbers, and more with Elmo and friends!</p>
                    <a href="<?php echo base_url('videos/view/sesame-street'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Curious George">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Curious George: Science Stories</h3>
                    <p>Follow George's curious adventures in science!</p>
                    <a href="<?php echo base_url('videos/view/curious-george'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Daniel Tiger">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Daniel Tiger: Life Lessons</h3>
                    <p>Learn important life lessons with Daniel and his friends!</p>
                    <a href="<?php echo base_url('videos/view/daniel-tiger'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Arthur">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Arthur: Friendship Tales</h3>
                    <p>Join Arthur and his friends in their daily adventures!</p>
                    <a href="<?php echo base_url('videos/view/arthur'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>
        </div>

        <!-- Popular Videos Section -->
        <h2 class="section-title">Popular Videos</h2>
        <div class="videos-grid">
            <!-- Video 6 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Peg + Cat">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Peg + Cat: Math Adventures</h3>
                    <p>Solve problems with Peg and her cat through math!</p>
                    <a href="<?php echo base_url('videos/view/peg-cat'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>

            <!-- Video 7 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Super Why">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Super Why: Reading Power</h3>
                    <p>Join the Super Readers on reading adventures!</p>
                    <a href="<?php echo base_url('videos/view/super-why'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>

            <!-- Video 8 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="WordGirl">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>WordGirl: Vocabulary Heroes</h3>
                    <p>Learn new words with WordGirl and her sidekick!</p>
                    <a href="<?php echo base_url('videos/view/wordgirl'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>

            <!-- Video 9 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Molly of Denali">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Molly of Denali: Alaska Stories</h3>
                    <p>Explore Alaska with Molly and learn about native culture!</p>
                    <a href="<?php echo base_url('videos/view/molly-denali'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>

            <!-- Video 10 -->
            <div class="video-box">
                <div class="video-image">
                    <img src="<?php echo base_url('assets/images/v1.png'); ?>" alt="Nature Cat">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <h3>Nature Cat: Outdoor Adventures</h3>
                    <p>Discover nature with Fred the house cat turned outdoor explorer!</p>
                    <a href="<?php echo base_url('videos/view/nature-cat'); ?>" class="watch-button">Watch Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.videos-page {
    padding: 20px;
    background-image: url('<?php echo base_url('assets/images/bkmc.jpg'); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
}

.section-title {
    color: #ffffff;
    margin: 30px 0 20px;
    font-size: 24px;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.videos-grid-container {
    max-width: 1200px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.videos-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 40px;
}

.video-box {
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.video-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.video-image {
    width: 100%;
    height: 180px;
    overflow: hidden;
    position: relative;
}

.video-image img {
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

.video-box:hover .play-overlay {
    opacity: 1;
}

.video-box:hover .video-image img {
    transform: scale(1.05);
}

.video-info {
    padding: 15px;
    text-align: center;
}

.video-info h3 {
    color: #333;
    margin: 0 0 10px 0;
    font-size: 1.2em;
}

.video-info p {
    color: #666;
    margin: 0 0 15px 0;
    font-size: 0.9em;
    line-height: 1.4;
}

.watch-button {
    display: inline-block;
    padding: 8px 20px;
    background-color: #00ABC9;
    color: white;
    text-decoration: none;
    border-radius: 20px;
    transition: background-color 0.3s ease;
    font-size: 0.9em;
}

.watch-button:hover {
    background-color: #008BA3;
}

@media (max-width: 768px) {
    .videos-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .video-image {
        height: 150px;
    }

    .video-info {
        padding: 10px;
    }

    .video-info h3 {
        font-size: 1.1em;
    }

    .video-info p {
        font-size: 0.8em;
    }

    .watch-button {
        padding: 6px 15px;
        font-size: 0.8em;
    }
}
</style> 