// conceptuel Rich Text Editor
// http://www.conceptuel.co.uk
//
// version 1.02
// Improve compatibility with Mozilla Browser
// Replace Link picker from a javascript prompt to a popup window
//
// version 1.01
// Replace Image picker from a javascript prompt to a popup window
//
// version 1.00
// change core application to support multiple languages
// Add Smiley picker

//init variables
var isRichText = false;
var rng;
var currentRTE;
var allRTEs = "";

var isIE;
var isGecko;
var isSafari;
var isKonqueror;

var imagesPath;
var includesPath;
var cssFile;

var language;


function initRTE(imgPath, incPath, css, lang) {
	//set browser vars
	var ua = navigator.userAgent.toLowerCase();
	isIE = ((ua.indexOf("msie") != -1) && (ua.indexOf("opera") == -1) && (ua.indexOf("webtv") == -1));
	isGecko = (ua.indexOf("gecko") != -1);
	isSafari = (ua.indexOf("safari") != -1);
	isKonqueror = (ua.indexOf("konqueror") != -1);

	//check to see if designMode mode is available
	if (document.getElementById && document.designMode && !isSafari && !isKonqueror) {
		isRichText = true;
	}

	if(!isIE) document.captureEvents(Event.MOUSEOVER | Event.MOUSEOUT | Event.MOUSEDOWN | Event.MOUSEUP);
	document.onmouseover = raiseButton;
	document.onmouseout  = normalButton;
	document.onmousedown = lowerButton;
	document.onmouseup   = raiseButton;

	//set paths vars
	imagesPath = imgPath;
	includesPath = incPath;
	cssFile = css;
        language = lang;

	//for testing standard textarea, uncomment the following line
	//isRichText = false;
}

function writeRichText(rte, html, width, height, buttons, readOnly) {
	if (isRichText) {
		if (allRTEs.length > 0) allRTEs += ";";
		allRTEs += rte;
		writeRTE(rte, html, width, height, buttons, readOnly, language);
	} else {
		writeDefault(rte, html, width, height, buttons, readOnly);
	}
}

function writeDefault(rte, html, width, height, buttons, readOnly) {
	if (!readOnly) {
		document.writeln('<textarea name="' + rte + '" id="' + rte + '" style="width: ' + width + 'px; height: ' + height + 'px; border:1px solid red;">' + html + '</textarea>');
	} else {
		document.writeln('<textarea name="' + rte + '" id="' + rte + '" style="width: ' + width + 'px; height: ' + height + 'px;" readonly>' + html + '</textarea>');
	}
}

function raiseButton(e) {
	if (isIE) {
		var el = window.event.srcElement;
	} else {
		var el= e.target;
	}

	className = el.className;
	if (className == 'btnImage' || className == 'btnImageLowered') {
		el.className = 'btnImageRaised';
	}
}

function normalButton(e) {
	if (isIE) {
		var el = window.event.srcElement;
	} else {
		var el= e.target;
	}

	className = el.className;
	if (className == 'btnImageRaised' || className == 'btnImageLowered') {
		el.className = 'btnImage';
	}
}

function lowerButton(e) {
	if (isIE) {
		var el = window.event.srcElement;
	} else {
		var el= e.target;
	}

	className = el.className;
	if (className == 'btnImage' || className == 'btnImageRaised') {
		el.className = 'btnImageLowered';
	}
}

