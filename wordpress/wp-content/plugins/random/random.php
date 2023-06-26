<?php
/*
Plugin Name: Random
*/

function display_random_song() {
  $songs = array(
   'Kult - "Polska" Akordy: Am, F, C, G',
'Farben Lehre - "Spodnie z GS-u" Akordy: E, D, A, G',
'Coma - "Nie ma czasu" Akordy: D, A, G, Em',
'Pidżama Porno - "Głodne Usta" Akordy: E, G, D, A',
'T.Love - "Ajrisz"  Akordy: E, A, G, D',
'Armia - "Triodante" Akordy: Em, D, C, G',
'Strachy na Lachy - "Piła Tango" Akordy: G, C, D, Em',
'Happysad - "Zanim Pójdę" Akordy: C, G, F, Am',
'Apteka - "Menda" Akordy: A, E, D, G',
'KSU - "Pod Prąd" Akordy: Am, G, F, C'
  );

  ob_start();
  ?>
  <div>
    <h3>Wylosuj piosenkę!:</h3>
    <p><strong><span id="random-song"></span></strong></p>
    <button id="generate-button">wygeneruj</button>
  </div>

  <script>
    document.getElementById('generate-button').addEventListener('click', function() {
      var songs = <?php echo json_encode($songs); ?>;
      var randomSong = songs[Math.floor(Math.random() * songs.length)];
      document.getElementById('random-song').textContent = randomSong;
    });
  </script>
  <?php
  return ob_get_clean();
}

add_shortcode('random', 'display_random_song');