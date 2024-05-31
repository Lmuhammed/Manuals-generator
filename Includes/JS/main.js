var formfield = document.getElementById('dynamic_part');
function add(){
  // element name
  var newField = document.createElement('input');
  newField.setAttribute('type','text');
  newField.setAttribute('name','element_name[]');
  newField.setAttribute('class','form-control mt-3 mb-3');
  newField.setAttribute('placeholder','إسم العنصر مثال  : while');
  formfield.appendChild(newField);
   // element descr
   var newField = document.createElement('input');
  newField.setAttribute('type','text');
  newField.setAttribute('name','element_description[]');
  newField.setAttribute('class','form-control mt-3 mb-3');
  newField.setAttribute('placeholder','وصف العنصر مثال  : حلقة التكرارية لتكرار مجموعة أوامر حتى يتنفذ الشرط المطلوب');
  formfield.appendChild(newField);
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
  formfield.appendChild(bdo);
}

function remove(){
  console.log("قرييييييييبا ، إن شاء الله ");
  /*
  var input_tags = formfield.getElementsByTagName('input');
  var text = formfield.getElementsByTagName('textarea'); 
  */
  /* if(input_tags.length > 0) {
    formfield.removeChild(input_tags[(input_tags.length) - 1]);
    formfield.removeChild(text[(text.length)-1 ]);
  } */
 

}