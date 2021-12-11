// Video Controls

window.onload = function () {
    // Video
    var video = document.getElementById("video");
    // Buttons
    var playButton = document.getElementById("play-pause");
    // playButton.addEventListener("hover",function(){
    //     alert('hi');
    // });
    // Event listener for the play/pause button
    playButton.addEventListener("click", function () {
        if (video.paused == true) {
            // Play the video
            video.play();
            // Update the button text to 'Pause symbol'
            playButton.innerHTML = '<img class="pause" src="images/pause_circle_filled_48px.png" alt="Press pause button to pause video"/>';
        } else {
            // Pause the video
            video.pause();
            // Update the button text to 'Play symbol'
            playButton.innerHTML = '<img class="play" src="images/play_circle_filled_48px.png" alt="Press play button to play video"/>';
        }
    });
}

// Smooth Scrolling

$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });