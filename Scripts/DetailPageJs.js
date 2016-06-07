// JScript File
// For slide show image
function SlideImage()
{
    var obj = document.getElementById("imgDiv");
    var obj1 = document.getElementById("tmpImageDiv2");
    var objlen = obj.offsetWidth;
    if(_moveSpan > 0 && (obj1.offsetWidth - obj.scrollLeft) <= 0){
        //Post image move to right
        obj.scrollLeft = 0;
    }
    if(_moveSpan < 0 && obj.scrollLeft <= 0)
    {
        //Post image move to left
        obj.scrollLeft = obj1.offsetWidth;
    }
    obj.scrollLeft += _moveSpan;
}

function SlideToLeft(){
    if(_moveSpan < 0){
        _moveSpan *= -1;
    }
}
function SlideToRight(){
    if(_moveSpan > 0){
        _moveSpan *= -1;
    }
}

if (window.addEventListener)
{
    window.addEventListener("load", SlideShowOnLoad, false);
}
else if (window.attachEvent)
{
    window.attachEvent("onload", SlideShowOnLoad);
}
else
{
    window.onload=SlideShowOnLoad;
}
function SlideShowOnLoad(){
    var tempObj = document.getElementById("tmpImageDiv1");
    var maxObj = document.getElementById("imgDiv");
    if (tempObj && maxObj) {
        var demoWidth = tempObj.offsetWidth;
        var maxWidth = parseInt(maxObj.style.width);
        if(demoWidth <= maxWidth) {
            //set Move left btn and Move right btn visible = false
            document.getElementById("rollLeftDiv").style.display = "none";
            document.getElementById("rollRightDiv").style.display = "none";
            return;
        }
        document.getElementById("tmpImageDiv2").innerHTML = document.getElementById("tmpImageDiv1").innerHTML;
        startMove();
    }
}
function startMove(){
    if(_MoveMarquee == null)
    {
        _MoveMarquee = "move";
        _MoveMarquee = setInterval(SlideImage,_MoveSpeed);
    }
    return;
}
function stopMove(){
    window.clearInterval(_MoveMarquee);
    window.clearInterval(_MoveMarquee);
    _MoveMarquee = null;
}


function OpenPageOnNewWindow(hostName,regionName,imgurl,evt){
    var hostname = window.location.hostname;
    var path = window.location.search;
    var lang = "";
    if(path.indexOf("&lang=") > -1){
        lang = path.substr(path.indexOf("&lang="),11);
    }
    var url = hostName + "/" + regionName + "/views/photoDetail.aspx?ImgUrl=" + imgurl + lang;
    var objwidth = 100;
    var objheight = 100;
    var feature = "width=" +objwidth +",height=" + objheight + ",toolbar=no,menubar=no,resizeable=no,statusbar=no,location=no,scrollbars=no";
    window.open(url,"",feature);
}
