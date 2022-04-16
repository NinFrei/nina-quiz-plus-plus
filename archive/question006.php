<!-- Erstellt durch: Nina -->

<!-- Frage 6 -->

<h3 class="p-5 mt-3">Welches dieser Tiere ist so intelligent,<br> dass es sich in einem Spiegel wiedererkennen kann? </h3>

<!-- Antwortform -->

<form class="ps-5 fs-4" action="quiz.php" method="GET" onsubmit="return evaluateCheckboxes();">

    <div class="z-index-3">

    <label>
        <input type="radio" id="6-1" name="q6" value="0" class="schnellstesTier">
        <img src="/images/hund.jpg" width="200" class=" me-3 mb-3">
    </label>

    <label >
        <input typimages/elefant.jpge="radio" id="6-2" name="q6" value="1" class="schnellstesTier">
        <img src="/" width="200" class="me-3 mb-3">
    </label>

    <label>
        <input type="radio" id="6-3" name="q6" value="0" class="schnellstesTier">
        <img src="/images/affe.jpg" width="200" class="me-3 mb-3">
    </label>

    <label>
        <input type="radio" id="6-4" name="q6" value="0" class="schnellstesTier">
        <img src="/images/schwein.jpg" width="200" class="mb-3">
    </label>

</div>

    <div class="row">

        <p id="validate-warning" style="color:red" class="warning"></p>

    </div>
