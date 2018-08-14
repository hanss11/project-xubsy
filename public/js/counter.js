$('textarea').keydown(updateCount);
$('textarea').keyup(updateCount);
function updateCount() {

  var characterCount = $(this).val().length,
      current = $('#current'),
      maximum = $('#maximum'),
      theCount = $('#the-count');

  current.text(characterCount);


  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 70) {
    current.css('color', '#000');
    current.css('font-weight', 'normal');
  }
  if (characterCount > 70 && characterCount < 90) {
    current.css('color', '#EE9D69');
    current.css('font-weight', 'normal');
  }
  if (characterCount > 90 && characterCount < 100) {
    current.css('color', '#793535');
    current.css('font-weight', 'normal');
  }
  if (characterCount > 100 && characterCount < 120) {
    current.css('color', '#841c1c');
    current.css('font-weight', 'normal');
  }
  if (characterCount > 130 && characterCount < 150) {
    current.css('color', '#8f0001');
    current.css('font-weight', 'bold');
  }

  if (characterCount == 190) {
    maximum.css('color', '#8f0001');
    current.css('color', '#8f0001');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#000');
    theCount.css('font-weight','normal');
  }


};
