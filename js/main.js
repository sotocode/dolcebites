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