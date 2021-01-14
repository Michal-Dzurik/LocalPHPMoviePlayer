// First Start

// Player
var player = document.getElementById("video"),
    isPlaying = false;

$("#play").click(function (){
    if (isPlaying) pause();
    else play();
});

$("#fullscreen").click(function (){
    toggleFullScreen();
})

// event listeners

player.addEventListener("pause",function () {
    isPlaying = false;
});

player.addEventListener("play",function () {
    isPlaying = true;
});

// actions with video player
function play(){
    player.play();
}

function pause(){
    player.pause();
}

function exitFullScreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
    }
}

function toggleFullScreen() {
    //var player = document.getElementById("player");

    if (player.requestFullscreen)
        if (document.fullScreenElement) {
            document.cancelFullScreen();
        } else {
            player.requestFullscreen();
        }
    else if (player.msRequestFullscreen)
        if (document.msFullscreenElement) {
            document.msExitFullscreen();
        } else {
            player.msRequestFullscreen();
        }
    else if (player.mozRequestFullScreen)
        if (document.mozFullScreenElement) {
            document.mozCancelFullScreen();
        } else {
            player.mozRequestFullScreen();
        }
    else if (player.webkitRequestFullscreen)
        if (document.webkitFullscreenElement) {
            document.webkitCancelFullScreen();
        } else {
            player.webkitRequestFullscreen();
        }
    else {
        alert("Fullscreen API is not supported");

    }
}