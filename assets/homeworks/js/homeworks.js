function validForm(form){
	if(form['login'].value.length < 2 || form['login'].value.length > 30 || form['passcode'].value.length < 3 || form['passcode'].value.length > 50){
		alert('Incorrect data!');
		return false;
	}
	else return true;
}
$(function(){
	$('#loginBlock > a').on('click',function(){$(this.parentNode.getElementsByClassName('slideForm')).slideToggle();});	
	$('window').on('resize',function(){
		responsive();
		});
});
function responsive(){
	var winh = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    var winw = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var screenProp = winw/winh;
	if(screenProp < 1 || winw < 1024)
		{
		
		}
}