var dynamic_div = document.getElementById('dynamic_part');
function add(){
    var newDiv = document.createElement('div');
    newDiv.id = "Dynamic_inputs";
    newDiv.style.border = "1px solid black";
    newDiv.classList.add("px-2", "py-2" ,"mt-2" ,"mb-2");
    // element name
    var newField = document.createElement('input');
    newField.setAttribute('type','text');
    newField.setAttribute('name','element_name[]');
    newField.setAttribute('class','form-control mt-3 mb-3');
    newField.setAttribute('placeholder','إسم العنصر مثال  : while');
    newDiv.appendChild(newField);
    // element descr
    var newField = document.createElement('input');
    newField.setAttribute('type','text');
    newField.setAttribute('name','element_description[]');
    newField.setAttribute('class','form-control mt-3 mb-3');
    newField.setAttribute('placeholder','وصف العنصر مثال  : حلقة التكرارية لتكرار مجموعة أوامر حتى يتنفذ الشرط المطلوب');
    newDiv.appendChild(newField);
    // element code
    var newField = document.createElement('textarea');
    newField.setAttribute('name','element_code[]');
    newField.setAttribute('cols','80');
    newField.setAttribute('rows','3');
    newField.setAttribute('maxLength','1000');
    newField.setAttribute('class','form-control mt-3 mb-3');
    newField.setAttribute('placeholder','while true : print(\'h\')');
    newField.setAttribute('id','dynamic');
    var bdo = document.createElement('bdo');
    bdo.dir = 'ltr';
    bdo.appendChild(newField);
    newDiv.appendChild(bdo);
      if (dynamic_div.appendChild) {
          dynamic_div.appendChild(newDiv);
      } else {
        alert('!للأسف تعذر إضافة عنصر جديد ');
      }
}

function remove(){
    var elements = dynamic_div.getElementsByTagName("div"); 
    var divCount = dynamic_div.getElementsByTagName("div").length;
    var currentIndex = 0;    
    if ( currentIndex < divCount ) {
         if (elements[divCount-1].childNodes.length > 0) {
            var confirmation = confirm('هل تريد الحذف ؟');
            if (confirmation) {
                elements[divCount-1].remove();
                currentIndex++;
            } else {
                alert('! الحذف توقف');
            }
        }
    } else {
                alert('لايوجد عناصر للحذف.');
    }

}
function copyToClipboard() {

    const copyText = document.getElementById("code");
    // Create a range and select the node
    const range = document.createRange();
    range.selectNode(copyText);
    
    // Clear any existing selection
    window.getSelection().removeAllRanges();
    
    // Add the range to the selection
    window.getSelection().addRange(range);
    
    // Copy the selected text to the clipboard
    navigator.clipboard.writeText(window.getSelection().toString())
      .then(() => {
        console.log('Text copied to clipboard');
      })
      .catch(err => {
        console.error('Error copying text to clipboard:', err);
      });
    
    // Clear the selection after copying
    window.getSelection().removeAllRanges();
    alert('تم نسخ الشفرة إلى الحافظة بنجاح ');
}
