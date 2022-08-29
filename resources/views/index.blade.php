<!-- Created by Rob Maslen -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Global Garden Guessing Game</title>
    <meta name="description" content="Quiz game of identifying photos of famous gardens from all around the world.">
    <meta name="keywords" content="happy, garden, gardening, photo, image, identification, quiz, game, global, guess, famous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ url('css/main.css') }}">

<!--  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <script src="https://cesium.com/downloads/cesiumjs/releases/1.74/Build/Cesium/Cesium.js"></script>
   <link href="https://cesium.com/downloads/cesiumjs/releases/1.74/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
</head>
<body>
    <div id="firstLoadScreen" v-bind:style="{ display: display }" class="firstLoadScreen"></div>

    <div id="picHolder" v-bind:style="{ display: display, opacity: opacity }" class="picHolder">
        <div id="pic" v-bind:style="{ height: height, width: width, backgroundImage: bgImage }" class="pic"></div>
    </div>

    <div id="answers" v-bind:style="{ display: display, opacity: opacity }" class="answers">
        <div v-for="(text, i) in choices" class="answer" v-on:click="checkAnswer(i)">
            <div v-if="i !== '2'"><hr class="small1"><hr class="medium"></div>
            <div v-if="i === '2'"><hr class="small2"><hr class="big"></div>
            <div v-html="text" class="answerText"></div>
            <div v-if="i === '2'"><hr class="big"><hr class="small2"></div>
            <div v-if="i !== '2'"><hr class="medium"><hr class="small1"></div>
        </div>
    </div>

    <div id="result" class="modal" v-bind:style="{ display: display, opacity: opacity }" v-on:click="afterResult">
        <div class="modalContent">
            <hr class="small1">
            <hr class="medium">
            <p v-bind:style="{ display: displayWrong}" class="result" v-html="rightName"></p>
            <div v-bind:style="{ display: displayRight}" class="rightAnswer">
                <p>Correct!</p>
                <p v-html="fact"></p>
<!--          <p><a id="learnMoreLink" target="_blank" :href="learnMoreLink">Learn more elsewhere <img src="images/external-link.png" class="externalLink"></a></p> -->
                <p v-html="ctaText"></p>
            </div>
            <hr class="medium">
            <hr class="small1">
        </div>
    </div>

    <div id="cesiumMap" class="map" v-bind:style="{ display: display, opacity: opacity }" v-on:click="afterResult"></div>

    <script src="{{ url('js/main.js') }}"></script>
    <script src="{{ url('js/map.js') }}"></script>

    <script>
        load();
    </script>
</body>
</html>
