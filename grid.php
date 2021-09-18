<!doctype html>
<title>Example</title>
<style>
    body {
        display: grid;
        grid-template-areas:
            "big big small small2"
            "small_s small2_s big_s";
            grid-template-rows: 60px 1fr 60px 60px;
        grid-template-columns: 25% 25% 25% 25%;
        grid-gap: 10px;
        height: 100vh;
        margin: 0;
    }

    header,
    footer,
    article,
    nav,
    div {
        padding: 20px;
        background: gold;
    }

    .small {
        grid-area: small;
    }

    .small2 {
        grid-area: small2;
    }

    .big {
        grid-area: big;
    }
    .small_s {
        grid-area: small_s;
    }

    .small2_s {
        grid-area: small2_s;
    }

    .big_s {
        grid-area: big_s;
    }
</style>

<body>


    <div class="small">small</div>
    <div class="small2"> small2k </div>
    <div class="big"> big </div>

    <div class="small_s">small</div>
    <div class="small2_s"> small2k </div>
    <div class="big_s"> big </div>



</body>
