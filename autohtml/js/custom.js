var newElements = [];
var i = 0;


function printHtml() {
    $(".panel-body").empty();
    
    for( var i = 0; i < newElements.length; i++) {
        //new_content += newElements[i];
        $(".panel-body").append(document.createTextNode(newElements[i])).append('<br/>');
    }
}

function addLine() {
    
    var new_content = ""
    // Select the current input line
    var currentLine = $("fieldset .row").last();
    // Get the current input line's div's ID
    var newID = (currentLine.attr("data-id"));
    
    var htmlElement = update_html_content(currentLine);
        
    // Push htmlElement into an array
    newElements.push(htmlElement);
    i++;
        
    // Create another input line, append to the form
    var object = $('div[data-id="1"]');
    object.clone().attr('data-id', ++newID).appendTo('fieldset');
    
    printHtml();    
}

$('.add').click(function() {
    addLine();
});

$('body').on('click', '.update', function(e) {
    var data_id = $(this).closest('div.row').attr('data-id');
    var currentLine = $("div[data-id=" + data_id + "]");
    
    var htmlElement = update_html_content(currentLine);
    
    newElements[data_id - 1] = htmlElement;
    
    printHtml();
});

function update_html_content(currentLine) {
    // Get current Tag's vale, could be p or br
    var currentTag = currentLine.find("select[name='tag'] option:selected").text();
    // Get current Tag's Class
    var currentClass = currentLine.find("select[name='class'] option:selected").text(); 
    
    // Get the textarea's content
    var currentText = currentLine.find("textarea").val(); 
    
    // If the tag is not <br>
    if(currentTag != "br" && currentClass != "") {
        // create html Element format as <TAG_NAME class="TAG_CLASS">TAG_CONTENT</TAG_NAME>
    var htmlElement = '<' + currentTag + ' class="' + currentClass + '">' + currentText + '</' + currentTag + '>';
    }
    else if (currentTag == "br"){
    // create just <br>
    var htmlElement = "<br>"
    }
    else if(currentTag != "br" && currentClass == "") {
        var htmlElement = '<' + currentTag + '>' + currentText + '</' + currentTag + '>';
    }
    
    return htmlElement;
}
