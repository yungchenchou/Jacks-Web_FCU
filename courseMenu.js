//Description/////////////////////////////////////////////////////////////////
//1. Branch: 具備下層選單結構者稱為分支 (亦即資料夾)
//2. Item: 樹狀結構的最下層，包含超連結者，稱為項目
//3. 分支計數用來統計選單並製作選單及節點圖片的 ID
//4. 項目計數用來統計超連結 (錨物件)

//Global Variable/////////////////////////////////////////////////////////////

var GstrTreeStructor=""; //樹狀結構輸出字串
var GintBranchCount=0;  //分支計數
var GintItemCount=0;  //項目計數

//images path
//圖片請自行準備
var GstrBookClose="Images/icon/folder_Close.png";
var GstrBookOpen="Images/icon/folder_Open.png";
var GstrPage="Images/icon/Document.png";

//Function Set////////////////////////////////////////////////////////////////


function objItem(n,k) {
//自訂超連結項目物件
 this.name=n;
 this.link=k;
 }//end of objItem()


function menuExpend(id) { //開啟或是收縮下層選單
    top.focus();
    var img=eval("document.all.img"+id);
    var tab=eval("document.all.tab"+id);
    if(tab.style.display=="none") {
        tab.style.display="block";
        img.src=GstrBookOpen;
    }else {
        tab.style.display="none";
        img.src=GstrBookClose; }
}// end of menuExpend()

function treeBuild(obj,pos) {  //建構樹狀目錄，輸出 HTML 碼
    if(pos=="end" && obj.constructor!=Array)
        GstrTreeStructor+="<tr><td style='padding-top:5; padding-bottom:8;'>";
    else
        GstrTreeStructor+="<tr><td style='padding-top:5;'>";
    if(obj.constructor==Array) { //新的分支 (使用遞迴呼叫)
        GintBranchCount++;
        var tabID="tab"+GintBranchCount;
        var imgID="img"+GintBranchCount;
        GstrTreeStructor+="<a href='exp:" + imgID + "' target=_self" +
            " onclick=\"javascript: menuExpend(" + GintBranchCount + "); return false;\">" +
            "<img align=absMiddle border=0 id=" + imgID +
            " src=" + GstrBookClose + " valign=middle>" +
            "</a>" +
            obj[0] +
            "<table id=" + tabID + " border=0 cellpadding=0 cellspacing=0 class=\"courseTableL2\">" ;
        for(var i=1; i<obj.length; i++)
            if(i==(obj.length-1))
                treeBuild(obj[i],"end");
            else
                treeBuild(obj[i],"mid");
        GstrTreeStructor+="</table>";
    }else { //超連結項目
        GintItemCount++;
        GstrTreeStructor+=
            "<img align=absMiddle border=0 src=" + GstrPage + ">" +
            "<a id=lnk" + GintItemCount + " href=" + obj.link + ">" + obj.name + "</a>";
    }
    GstrTreeStructor+="</td></tr>";
}//end of treeBuild()

function treeCreate() {
    //整個選單結構記錄在這裡
    //使用多維陣列，輸入時注意陣列足標不要重複
    //遇到一個新的分支，就會多出一個維度
    //如果是一個資料夾（新的分支，包含下層選單），宣告成 new Array()
    //如果是一個超連結項目（最底層），宣告成 new objItem()
    var arTree=new Array();
    //Root
    var i=-1;
    i++;
    arTree[i]="Course Menu";

    i++;
    arTree[i]=new Array();
    arTree[i][0]="100學年第一學期";
    arTree[i][1]=new objItem("作業系統","1001_OS.php");
    arTree[i][2]=new objItem("視窗程式設計","1001_WindowsProgram.php");
    arTree[i][3]=new objItem("管理資訊系統","1001_MIS.php");

    i++;
    arTree[i]=new Array();
    arTree[i][0]="99學年暑(碩士學分班)";
    arTree[i][1]=new objItem("作業系統","993_OS.php");

    i++;
    arTree[i]=new Array();
    arTree[i][0]="99學年第二學期";
    arTree[i][1]=new objItem("資訊安全","992_InfoSecurity.php");
    arTree[i][2]=new objItem("程式設計(2)","992_Program2.php");
    arTree[i][3]=new objItem("資料庫系統概論(停開)","992_DBIntrod.php");
    arTree[i][4]=new objItem("資料探勘","992_DataMining.php");

    i++;
    arTree[i]=new Array();
    arTree[i][0]="99學年第一學期";
    arTree[i][1]=new objItem("視窗程設(A)","991_WinProgA.php");
    arTree[i][2]=new objItem("視窗程式(B)","991_WinProgB.php");
    arTree[i][3]=new objItem("作業系統","991_OS.php");

    i++;
    arTree[i]=new Array();
    arTree[i][0]="98學年暑期進修";
    arTree[i][1]=new objItem("資訊與生活","984_InfoTech.php");

    i++;
    arTree[i]=new Array();
    arTree[i][0]="98學年第二學期";
    arTree[i][1]=new objItem("Java程式設計","courses/982_Java/982_Java.php");
    arTree[i][2]=new objItem("資料庫系統","courses/982_DBMS/982_DBMS.php");
    arTree[i][3]=new objItem("資訊安全","courses/982_Security/982_Security.php");

	i++;
    arTree[i]=new Array();
    arTree[i][0]="98學年第一學期";
    arTree[i][1]=new objItem("作業系統(博)","courses/981_OS_PHD/981_OS_PHD.php");
    arTree[i][2]=new objItem("作業系統(大學)","courses/981_OS_BS/981_OS_BS.php");
    arTree[i][3]=new objItem("資訊安全","courses/981_Security/981_Security.php");

    i++;
    arTree[i]=new Array();
    arTree[i][0]="97學年第二學期";
    arTree[i][1]=new objItem("Java程式","972_Java.php");
    arTree[i][2]=new objItem("機率","972_Probability.php");
    arTree[i][3]=new objItem("資訊安全","972_Security.php");

    GstrTreeStructor="<h2 align=\"center\"><a href=\"http://120.108.116.237/doku\" target=\"_blank\">傑克獨酷</a></h2>";
    GstrTreeStructor+="<table id=tabTree border=0 cellspacing=0 cellpadding=0 class=\"courseTableL1\">";
    //GstrTreeStructor+=" style=\"position:relative; left:6; visibility=hidden;\" >";

    //從 arTree 的子選單 arTree[1] 開始輸出
    for(i=1; i<arTree.length-1; i++) treeBuild(arTree[i],"mid");
    treeBuild(arTree[arTree.length-1],"end");

    //從 arTree 根目錄開始輸出
    //treeBuild(arTree,"mid");
    GstrTreeStructor+="</table>";
    document.write(GstrTreeStructor);
    document.all.img1.click();
    document.all.tabTree.style.visibility="visible";
}//end of treeCreate()
