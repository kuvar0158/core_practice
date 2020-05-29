<!DOCTYPE html>
<html>
<head>
	<title>Voice Recognization</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Crimson+Text');
html {
    font-size: 16pt;
    font-family: crimson text;
}

article {
    width: 60%;
    margin: auto;
}

blockquote,
div,
h1 {
    text-align: center;
}

blockquote {
    font-size: 1.2rem;
}

.buttons {
    margin-top: 25px;
}

button {
    background: none;
    border: none;
    cursor: pointer;
    height: 48px;
    outline: none;
    padding: 0;
    width: 48px;
}

#play {
    background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/play.svg);
}

#play.played {
    background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/play1.svg);
}

#pause {
    background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/pause.svg);
}

#pause.paused {
    background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/pause1.svg);
}

#stop {
    background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/stop.svg);
}

#stop.stopped {
    background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/stop1.svg);
}

@media (max-width: 700px) {
    html {
        font-size: 14pt;
    }
    article {
        width: 90%;
    }
}

body {
    margin: 0;
}


/*  demo decor */

#-demo-title {
    position: fixed;
    top: 0;
    width: 100%;
    height: 36px;
    background-color: #D5FFD1;
    color: #0F316C;
    line-height: 36px;
    font-weight: bold;
    font-size: 16pt;
    text-align: center;
}

#-demo-profile {
    float: left;
    height: 100%;
    opacity: .4;
}

#-demo-profile:hover {
    opacity: 1;
}

@media (max-width: 400px) {
    #-demo-title {
        font-size: 12pt;
    }
}

	</style>
</head>
<body>
<div class=buttons>
    <button id=play></button> &nbsp;
    <button id=pause></button> &nbsp;
    <button id=stop></button>
</div>
<article>
    <h1>The Hare With Many Friends</h1>
    <img src="https://rpsthecoder.github.io/js-speech-synthesis/hare-and-friends.jpg" width="100%" style="margin: auto;filter: brightness(1.2);">
    <p>A hare was very popular with the other beasts who all claimed to be her friends. But one day she heard the hounds approaching and hoped to escape them by the aid of her many friends. So she went to the horse, and asked him to carry her away from the hounds on his back.</p>
    <p>But he declined, stating that he had important work to do for his master. “He felt sure,” he said, “that all her other friends would come to her assistance.” She then applied to the bull, and hoped that he would repel the hounds with his horns. The bull
        replied: “I am very sorry, but I have an appointment with a lady; but I feel sure that our friend the goat will do what you want.” </p>
    <p>The goat, however, feared that his back might do her some harm if he took her upon it. The ram, he felt sure, was the proper friend to apply to. So she went to the ram and told him the case. </p>
    <p>The ram replied: “Another time, my dear friend. I do not like to interfere on the present occasion, as hounds have been known to eat sheep as well as hares.” The Hare then applied, as a last hope, to the calf, who regretted that he was unable to help
        her, as he did not like to take the responsibility upon himself, as so many older persons than himself had declined the task. By this time the hounds were quite near, and the Hare took to her heels and luckily escaped.</p>
    <blockquote>Moral of the story: He that has many friends, has no friends.</blockquote>
</article>
</body>
</html>
<script>
	onload = function() {
    if ('speechSynthesis' in window) with(speechSynthesis) {

        var playEle = document.querySelector('#play');
        var pauseEle = document.querySelector('#pause');
        var stopEle = document.querySelector('#stop');
        var flag = false;

        playEle.addEventListener('click', onClickPlay);
        // pauseEle.addEventListener('click', onClickPause);
        // stopEle.addEventListener('click', onClickStop);

        function onClickPlay() {
            if (!flag) {
                flag = true;
                utterance = new SpeechSynthesisUtterance(document.querySelector('article').textContent);
                utterance.voice = getVoices()[0];
                utterance.onend = function() {
                    flag = false;
                    playEle.className = pauseEle.className = '';
                    stopEle.className = 'stopped';
                };
                playEle.className = 'played';
                stopEle.className = '';
                speak(utterance);
            }
            if (paused) { /* unpause/resume narration */
                playEle.className = 'played';
                pauseEle.className = '';
                resume();
            }
        }

        function onClickPause() {
            if (speaking && !paused) { /* pause narration */
                pauseEle.className = 'paused';
                playEle.className = '';
                pause();
            }
        }

        function onClickStop() {
            if (speaking) { /* stop narration */
                /* for safari */
                stopEle.className = 'stopped';
                playEle.className = pauseEle.className = '';
                flag = false;
                cancel();

            }
        }

    }

    else { /* speech synthesis not supported */
        // msg = document.createElement('h5');
        // msg.textContent = "Detected no support for Speech Synthesis";
        // msg.style.textAlign = 'center';
        // msg.style.backgroundColor = 'red';
        // msg.style.color = 'white';
        // msg.style.marginTop = msg.style.marginBottom = 0;
        // document.body.insertBefore(msg, document.querySelector('div'));
    }

}
</script>