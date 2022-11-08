function transbrackets(str,mk,ht) {
    var spl= str.split(mk);
    var nstr= new String();
    nstr+= spl[0];
    for(var k=1;k<spl.length;k++) {
        if(k&1) nstr+= "<"+ ht+ ">" + spl[k];
        else nstr+= "</"+ ht+ ">" + spl[k];
    }
    return nstr;
}

function indextrans(str,fl) {
    var arrmd= [
        "# ",
        "## ",
        "### ",
        "#### ",
        "##### ",
        "###### ",
    ];
    var arrht= [
        "h1",
        "h2",
        "h3",
        "h4",
        "h5",
        "h6",
    ];
    for(var i=0;i<arrmd.length;i++) {
        if(str.indexOf(arrmd[i])==0) {
            fl.val= true;
            return "<" + arrht[i] + ">" + str.slice(arrmd[i].length) + "</" + arrht[i] + ">";
        }
    }
    return str;
}

function mdtrans() {
    var elements= document.getElementsByClassName("markdown");
    for (var i=0;i<elements.length;i++) {
        
        var cont = elements[i].innerHTML.split("\n");
        var curline = new String();
        var outstr = new String();
        var stack = new Array();
        var textflag= 0,latexflag= 0,blockflag={val: 0};
        var N = 0;
        for (var j=0;j<cont.length;j++) {
            curline= cont[j].trim();
            if(curline=="") {
                if(textflag) textflag|= 2;
                continue;
            }
            if(curline.indexOf("$$")>=0 && curline.indexOf("$$")==curline.lastIndexOf("$$")) {
                latexflag^=1;
                if(latexflag) {
                    // outstr+= "<br/>";
                }
                else {
                    outstr+= curline;
                    textflag= 0;
                    continue;
                }
            }
            if(latexflag) {
                outstr+= curline;
                continue;
            }
            blockflag.val= 0;
            curline= indextrans(curline,blockflag);
            curline= transbrackets(curline,"**","strong");
            curline= transbrackets(curline,"__","em");
            
            if(N>0 && stack[N]=="ul" && curline.indexOf('* ')!=0) {
                stack[N--]= "";
                outstr += "</ul>";
                textflag= 0;
            }
            if(N>0 && stack[N]=="bq" && curline.indexOf('&gt; ')!=0) {
                stack[N--]= "";
                outstr += "</blockquote></div><br/>";
                textflag= 0;
            }
            if(N>0 && stack[N]=="ol" && !(
                curline.indexOf('1. ')==0 ||
                curline.indexOf('2. ')==0 ||
                curline.indexOf('3. ')==0 ||
                curline.indexOf('4. ')==0 ||
                curline.indexOf('5. ')==0 ||
                curline.indexOf('6. ')==0 ||
                curline.indexOf('7. ')==0 ||
                curline.indexOf('8. ')==0 ||
                curline.indexOf('9. ')==0
                    ) ) {
                stack[N--]= "";
                outstr += "</ol>";
                textflag= 0;
            }
            if(N>0 && stack[N]=="table" && curline.indexOf('|')!=0) {
                stack[N--]= "";
                outstr += "</tbody></table>";
                textflag= 0;
            }
            if (curline.indexOf('---')==0) {
                outstr += "<div class=\"mdui-divider\"></div><br/>";
            }  else if (curline.indexOf('|')==0) {
                if(curline.indexOf('|:')==0) continue;
                if (N==0 || stack[N]!="table") {
                    stack[++N]= "table";
                    outstr += "<table class=\"mdui-table\"><thead><tr>";
                    var tcont = curline.split("|");
                    for(var k=0;k<tcont.length;k++) {
                        outstr+= "<th>" + tcont[k] + "</th>";
                    }
                    outstr+= "</tr></thead><tbody>"
                } else {
                    outstr += "<tr>";
                    var tcont = curline.split("|");
                    for(var k=0;k<tcont.length;k++) {
                        outstr+= "<td>" + tcont[k] + "</td>";
                    }
                    outstr+= "</tr>"
                }
            } else if (curline.indexOf('* ')==0) {
                if (N==0 || stack[N]!="ul") {
                    stack[++N]= "ul";
                    outstr += "<ul>";
                }
                outstr += "<li>"+curline.slice(2)+"</li>";
            } else if (
            curline.indexOf('1. ')==0 ||
            curline.indexOf('2. ')==0 ||
            curline.indexOf('3. ')==0 ||
            curline.indexOf('4. ')==0 ||
            curline.indexOf('5. ')==0 ||
            curline.indexOf('6. ')==0 ||
            curline.indexOf('7. ')==0 ||
            curline.indexOf('8. ')==0 ||
            curline.indexOf('9. ')==0) {
                if (N==0 || stack[N]!="ol") {
                    stack[++N]= "ol";
                    outstr += "<ol>";
                }
                outstr += "<li>"+curline.slice(3)+"</li>";
            } else {
                if (curline.indexOf('&gt; ')==0) {
                    if (N==0 || stack[N]!="bq") {
                        stack[++N]= "bq";
                        outstr += "<div class=\"mdui-typo\"><blockquote>";
                        textflag= 0;
                    }
                    curline = curline.slice(5);
                } 
                if(blockflag.val || curline.indexOf('$$')==0) {
                    textflag= 0;
                }
                else {
                    // if(textflag&2) outstr+= "<br/>";
                    // if(textflag&1) outstr+= "<br/>";
                    textflag= 1;
                }
                outstr += "<p>" + curline + "</p>";
            }
            outstr += "\n";
        }
        elements[i].innerHTML= outstr;
    }
}