document.addEventListener("DOMContentLoaded", function() {
    // Array of video file names
    const videos = [
        '../videos/taxi.mp4',
        '../videos/taxi.mp4',
        '../videos/taxi.mp4'
    ];

    // Function to get a random video
    function getRandomVideo() {
        const randomIndex = Math.floor(Math.random() * videos.length);
        return videos[randomIndex];
    }

    // Set the video source
    const videoElement = document.getElementById('car-video');
    videoElement.src = `videos/${getRandomVideo()}`;
});
