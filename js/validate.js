function cmbsexoValidate(){ 
var message, x;
message = document.getElementById("sexoError");
message.innerHTML = "";
x=document.getElementById("sexo").value;
try {  
	if(x=='#') throw "Elija una Opción";
	document.getElementById("sexo").style.borderColor = "#d5d5d5"; 
}
    catch(err) {
		document.getElementById("sexo").style.borderColor = "red";
		document.getElementById("sexoError").style.display = "block";
		setTimeout("document.getElementById('sexoError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("sexo").focus();
    } 
}

function cmbtipoValidate(){ 
var message, x;
message = document.getElementById("tipoError");
message.innerHTML = "";
x=document.getElementById("tipo").value;
try {  
	if(x=='#') throw "Elija un Puesto para el Usuario";
	document.getElementById("tipo").style.borderColor = "#d5d5d5"; 
}
    catch(err) {
		document.getElementById("tipo").style.borderColor = "red";
		document.getElementById("tipoError").style.display = "block";
		setTimeout("document.getElementById('tipoError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("tipo").focus();
    } 
}

function cmbestValidate(){ 
var message, x;
message = document.getElementById("estError");
message.innerHTML = "";
x=document.getElementById("id_estado").value;
try {  
	if(x=='#') throw "Elija una Opción";
	document.getElementById("id_estado").style.borderColor = "#d5d5d5"; 
}
    catch(err) {
		document.getElementById("id_estado").style.borderColor = "red";
		document.getElementById("estError").style.display = "block";
		setTimeout("document.getElementById('estError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("id_estado").focus();
    } 
}

function nombreEValidate(obj) {
    var message, x;
    message = document.getElementById("nombreEError");
    message.innerHTML = "";
    x = document.getElementById("nombre_empresa").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("nombre_empresa").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("nombre_empresa").style.borderColor = "red";
		document.getElementById("nombreEError").style.display = "block";
		setTimeout("document.getElementById('nombreEError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("nombre_empresa").focus();
    }
}

function rfcValidate(obj) {
    var message, x;
    message = document.getElementById("rfcError");
    message.innerHTML = "";
    x = document.getElementById("rfc").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("rfc").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("rfc").style.borderColor = "red";
		document.getElementById("rfcError").style.display = "block";
		setTimeout("document.getElementById('rfcError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("rfc").focus();
    }
}


function cValidate(obj) {
    var message, x;
    message = document.getElementById("cError");
    message.innerHTML = "";
    x = document.getElementById("contacto").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("contacto").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("contacto").style.borderColor = "red";
		document.getElementById("cError").style.display = "block";
		setTimeout("document.getElementById('cError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("contacto").focus();
    }
}


function nombreValidate(obj) {
    var message, x;
    message = document.getElementById("nombreError");
    message.innerHTML = "";
    x = document.getElementById("nombre_usuario").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("nombre_usuario").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("nombre_usuario").style.borderColor = "red";
		document.getElementById("nombreError").style.display = "block";
		setTimeout("document.getElementById('nombreError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("nombre_usuario").focus();
    }
}

function apepValidate(obj) {
    var message, x;
    message = document.getElementById("apeError");
    message.innerHTML = "";
    x = document.getElementById("apellido_p").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("apellido_p").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("apellido_p").style.borderColor = "red";
		document.getElementById("apeError").style.display = "block";
		setTimeout("document.getElementById('apeError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("apellido_p").focus();
    }
}

function apemValidate(obj) {
    var message, x;
    message = document.getElementById("apemError");
    message.innerHTML = "";
    x = document.getElementById("apellido_m").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("apellido_m").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("apellido_m").style.borderColor = "red";
		document.getElementById("apemError").style.display = "block";
		setTimeout("document.getElementById('apemError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("apellido_m").focus();
    }
}

function emailValidate(obj) {
    var message, x;
    message = document.getElementById("emailError");
    message.innerHTML = "";
    x = document.getElementById("email").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese su correo siguiendo el patrón abc@mail.com";
		document.getElementById("email").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("email").style.borderColor = "red";
		document.getElementById("emailError").style.display = "block";
		setTimeout("document.getElementById('emailError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("email").focus();
    }
}


function tel1Validate(obj) {
    var message, x;
    message = document.getElementById("tel1Error");
    message.innerHTML = "";
    x = document.getElementById("tel1").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese su número teléfonico a 10 dígitos";
		document.getElementById("tel1").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("tel1").style.borderColor = "red";
		document.getElementById("tel1Error").style.display = "block";
		setTimeout("document.getElementById('tel1Error').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("tel1").focus();
    }
}



function telValidate(obj) {
    var message, x;
    message = document.getElementById("telError");
    message.innerHTML = "";
    x = document.getElementById("tel").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese su número teléfonico a 10 dígitos";
		document.getElementById("tel").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("tel").style.borderColor = "red";
		document.getElementById("telError").style.display = "block";
		setTimeout("document.getElementById('telError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("tel").focus();
    }
}

function coloniaValidate(obj) {
    var message, x;
    message = document.getElementById("coloniaError");
    message.innerHTML = "";
    x = document.getElementById("colonia").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("colonia").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("colonia").style.borderColor = "red";
		document.getElementById("coloniaError").style.display = "block";
		setTimeout("document.getElementById('coloniaError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("colonia").focus();
    }
}

function calleValidate(obj) {
    var message, x;
    message = document.getElementById("calleError");
    message.innerHTML = "";
    x = document.getElementById("calle").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("calle").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("calle").style.borderColor = "red";
		document.getElementById("calleError").style.display = "block";
		setTimeout("document.getElementById('calleError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("calle").focus();
    }
}

function numValidate(obj) {
    var message, x;
    message = document.getElementById("numError");
    message.innerHTML = "";
    x = document.getElementById("num").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("num").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("num").style.borderColor = "red";
		document.getElementById("numError").style.display = "block";
		setTimeout("document.getElementById('numError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("num").focus();
    }
}

function cpValidate(obj) {
    var message, x;
    message = document.getElementById("cpError");
    message.innerHTML = "";
    x = document.getElementById("cp").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese su C.P. a 5 dígitos";
		document.getElementById("cp").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("cp").style.borderColor = "red";
		document.getElementById("cpError").style.display = "block";
		setTimeout("document.getElementById('cpError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("cp").focus();
    }
}

function userValidate(obj) {
    var message, x;
    message = document.getElementById("userError");
    message.innerHTML = "";
    x = document.getElementById("user").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese su nombre de Usuario";
		document.getElementById("user").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("user").style.borderColor = "red";
		document.getElementById("userError").style.display = "block";
		setTimeout("document.getElementById('userError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("user").focus();
    }
}

function passwordValidate(obj) {
    var message, x;
    message = document.getElementById("passwordError");
    message.innerHTML = "";
    x = document.getElementById("password").value;
    try { 
        if(!obj.checkValidity()) throw "Su contraseña debe contener al menos 1 Letra Minúscula, 1 Mayúscula y 1 Número.";
		document.getElementById("password").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("password").style.borderColor = "red";
		document.getElementById("passwordError").style.display = "block";
		setTimeout("document.getElementById('passwordError').style.display='none'",5000);
		message.innerHTML = err;
		document.getElementById("password").value = "";
		document.getElementById("password").focus();
    }
}



function sueldValidate(obj) {
    var message, x;
    message = document.getElementById("suelError");
    message.innerHTML = "";
    x = document.getElementById("sueldo_base").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese el monto de sueldo";
		document.getElementById("sueldo_base").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("sueldo_base").style.borderColor = "red";
		document.getElementById("suelError").style.display = "block";
		setTimeout("document.getElementById('suelError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("sueldo_base").focus();
    }
}


function dateValidate(obj) {
    var message, x;
    message = document.getElementById("dateError");
    message.innerHTML = "";
    x = document.getElementById("date").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese un formato valido para fecha AAAA/MM/DD o AAAA-MM-DD";
		document.getElementById("date").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("date").style.borderColor = "red";
		document.getElementById("dateError").style.display = "block";
		setTimeout("document.getElementById('dateError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("date").focus();
    }
}

function dateValidate1(obj) {
    var message, x;
    message = document.getElementById("dateError1");
    message.innerHTML = "";
    x = document.getElementById("date1").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese un formato valido para fecha AAAA/MM/DD o AAAA-MM-DD";
		document.getElementById("date1").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("date1").style.borderColor = "red";
		document.getElementById("dateError1").style.display = "block";
		setTimeout("document.getElementById('dateError1').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("date1").focus();
    }
}


function cursoValidate(obj) {
    var message, x;
    message = document.getElementById("cursoError");
    message.innerHTML = "";
    x = document.getElementById("curso").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("curso").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("curso").style.borderColor = "red";
		document.getElementById("cursoError").style.display = "block";
		setTimeout("document.getElementById('cursoError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("curso").focus();
    }
}


function EMPFValidate(obj) {
    var message, x;
    message = document.getElementById("EMPFError");
    message.innerHTML = "";
    x = document.getElementById("empresa").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("empresa").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("empresa").style.borderColor = "red";
		document.getElementById("EMPFError").style.display = "block";
		setTimeout("document.getElementById('EMPFError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("empresa").focus();
    }
}


function costValidate(obj) {
    var message, x;
    message = document.getElementById("costError");
    message.innerHTML = "";
    x = document.getElementById("costo").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("costo").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("costo").style.borderColor = "red";
		document.getElementById("costError").style.display = "block";
		setTimeout("document.getElementById('costError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("costo").focus();
    }
}


function apoValidate(obj) {
    var message, x;
    message = document.getElementById("apoError");
    message.innerHTML = "";
    x = document.getElementById("apoyo").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("apoyo").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("apoyo").style.borderColor = "red";
		document.getElementById("apoError").style.display = "block";
		setTimeout("document.getElementById('apoError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("apoyo").focus();
    }
}



function nbValidate(obj) {
    var message, x;
    message = document.getElementById("nbError");
    message.innerHTML = "";
    x = document.getElementById("banco").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("banco").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("banco").style.borderColor = "red";
		document.getElementById("nbError").style.display = "block";
		setTimeout("document.getElementById('nbError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("banco").focus();
    }
}


function ntValidate(obj) {
    var message, x;
    message = document.getElementById("ntError");
    message.innerHTML = "";
    x = document.getElementById("nom_tcuenta").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("nom_tcuenta").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("nom_tcuenta").style.borderColor = "red";
		document.getElementById("ntError").style.display = "block";
		setTimeout("document.getElementById('ntError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("nom_tcuenta").focus();
    }
}

function clValidate(obj) {
    var message, x;
    message = document.getElementById("clError");
    message.innerHTML = "";
    x = document.getElementById("clabe").value;
    try { 
        if(!obj.checkValidity()) throw "Ingrese su clave bancaria a 18 dígitos";
		document.getElementById("clabe").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("clabe").style.borderColor = "red";
		document.getElementById("clError").style.display = "block";
		setTimeout("document.getElementById('clError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("clabe").focus();
    }
}

function ncValidate(obj) {
    var message, x;
    message = document.getElementById("ncError");
    message.innerHTML = "";
    x = document.getElementById("no_cuenta").value;
    try { 
        if(!obj.checkValidity()) throw "Este Campo es Obligatorio";
		document.getElementById("no_cuenta").style.borderColor = "#d5d5d5";	
    }
    catch(err) {
		document.getElementById("no_cuenta").style.borderColor = "red";
		document.getElementById("ncError").style.display = "block";
		setTimeout("document.getElementById('ncError').style.display='none'",2000);
		message.innerHTML = err;
		document.getElementById("no_cuenta").focus();
    }
}





