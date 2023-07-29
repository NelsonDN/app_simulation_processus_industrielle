document.addEventListener("DOMContentLoaded", function(){
    var rightcard = false;
    var tempblock;
    var tempblock2;
    document.getElementById("blocklist").innerHTML = '<div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="13"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Début de la fabrication</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="14"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Ingrédients</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p></div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="15"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Mélange</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>          </div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="16"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Préparation</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>              </div></div></div>   <div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="17"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Fin de la préparation</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>              </div></div></div>';
    flowy(document.getElementById("canvas"), drag, release, snapping);
    function addEventListenerMulti(type, listener, capture, selector) {
        var nodes = document.querySelectorAll(selector);
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].addEventListener(type, listener, capture);
        }
    }
    function snapping(drag, first) {
        var grab = drag.querySelector(".grabme");
        grab.parentNode.removeChild(grab);
        var blockin = drag.querySelector(".blockin");
        blockin.parentNode.removeChild(blockin);
        if (drag.querySelector(".blockelemtype").value == "1") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Farine</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'><span>50 kg</span> de farine de blé.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "2") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Sel</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'><span>1 Kg</span> de sel.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "3") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Eau</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'><span>30 L</span> d'eau.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "4") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Levure de boulanger</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'><span>2 kg</span>  de levure de boulanger.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "5") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Bol huilé</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'>Placement de la pâte dans un bol huilé, couvrement d'une pellicule plastique et lever dans un endroit chaud pendant <span>1 heure</span>, ou jusqu'à ce qu'elle ait doublé de volume.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "6") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Pétrir</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'>Pétrissement de la pâte pendant <span>10 minutes</span>, jusqu'à ce qu'elle soit lisse et élastique.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "7") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Grand bol</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'>Mélange de <span>la farine</span>, <span>l'eau</span>, <span>la levure</span>, et <span>le sel</span>.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "8") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Emballage</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'><span>Refroidissement des pains sur une grille</span> avant de les déguster.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "9") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Four</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'>Préchauffement du four à <span>200°C</span>. <br> Cuisson des pains pendant <span>30 minutes</span>, ou jusqu'à ce qu'ils soient dorés.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "10") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Diviser la pâte</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'>Division de la pâte en <span>100 pâtons</span> et <br> formation des pâtons et placement sur une plaque à pâtisserie recouverte de papier sulfurisé.</div>";
        } else if (drag.querySelector(".blockelemtype").value == "11") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Badigeonnage</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'>Badigeonnement des pâtons d'un peu d'eau et saupoudrement de farine.</div>";
        }else if (drag.querySelector(".blockelemtype").value == "12") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Pain</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'>Nombre de pains préparés <span>1000</span></div>";
        }else if (drag.querySelector(".blockelemtype").value == "13") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Début de la fabrication</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'></div>";
        }else if (drag.querySelector(".blockelemtype").value == "14") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Ingrédients</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'></div>";
        }else if (drag.querySelector(".blockelemtype").value == "15") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Mélange</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'></div>";
        }else if (drag.querySelector(".blockelemtype").value == "16") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Préparation</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'></div>";
        }else if (drag.querySelector(".blockelemtype").value == "17") {
            drag.innerHTML += "<div class='blockyleft'><p class='blockyname'>Fin de la préparation</p></div><div class='blockyright'></div><div class='blockydiv'></div><div class='blockyinfo'></div>";
        }
        return true;
    }
    function drag(block) {
        block.classList.add("blockdisabled");
        tempblock2 = block;
    }
    function release() {
        if (tempblock2) {
            tempblock2.classList.remove("blockdisabled");
        }
    }
    var disabledClick = function(){
        document.querySelector(".navactive").classList.add("navdisabled");
        document.querySelector(".navactive").classList.remove("navactive");
        this.classList.add("navactive");
        this.classList.remove("navdisabled");
        if (this.getAttribute("id") == "etapes") {
            document.getElementById("blocklist").innerHTML = '<div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="13"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Début de la fabrication</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="14"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Ingrédients</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p></div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="15"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Mélange</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>          </div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="16"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Préparation</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>              </div></div></div>';
        }else if (this.getAttribute("id") == "triggers") {
            document.getElementById("blocklist").innerHTML = '<div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="1"><div class="grabme"></div><div class="blockin">                  <div class="blockico logofarine"><span></span></div><div class="blocktext">                        <p class="blocktitle">Farine</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="2"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Sel</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p></div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="3"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Eau</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>          </div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="4"><div class="grabme"></div><div class="blockin">                    <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Levure</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>              </div></div></div>';
        } else if (this.getAttribute("id") == "actions") {
            document.getElementById("blocklist").innerHTML = '<div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="7"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Grand bol</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div>     <div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="6"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Pétrir</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div> <div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="5"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Bol huilé</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div>  <div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="8"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Emballage</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div>';
        } else if (this.getAttribute("id") == "loggers") {
            document.getElementById("blocklist").innerHTML = '<div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="10"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Diviser la pâte</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div><div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="11"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Badigeonnage</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div>     <div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="9"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Four</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div>   <div class="blockelem create-flowy noselect"><input type="hidden" name="blockelemtype" class="blockelemtype" value="12"><div class="grabme"></div><div class="blockin">                  <div class="blockico"><span></span></div><div class="blocktext">                        <p class="blocktitle">Pain</p><p class="blockdesc">Se déclenche lorsque quelqu\'un effectue une action spécifiée</p>        </div></div></div>';
        }
    }
    addEventListenerMulti("click", disabledClick, false, ".side");
    document.getElementById("close").addEventListener("click", function(){
       if (rightcard) {
           rightcard = false;
           document.getElementById("properties").classList.remove("expanded");
           setTimeout(function(){
                document.getElementById("propwrap").classList.remove("itson");
           }, 300);
            tempblock.classList.remove("selectedblock");
       }
    });

document.getElementById("removeblock").addEventListener("click", function(){
 flowy.deleteBlocks();
});
var aclick = false;
var noinfo = false;
var beginTouch = function (event) {
    aclick = true;
    noinfo = false;
    if (event.target.closest(".create-flowy")) {
        noinfo = true;
    }
}
var checkTouch = function (event) {
    aclick = false;
}
var doneTouch = function (event) {
    if (event.type === "mouseup" && aclick && !noinfo) {
      if (!rightcard && event.target.closest(".block") && !event.target.closest(".block").classList.contains("dragging")) {
            tempblock = event.target.closest(".block");
            rightcard = true;
            document.getElementById("properties").classList.add("expanded");
            document.getElementById("propwrap").classList.add("itson");
            tempblock.classList.add("selectedblock");
       }
    }
}
addEventListener("mousedown", beginTouch, false);
addEventListener("mousemove", checkTouch, false);
addEventListener("mouseup", doneTouch, false);
addEventListenerMulti("touchstart", beginTouch, false, ".block");
});
