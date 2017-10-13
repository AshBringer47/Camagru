<?php require "header.html"; ?>
<div id="over-elem" class="hidden overlayClose" onclick="overBoxClose()"></div>
<div id="over-box" class="hidden overlayClose">
    <div>
        <div class="main-text">
            UPLOAD TOOLS
            <div class="line"></div>
        </div>
        <div id='over-grid-input' class="flex column between">
            <div>
                <div class="sub-text">
                    MASK
                </div>
                <form onsubmit="sendLinkMask(); return false;">
                    <input size="400" id="linkMask">
                    <input type="submit" value="SEND LINK">
                </form>
                <div class="butt" onclick="document.getElementById('uploadMask').click();">
                    UPLOAD MASK
                </div>
            </div>
            <div class="sub-text st-input"><div class="line"></div></div>
            <div>
                <div class="sub-text">
                    IMAGE
                </div>
                <form onsubmit="sendLinkImg(); return false;">
                    <input size="400" id="linkImg">
                    <input type="submit" value="SEND LINK">
                </form>
                <div class="butt" onclick="document.getElementById('uploadImg').click();">
                    UPLOAD IMAGE
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <form method="post" accept-charset="utf-8" name="form1">
        <input name="hidden_data" id='hidden_data' type="hidden"/>
    </form>
    <input type='file' id='uploadImg' class="none" name="upImg" onchange="uploadImg();this.value=null;return false;">
    <input type='file' id='uploadMask' class="none" name="upMask" onchange="uploadMask();this.value=null;return false;">
    <div class="main-text">
        <div class="container">
            CAM
            <div class="line"></div>
        </div>
    </div>
    <video id="video" autoplay></video>
    <div id="cam">
        <div class="container">
            <div id="overlay-canvas">
                <p id="errText"></p>
                <canvas id="canvas"></canvas>
            </div>
            <div id="previews">
                <p>PREVIEW</p>
                <canvas id="canvas1"></canvas>
                <canvas id="canvas2"></canvas>
                <canvas id="canvas3"></canvas>
                <canvas id="canvas4"></canvas>
            </div>
            <input type="hidden" value="0" id="img_resize">
            <div id="effects-block">
                <div id="effects">
                    <div class="effect" onclick="changeEffect('img/effects/e1.png')">
                        <img src="img/effects/p1.png" alt="effect1">
                    </div>
                    <div class="effect" onclick="changeEffect('img/effects/e2.png')">
                        <img src="img/effects/p2.png" alt="effect2">
                    </div>
                    <div class="effect" onclick="changeEffect('img/effects/e3.png')">
                        <img src="img/effects/p3.png" alt="effect3">
                    </div>
                    <div class="effect" onclick="changeEffect('img/effects/e4.png')">
                        <img src="img/effects/p4.png" alt="effect4">
                    </div>
                    <div class="effect" onclick="overBoxOpen()">
                        <p>UPLOAD YOUR MASK</p>
                    </div>
                </div>
                <div id="eff-control">
                    <p>ROTATE</p><p>RESIZE</p>
                    <input type="range" name="rotate" min="-90" max="90" id="rotat" style="margin-right: .5%">
                    <input type="range" name="resize" min="-70" max="70" id="resize" style="margin-left: .5%">
                </div>
            </div>


        </div>
    </div>
    <div class="container">
        <div id="control">
            <div class="butt"  onclick="clearEffect()">
                CLEAR
            </div>
            <div class="butt" id="uploadButt" onclick="overBoxOpen()">
                UPLOAD IMAGE
            </div>
            <div class="butt" id="snap"  onclick="saveImage()">
                SAVE
            </div>

        </div>
    </div>
</div>
<div id="toast"></div>
<script src="js/cam.js"></script>
<script src="js/input-range-ui.js"></script>

<script src="js/toast.js"></script>
<?php require "footer.html"; ?>