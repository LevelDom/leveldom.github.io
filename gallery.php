<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>🌸 Gallery</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <div class="desktop">

    <!-- 🎵 Background Music -->
    <audio id="bg-music" autoplay loop>
      <source src="https://files.freemusicarchive.org/storage-freemusicarchive-org/music/no_curator/Komiku/Its_time_for_adventure/Komiku_-_11_-_Princess_quest.mp3" type="audio/mp3" />
    </audio>

    <!-- 🔊 Mute Button -->
    <button class="mute-button" onclick="toggleMusic()">🔊</button>

    <!-- ⏰ Clock -->
    <div id="clock" class="clock"></div>

    <!-- 💻 Window Frame -->
    <div class="window">
      <div class="title-bar">
        <span class="title">🌸 Gallery</span>
        <div class="window-controls">
          <button class="control">−</button>
          <button class="control">□</button>
          <button class="control">×</button>
        </div>
      </div>

      <div class="content">
        <!-- 🔗 Sidebar Navigation -->
        <div class="sidebar">
          <ul>
            <li><a href="index.html">🏠 Home</a></li>
            <li><a href="gallery.php">🌸 Gallery</a></li>
            <li><a href="guestbook.php">💬 Guestbook</a></li>
            <li><a href="about.php">🧚 About Me</a></li>
          </ul>
        </div>

        <!-- 📸 Gallery Display -->
        <div class="main">
          <h1>🌸 My Gallery</h1>
          <p>Click an image to view it full size!</p>
          <div class="gallery">
            <?php
              $images = glob("gallery/*.{jpg,png,gif,webp}", GLOB_BRACE);
              foreach ($images as $img) {
                echo "<a href='$img' target='_blank'><img src='$img' alt='Gallery image' class='thumb'></a>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 🔊 Music and ⏰ Clock Scripts -->
  <script>
    const music = document.getElementById("bg-music");
    const muteBtn = document.querySelector(".mute-button");

    function toggleMusic() {
      if (music.paused) {
        music.play();
        muteBtn.textContent = "🔊";
      } else {
        music.pause();
        muteBtn.textContent = "🔇";
      }
    }

    function updateClock() {
      const now = new Date();
      const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
      document.getElementById("clock").textContent = timeString;
    }

    setInterval(updateClock, 1000);
    updateClock();
  </script>
</body>
</html>
