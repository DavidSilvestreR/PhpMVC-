function userLogin(){
  var email=$('form[name=Session] input[name=email]')[0].value;
  var email=$('form[name=Session] input[name=password]')[0].value;
  if (email=='' || password=='') {

  }else {
    $.ajax({
      type:'POST',
      url:'direccion que recibe datos',
      data:{email:email,password:password}
    })done(function(response){
      if (response==1) {

      }else {
        alert('mail o contraseña incorrecta');
      }
    });
  }


}