function writeRTE(rte, html, width, height, buttons, readOnly,language) {
	if (isIE) {
		var tablewidth = width;
	} else {
		var tablewidth = width + 4;
	}

        switch(language) {
            case 'EN' :
            default   :
               var styleWord     = 'Style';
               var fontWord      = 'Font';
               var sizeWord      = 'Size';
               var boldWord      = 'Bold';
               var italicWord    = 'Italic';
               var underlineWord = 'Underline';
               var alignLWord    = 'Align Left';
               var alignCWord    = 'Center';
               var alignRWord    = 'Align Right';
               var alignFWord    = 'Justify Full';
               var rulerWord     = 'Horizontal Rule';
               var orderWord     = 'Ordered List'
               var unorderWord   = 'Unordered List'
               var outdentWord   = 'Outdent'
               var indentWord    = 'Indent'
               var textColorWord = 'Text Color'
               var backColorWord = 'Background Color'
               var linkWord      = 'Insert Link'
               var imageWord     = 'Add Image'
               break;
            }


	if (readOnly) buttons = false;
	if (buttons == true) {
		document.writeln('<style type="text/css">');
		document.writeln('.btnImage { background-color:#f3f5f7; border: 1px solid silver; margin:4px 2px 4px 2px; padding:2px; cursor: pointer; cursor: hand;}');
		document.writeln('.btnImageRaised { background-color:#f3f5f7; border: 1px outset; margin:4px 2px 4px 2px; padding:2px; cursor: pointer; cursor: hand;}');
		document.writeln('.btnImageLowered { background-color:#f3f5f7; border: 1px inset; margin:4px 2px 4px 2px; padding:2px; cursor: pointer; cursor: hand;}');
		document.writeln('.vertSep { background-color:#f3f5f7;}');
		document.writeln('.btnBack { background-color:#fff; letter-spacing:0;}');
		document.writeln('img { border-style:none; }');
		document.writeln('</style>');
		document.writeln('<table class="btnBack" cellpadding="0" cellspacing="0" id="Buttons2_' + rte + '" width="' + tablewidth + '">');
		document.writeln('	<tr>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'bold.gif" alt="' + boldWord + '" title="' +boldWord + '" style="margin:0; margin-right:2px;" onClick="FormatText(\'' + rte + '\', \'bold\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'italic.gif" alt="' + italicWord + '" title="' + italicWord + '" onClick="FormatText(\'' + rte + '\', \'italic\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'underline.gif" alt="' + underlineWord + '" title="' + underlineWord + '" onClick="FormatText(\'' + rte + '\', \'underline\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'left_just.gif" alt="' + alignLWord + '" title="' + alignLWord + '" onClick="FormatText(\'' + rte + '\', \'justifyleft\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'centre.gif" alt="' + alignCWord + '" title="' + alignCWord + '" onClick="FormatText(\'' + rte + '\', \'justifycenter\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'right_just.gif" alt="' + alignRWord + '" title="' + alignRWord + '" onClick="FormatText(\'' + rte + '\', \'justifyright\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'hr.gif" alt="' + rulerWord + '" title="' + rulerWord + '" onClick="FormatText(\'' + rte + '\', \'inserthorizontalrule\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'numbered_list.gif" alt="' + orderWord + '" title="' + orderWord + '" onClick="FormatText(\'' + rte + '\', \'insertorderedlist\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'list.gif" alt="' + unorderWord + '" title="' + unorderWord + '" onClick="FormatText(\'' + rte + '\', \'insertunorderedlist\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'outdent.gif" alt="' + outdentWord + '" title="' + outdentWord + '" onClick="FormatText(\'' + rte + '\', \'outdent\', \'\')"></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'indent.gif" alt="' + indentWord + '" title="' + indentWord + '" onClick="FormatText(\'' + rte + '\', \'indent\', \'\')"></td>');
		document.writeln('		<td><div id="forecolor_' + rte + '"><img class="btnImage" src="' + imagesPath + 'textcolor.gif" alt="' + textColorWord + '" title="' + textColorWord + '" onClick="popup(\'conceptRTEpalette.html?language=' + language + '&rte=' + rte + '&command=forecolor\', \'palette\',170,250)"></div></td>');
		document.writeln('		<td><div id="hilitecolor_' + rte + '"><img class="btnImage" src="' + imagesPath + 'bgcolor.gif" alt="' + backColorWord + '" title="' + backColorWord + '" onClick="popup(\'conceptRTEpalette.html?language=' + language + '&rte=' + rte + '&command=hilitecolor\', \'palette\',170,250)"></div></td>');
		document.writeln('		<td><img class="btnImage" src="' + imagesPath + 'image.gif" alt="' + imageWord + '" title="' + imageWord + '" onClick="popup(\'conceptRTEimage.html?language=' + language + '&rte=' + rte + '\', \'selectImage\',400,500)"></td>');
		document.writeln('		<td width="100%"></td>');
		document.writeln('	</tr>');
		document.writeln('</table>');
	}
	document.writeln('<iframe id="' + rte + '" name="' + rte + '" width="' + width + 'px" height="' + height + 'px"></iframe>');
	document.writeln('<input type="hidden" id="hdn' + rte + '" name="' + rte + '" value="">');
	document.getElementById('hdn' + rte).value = html;
	enableDesignMode(rte, html, readOnly);
}

function enableDesignMode(rte, html, readOnly) {
	var frameHtml = "<html id=\"" + rte + "\">\n";
	frameHtml += "<head>\n";
	//to reference your stylesheet, set href property below to your stylesheet path and uncomment
	if (cssFile.length > 0) {
		frameHtml += "<link media=\"all\" type=\"text/css\" href=\"" + cssFile + "\" rel=\"stylesheet\">\n";
	}
	frameHtml += "<style>\n";
	frameHtml += "body {\n";
	frameHtml += "	background: #FFFFFF;\n";
	frameHtml += "	margin: 0px;\n";
	frameHtml += "	padding: 0px;\n";
	frameHtml += "}\n";
	frameHtml += "</style>\n";
	frameHtml += "</head>\n";
	frameHtml += "<body class=rte>\n";
	frameHtml += html + "\n";
	frameHtml += "</body>\n";
	frameHtml += "</html>";

	if (document.all) {
		var oRTE = frames[rte].document;
		oRTE.open();
		oRTE.write(frameHtml);
		oRTE.close();
		if (!readOnly) oRTE.designMode = "On";
	} else {
		try {
			if (!readOnly) document.getElementById(rte).contentDocument.designMode = "on";
			try {
				var oRTE = document.getElementById(rte).contentWindow.document;
				oRTE.open();
				oRTE.write(frameHtml);
				oRTE.close();
				if (isGecko && !readOnly) {
					//attach a keyboard handler for gecko browsers to make keyboard shortcuts work
					oRTE.addEventListener("keypress", kb_handler, true);
				}
			} catch (e) {
				alert("Error preloading content.");
			}
		} catch (e) {
			//gecko may take some time to enable design mode.
			//Keep looping until able to set.
			if (isGecko) {
				setTimeout("enableDesignMode('" + rte + "', '" + html + "', " + readOnly + ");", 10);
			} else {
				return false;
			}
		}
	}
}

function updateRTEs() {
	var vRTEs = allRTEs.split(";");
	for (var i = 0; i < vRTEs.length; i++) {
		updateRTE(vRTEs[i]);
	}
}

function updateRTE(rte) {
	if (!isRichText) return;

	//set message value
	var oHdnMessage = document.getElementById('hdn' + rte);
	var oRTE = document.getElementById(rte);
	var readOnly = false;

	//check for readOnly mode
	if (document.all) {
		if (frames[rte].document.designMode != "On") readOnly = true;
	} else {
		if (document.getElementById(rte).contentDocument.designMode != "on") readOnly = true;
	}

	if (isRichText && !readOnly) {

		if (oHdnMessage.value == null) oHdnMessage.value = "";
		if (document.all) {
			oHdnMessage.value = frames[rte].document.body.innerHTML;
		} else {
			oHdnMessage.value = oRTE.contentWindow.document.body.innerHTML;
		}

		//if there is no content (other than formatting) set value to nothing
		if (stripHTML(oHdnMessage.value.replace("&nbsp;", " ")) == ""
			&& oHdnMessage.value.toLowerCase().search("<hr") == -1
			&& oHdnMessage.value.toLowerCase().search("<img") == -1) oHdnMessage.value = "";
		//fix for gecko
		if (escape(oHdnMessage.value) == "%3Cbr%3E%0D%0A%0D%0A%0D%0A") oHdnMessage.value = "";
	}
}

//Function to format text in the text box
function FormatText(rte, command, option) {
	var oRTE;
	if (document.all) {
		oRTE = frames[rte];

		//get current selected range
		var selection = oRTE.document.selection;
		if (selection != null) {
			rng = selection.createRange();
		}
	} else {
		oRTE = document.getElementById(rte).contentWindow;

		//get currently selected range
		var selection = oRTE.getSelection();
		rng = selection.getRangeAt(selection.rangeCount - 1).cloneRange();
	}

	try {
		oRTE.focus();
	  	oRTE.document.execCommand(command, false, option);
		oRTE.focus();
	} catch (e) {
		alert(e);
	}
}

function getOffsetTop(elm) {
	var mOffsetTop = elm.offsetTop;
	var mOffsetParent = elm.offsetParent;

	while(mOffsetParent){
		mOffsetTop += mOffsetParent.offsetTop;
		mOffsetParent = mOffsetParent.offsetParent;
	}

	return mOffsetTop;
}

function getOffsetLeft(elm) {
	var mOffsetLeft = elm.offsetLeft;
	var mOffsetParent = elm.offsetParent;

	while(mOffsetParent) {
		mOffsetLeft += mOffsetParent.offsetLeft;
		mOffsetParent = mOffsetParent.offsetParent;
	}

	return mOffsetLeft;
}

function Select(rte, selectname) {
	var oRTE;
	if (document.all) {
		oRTE = frames[rte];

		//get current selected range
		var selection = oRTE.document.selection;
		if (selection != null) {
			rng = selection.createRange();
		}
	} else {
		oRTE = document.getElementById(rte).contentWindow;

		//get currently selected range
		var selection = oRTE.getSelection();
		rng = selection.getRangeAt(selection.rangeCount - 1).cloneRange();
	}

	var idx = document.getElementById(selectname).selectedIndex;
	// First one is always a label
	if (idx != 0) {
		var selected = document.getElementById(selectname).options[idx].value;
		var cmd = selectname.replace('_' + rte, '');
		oRTE.focus();
		oRTE.document.execCommand(cmd, false, selected);
		oRTE.focus();
		document.getElementById(selectname).selectedIndex = 0;
	}
}

function kb_handler(evt) {
	var rte = evt.target.id;

	//contributed by Anti Veeranna (thanks Anti!)
	if (evt.ctrlKey) {
		var key = String.fromCharCode(evt.charCode).toLowerCase();
		var cmd = '';
		switch (key) {
			case 'b': cmd = "bold"; break;
			case 'i': cmd = "italic"; break;
			case 'u': cmd = "underline"; break;
		};

		if (cmd) {
			FormatText(rte, cmd, true);
			//evt.target.ownerDocument.execCommand(cmd, false, true);
			// stop the event bubble
			evt.preventDefault();
			evt.stopPropagation();
		}
 	}
}

function stripHTML(oldString) {
	var newString = oldString.replace(/(<([^>]+)>)/ig,"");

	//replace carriage returns and line feeds
   newString = newString.replace(/\r\n/g," ");
   newString = newString.replace(/\n/g," ");
   newString = newString.replace(/\r/g," ");

	//trim string
	newString = trim(newString);

	return newString;
}

function trim(inputString) {
   // Removes leading and trailing spaces from the passed string. Also removes
   // consecutive spaces and replaces it with one space. If something besides
   // a string is passed in (null, custom object, etc.) then return the input.
   if (typeof inputString != "string") return inputString;
   var retValue = inputString;
   var ch = retValue.substring(0, 1);

   while (ch == " ") { // Check for spaces at the beginning of the string
      retValue = retValue.substring(1, retValue.length);
      ch = retValue.substring(0, 1);
   }
   ch = retValue.substring(retValue.length-1, retValue.length);

   while (ch == " ") { // Check for spaces at the end of the string
      retValue = retValue.substring(0, retValue.length-1);
      ch = retValue.substring(retValue.length-1, retValue.length);
   }

	// Note that there are two spaces in the string - look for multiple spaces within the string
   while (retValue.indexOf("  ") != -1) {
		// Again, there are two spaces in each of the strings
      retValue = retValue.substring(0, retValue.indexOf("  ")) + retValue.substring(retValue.indexOf("  ")+1, retValue.length);
   }
   return retValue; // Return the trimmed string back to the user
}

function popup(page,popupname,height,width) {
var topPosition = (screen.height - height) / 2;
var leftPosition = (screen.width - width) / 2;
var windowprops = "width=" + width + ",height=" + height + ",top=" + topPosition + ",left=" + leftPosition + ",location=no,menubar=no,toolbar=no,scrollbars=no,resizable=no,status=no";
newWindow = window.open(page,popupname,windowprops);
}