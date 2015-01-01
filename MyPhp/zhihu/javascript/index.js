$ = function (id) {
    return document.getElementById(id);
};

window.onload = function(){
    var stop;
    $("header").onmouseover = function(){
    	stop = TranColor("header");
    };
    $("header").onmouseout = function(){
    	clearInterval(stop);
    };
    var parent = $("addTroduction");
  //  addChild(parent);

};

function addChild(parent) {
    if (parent) {
        AddA(parent, "myIntroduction");
    }
    var a = getWidthAndHeight("myIntroduction");
    setWidthAndHeight("addTroduction", a[0], a[1]);
    $("myIntroduction").onclick = function() {

    }
}

function setWidthAndHeight(id, x, y) {
    $(id).style.width = x;
    $(id).style.height = y;
}

function getWidthAndHeight(id) {
    var a = [];
    a.push($(id).offsetWidth);
    a.push($(id).offsetHeight);
    return a;
}

function AddA(parent, idd) {
    var a = document.createElement("a");
    a.id = idd;
    a.innerHTML = "个人主页";
    a.style.color = "white";
    a.style.background = "rgb(0,123,128,0)";
    a.href = "/person.html";
    parent.appendChild(a);
}

function  AddButton(parent, idd) {
    var button = document.createElement("input");
    button.type = "Button";
    button.value = "个人主页";
 //   button.style.width = "31px";
  //  button.style.height = "31px";
    button.id = idd;
    parent.appendChild(button);
}

function  TranColor(x) {
    var bgcolor_object = $(x);
    var count = 8;
    var clearsetInterval = setInterval(function(){
    	count--;
    	switch(count){
    		case 7:
    			bgcolor_object.style.backgroundColor = "red";
    			break;
     		case 6:
    			bgcolor_object.style.backgroundColor = "green";
    			break;
       		case 5:
    			bgcolor_object.style.backgroundColor = "yellow";
    			break;
     		case 4:
    			bgcolor_object.style.backgroundColor = "purple";
    			break;
     		case 3:
    			bgcolor_object.style.backgroundColor = "#222222";
    			break;
     		case 2:
    			bgcolor_object.style.backgroundColor = "#111111";
    			break;
     		case 1:
    			bgcolor_object.style.backgroundColor = "#123456";
    			break;
        		default:
        		           count = 8;
    			break;
    	}
           	
    	if (0) {
    		clearInterval(clearsetInterval);
    	}
    }, 1800);
     return  clearsetInterval;
     
}